<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Collective\Html\Eloquent\FormAccessible;






class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function registro(Request $request){

        $data = $request->all();
//dd($data);

        //usuario
        $results = DB::select('select max(IdLogin) as idlogin from login');

        $results1 = array_column($results,'idlogin') ;

        //Equipe
        $resultsequipe = DB::select('select max(idEquipes) as IdEquipes from equipes');

        $resultsequipe1 = array_column($resultsequipe,'IdEquipes') ;

        //UsuarioEquipe
        $resultsequipeusuario = DB::select('select max(idEquipeUsuario) as idEquipeUsuario from equipeusuario');


        $resultsequipeusuario1 = array_column($resultsequipeusuario,'idEquipeUsuario');

        //EmpresaUsurio
        $resultsempresausuario = DB::select('select max(EmpresaUsuarioID) as EmpresaUsuarioID from empresausuario');


        $resultsempresausuario1 = array_column($resultsempresausuario,'EmpresaUsuarioID');





        $id =  $results1['0'] + 1; //ID Auto Increment usuario
        $idequipe = $resultsequipe1['0'] + 1;//ID Auto Increment Equipe
        $idequipeusuario = $resultsequipeusuario1['0'] + 1; //ID Auto Increment equipe usuario
        $idempresausuario = $resultsempresausuario1['0'] + 1; //ID Auto Increment Empresa Usuario


        $nome = $data['nome'];

        $email = $data['email'];
        $senha = md5($data['senha']);
        $cel = $data['cel'];
//        $empresa = $data['empresaatual'];
        $trabalho = $data['trabalho'];
        $empresaatual = $data['empresa'];

//dd($empresaatual);
        $resultsemail = DB::select('select * from login where Email = :id', ['id' => $email ]);



        if (count($resultsemail) == 1){
            $empresa = DB::select('select * from empresa ');
//        dd($empresa);
            $selectDb = collect($empresa)
                ->pluck('IdEmpresa','Nome','IdEmpresa')
//            ->pluck('Nome','Nome')
                ->toArray();
//        dd($selectDb);
            $mensagem = ('Email já cadastrado');
            return view('Auth/register',compact('empresa','mensagem'));
//         dd('Email já cadastrado');
        }else{
            DB::insert('insert into duomo.login (idLogin,Nome,TelefoneCelular,Senha,TempoTrabalho,Email) values ('.$id.',"'.$nome.'",'.$cel.',"'.$senha.'"  ,'.$trabalho.',"'.$email.'")');
            DB::insert('insert into duomo.equipes(idEquipes,NomeEquipe,DtCreated,DtUpdate) values ('.$idequipe.',"'.$email.'","'.date('Y-m-d H:i:s').'","'.date('Y-m-d H:i:s').'") ');

            $searchemailequipe = DB::select('select idEquipes from equipes where NomeEquipe = :id', ['id' => $email ]);
            $searchemailequipe1 = array_column($searchemailequipe,'idEquipes');
            $searchemailusuario = DB::select('select idLogin from login where Email = :id', ['id' => $email ]);
            $searchemailusuario1 = array_column($searchemailusuario,'idLogin');


            DB::insert('insert into duomo.equipeusuario(idEquipeUsuario,Equipes_idEquipes,Login_idLogin) values ('.$idequipeusuario.',"'.$searchemailequipe1['0'].'","'.$searchemailusuario1['0'].'") ');
            DB::insert('insert into duomo.empresausuario(EmpresaUsuarioID,IdEmpresa,idLogin) values ('.$idempresausuario.',"'.$empresaatual.'","'.$searchemailusuario1['0'].'") ');


            return view('auth/login');
        }

    }

    public function logado(Request $request)
    {
//        session()->flush();
        $data = $request->all();


        $email = $data['email'];
        $senha = md5($data['senha']);

        $resultsemail = DB::select('select * from login where Email = :id', ['id' => $email ]);
        $resultssenha = DB::select('select * from login where Senha = :id', ['id' => $senha ]);
        $resultsemailid = array_column($resultsemail,'idLogin') ;

        if (count($resultsemail) == 1){

            $tarefasusuario = DB::select('select * from usuariotarefa where Login_idLogin = :id', ['id' => $resultsemailid['0'] ]);
            $empresausuario = DB::select('select * from empresausuario where idLogin = :id', ['id' => $resultsemailid['0'] ]);

            $resultsusuarioid = array_column($tarefasusuario,'Tarefa_idTarefa');

            $stringArrayF = implode(' or ',$resultsusuarioid);

            //PHP Puro
            $conexao = mysqli_connect('localhost','root','');
            $banco = mysqli_select_db($conexao,'duomo');
            mysqli_set_charset($conexao,'utf8');
            $sql = mysqli_query($conexao,"select * from Tarefa where IdTarefa = ".$stringArrayF."");
//        dd($sql);
            if ($sql == false){
                return view('dashboard/dashboard',compact('resultsemail'));
            }else{
                $tarefas=mysqli_fetch_all($sql);

            }

            if (count($resultssenha) == 1){

//                return view('dashboard/dashboard')->with('variaveis');
//                return view('dashboard/dashboard')->withName($results1);

//                return view('layouts/options',compact('resultsemail'));
                Session::put('usuario.nome', $resultsemail);
                Session::put('usuario.empresa', $empresausuario);
                return view('dashboard/dashboard', compact('tarefas','resultsemail','empresausuario'));

//                return route('dashboard', compact('resultsemail','tarefas'));
//                Route::post("dashboard","DashboardController");
//                return View::make('dashboard/dashboard', $tarefas)->nest('layouts/options', $resultsemail);

            }else{
                $mensagem = 'Senha Incorreta';
//                dd($mensagem);
                return view('auth/login',compact('mensagem'));
            }
        }else{
            $mensagem = 'Email incorreto';
            return view('auth/login',compact('mensagem'));
        }


        return redirect()->route('tarefas', [$resultsemail]);
    }

    public function reset(){

        return view('Auth/reset');

    }

    public function resetsenha(Request $request){

        $data = $request->all();


        $email = $data['email'];
        $senha = md5($data['senha']);
        $confsenha = md5($data['confsenha']) ;
        $resultsemail = DB::select('select * from login where Email = :id', ['id' => $email ]);

        if ($senha == $confsenha){


            if (count($resultsemail) == 1){
                $affected = DB::update('update login set Senha = "'.$senha.'" where Email = :id', ['id' => $email ]);

                $mensagemsucesso = 'Senha Alterada com sucesso';

                return view('auth/login',compact('mensagemsucesso'));
            }else{
               $mensagem = 'Esse email não existe na nossa base de dados';
                return view('Auth/reset',compact('mensagem'));
            }
        }else{
            $mensagem = 'Senhas Diferentes';
            return view('Auth/reset',compact('mensagem'));
        }

//        dd($data);
//

    }
    public function register(){
        $empresa = DB::select('select * from empresa ');
//        dd($empresa);
//        dd($selectDb);
        return view('Auth/register',compact('empresa'));
//
    }

}


