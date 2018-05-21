<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function dashboard()
    {
        return view('dashboard/dashboard');
    }



public function createteam(){
    $idlogin = Session::get('usuario.nome.0')->idLogin;


    $resultsempresausuario = DB::select('select IdEmpresa from empresausuario where idLogin = :id', ['id' => $idlogin ]);
    $resultsusuariosall = DB::select('select * from empresausuario where IdEmpresa = :id', ['id' => $resultsempresausuario['0']->IdEmpresa ]);
//    $resultsemail = DB::select('select * from login where idLogin = :id', ['id' => $email ]);
    $resultsusuarioid = array_column($resultsusuariosall,'idLogin');
    $stringArrayF = implode(',',$resultsusuarioid);
    $teste = '(' .$stringArrayF. ')';
//    dd($teste);


    $conexao = mysqli_connect('localhost','root','');
    $banco = mysqli_select_db($conexao,'duomo');
    mysqli_set_charset($conexao,'utf8');
    $sql = mysqli_query($conexao,"select * from login where idLogin IN ".$teste."");
    $users = mysqli_fetch_all($sql);

//    dd($users);


    return view('dashboard/team',compact('users'));

}

public function team(Request $request){
        $data = $request->all();

        $nome = $data['NomeEquipe'];
        $usuario1 = $data['usuario1'];
        $usuario2 = $data['usuario2'];
        $usuario3 = $data['usuario3'];
//Equipe
    $resultsequipe = DB::select('select max(idEquipes) as idEquipes from equipes');
    $resultsequipe1 = array_column($resultsequipe,'idEquipes');
    $idequipe = $resultsequipe1['0'] + 1; //ID Auto Increment Equipe Usuario

//EquipeUsuario
    $resultsequipeusuario = DB::select('select max(idEquipeUsuario) as idEquipeUsuario from equipeusuario');
    $resultsequipeusuario1 = array_column($resultsequipeusuario,'idEquipeUsuario');
    $idequipeusuario1 = $resultsequipeusuario1['0'] + 1; //ID Auto Increment Equipe Usuario
    $idequipeusuario2 = $resultsequipeusuario1['0'] + 2; //ID Auto Increment Equipe Usuario
    $idequipeusuario3 = $resultsequipeusuario1['0'] + 3; //ID Auto Increment Equipe Usuario


//   dd($resultsequipeusuario1['0']);



    DB::insert('insert into duomo.equipes(idEquipes,NomeEquipe,DtCreated,DtUpdate) values ('.$idequipe.',"'.$nome.'","'.date('Y-m-d H:i:s').'","'.date('Y-m-d H:i:s').'") ');

    $resultsequipetotal = DB::select('select max(idEquipes) as idEquipes from equipes');
    $resultsequipetotal1 = array_column($resultsequipetotal,'idEquipes');

    DB::insert('insert into duomo.equipeusuario(idEquipeUsuario,Equipes_idEquipes,Login_idLogin) values ('.$idequipeusuario1.',"'.$resultsequipetotal1['0'].'","'.$usuario1.'") ');//#1

    if ($usuario2 != 'null'){

        DB::insert('insert into duomo.equipeusuario(idEquipeUsuario,Equipes_idEquipes,Login_idLogin) values ('.$idequipeusuario2.',"'.$resultsequipetotal1['0'].'","'.$usuario2.'") ');//#2

    }elseif ($usuario3 != 'null'){

        DB::insert('insert into duomo.equipeusuario(idEquipeUsuario,Equipes_idEquipes,Login_idLogin) values ('.$idequipeusuario3.',"'.$resultsequipetotal1['0'].'","'.$usuario3.'") ');//#3

    }


$mensagemsucesso = 'Equipe Criada com sucesso';
//return view('dashboard/team', compact('mensagemsucesso'));

 return redirect('createteam');


//return redirect()->back()->with('sucess', 'sucess');
//    dd(Session::all());





}
public function task(Request $request){
        $data = $request->all();
        $NomeTarefa = $data['NomeTarefa'];
        $DescTarefa = $data['DescTarefa'];
        $DtEntrega = $data['dataentrega'];
        $Team = $data['team'];
        $Prioridade = $data['prioridade'];
        $DtEntregaFormt = $DtEntrega . ' 00:00:00';
//    dd($DtEntregaFormt);


    $resultstarefa = DB::select('select max(idTarefa) as idTarefa from tarefa');
    $resultstarefa = array_column($resultstarefa,'idTarefa');
    $idtarefa = $resultstarefa['0'] + 1; //ID Auto Increment Equipe Usuario
//dd($idtarefa);

    DB::insert('insert into duomo.tarefa(idTarefa,DescricaoTarefa,DataEntrega,Prioridade,EquipeUsuario_idEquipeUsuario,NomeTarefa,status) values ('.$idtarefa.',"'.$DescTarefa.'","'.$DtEntregaFormt.'","'.$Prioridade.'","'.$Team.'","'.$NomeTarefa.'","1") ');//#3


    return redirect('createtask');

}


    public function createtask(){

        $idlogin = Session::get('usuario.nome.0')->idLogin;


        $resultsempresausuario = DB::select('select IdEmpresa from empresausuario where idLogin = :id', ['id' => $idlogin ]);
        $resultsusuariosall = DB::select('select * from empresausuario where IdEmpresa = :id', ['id' => $resultsempresausuario['0']->IdEmpresa ]);
        $resultsusuarioid = array_column($resultsusuariosall,'idLogin');
        $stringArrayF = implode(',',$resultsusuarioid);
        $teste = '(' .$stringArrayF. ')';
        $conexao = mysqli_connect('localhost','root','');
        $banco = mysqli_select_db($conexao,'duomo');
        mysqli_set_charset($conexao,'utf8');
        $sql = mysqli_query($conexao,"select * from equipeusuario where Login_idLogin IN ".$teste."");
        $users = mysqli_fetch_all($sql);
        $resultsusuariousers = array_column($users,'1');
        $stringArrayG = implode(',',$resultsusuariousers);
        $resultadoequipe = '(' .$stringArrayG. ')';
        $sqli = mysqli_query($conexao,"select * from equipes where idEquipes IN ".$resultadoequipe."");
        $teams = mysqli_fetch_all($sqli);
//   dd($users);

        return view('dashboard/task',compact('teams'));



//    $resultsemail = DB::select('select * from login where Email = :id', ['id' => $email ]);
    }
public function creatework(){

        return view('dashboard/work');
}

public function work(Request $request){
        $data = $request->all();
//        dd($data);
        $NomeEmpresa = $data['NomeEmpresa'];
        $CNPJ = $data['CNPJ'];
        $Endereco = $data['Endereco'];

    $resultsempresa = DB::select('select max(IdEmpresa) as IdEmpresa from empresa');
    $resultsempresa1 = array_column($resultsempresa,'IdEmpresa');
    $idempresa = $resultsempresa1['0'] + 1; //ID Auto Increment Equipe Usuario



    DB::insert('insert into duomo.empresa(IdEmpresa,Nome,CNPJ,Endereco) values ('.$idempresa.',"'.$NomeEmpresa.'","'.$CNPJ.'","'.$Endereco.'") ');

    $mensagemsucesso = 'Empresa Cadastrada com sucesso';

    return view('dashboard/work',compact('mensagemsucesso'));

    }

public function createnotification(){

    $idlogin = Session::get('usuario.nome.0')->idLogin;


    $resultsempresausuario = DB::select('select IdEmpresa from empresausuario where idLogin = :id', ['id' => $idlogin ]);
    $resultsusuariosall = DB::select('select * from empresausuario where IdEmpresa = :id', ['id' => $resultsempresausuario['0']->IdEmpresa ]);
    $resultsusuarioid = array_column($resultsusuariosall,'idLogin');
    $stringArrayF = implode(',',$resultsusuarioid);
    $teste = '(' .$stringArrayF. ')';
    $conexao = mysqli_connect('localhost','root','');
    $banco = mysqli_select_db($conexao,'duomo');
    mysqli_set_charset($conexao,'utf8');
    $sql = mysqli_query($conexao,"select * from equipeusuario where Login_idLogin IN ".$teste."");
    $users = mysqli_fetch_all($sql);
    $resultsusuariousers = array_column($users,'1');
    $stringArrayG = implode(',',$resultsusuariousers);
    $resultadoequipe = '(' .$stringArrayG. ')';
    $sqli = mysqli_query($conexao,"select * from equipes where idEquipes IN ".$resultadoequipe."");
    $teams = mysqli_fetch_all($sqli);
//   dd($users);

    return view('dashboard/notification',compact('teams'));
}
public function notification(Request $request){

        $data = $request->all();

        $NomeNotification = $data['NomeNotificacao'];
        $DtInicio = $data['dtinicio'];
        if ($data['dtfim'] == null ){
            $DtFim = '1900-01-01';
        }else{
            $DtFim = $data['dtfim'];
        }

        $Team = $data['team'];
        $Redirecionamento = $data['redirecionamento'];

    $resultsnotification = DB::select('select max(NotificationID) as NotificationID from Notification');
    $resultsnotification1 = array_column($resultsnotification,'NotificationID');
    $idnot = $resultsnotification1['0'] + 1; //ID Auto Increment Equipe Usuario


    DB::insert('insert into duomo.Notification(NotificationID,NomeNotificacao,dtinicio,dtfim,IdEquipeUsuario,redirecionamento) values ('.$idnot.',"'.$NomeNotification.'","'.$DtInicio.'","'.$DtFim.'","'.$Team.'","'.$Redirecionamento.'")');

    return redirect('createnotification');


}
public function modalget(Request $request){
//dd($request);

}
public function modalpost(Request $request){


}
public function editprofile(){
    $id = Session::get('usuario.nome.0')->idLogin;
        $user = DB::table('duomo.login')->where('IdLogin',$id)->first();
$work = DB::table('duomo.empresausuario')->where('IdLogin',$id)->first();
$workuser = DB::table('duomo.empresa')->where('IdEmpresa',$work->IdEmpresa)->first();
//dd($workuser);
return view('dashboard/profile',compact('user','workuser'));
}
public function confirmprofile(Request $request){
        $data = $request->all();
//        dd($data);
        $senha = md5($data['senha']) ;
    $id = Session::get('usuario.nome.0')->idLogin;
//    $update = [['Nome' => $data['Nome']],['TeleFoneCelular' => $data['TelCel']],['Email' => $data['email']],['TempoTrabalho' => $data['TempoTrabalho']]];
//    $updatepass = [['Nome' => $data['Nome']],['TeleFoneCelular' => $data['TelCel']],['Email' => $data['email']],['TempoTrabalho' => $data['TempoTrabalho']],['Senha' => $senha]];
        if ($data['senha'] == null){
            DB::update('update login set Nome = "'.$data['Nome'].'",TelefoneCelular = "'.$data['TelCel'].'",Email = "'.$data['email'].'",TempoTrabalho = "'.$data['TempoTrabalho'].'" where idLogin = :id', ['id' => $id ]);
        }else{
            DB::update('update login set Nome = "'.$data['Nome'].'",TelefoneCelular = "'.$data['TelCel'].'",Email = "'.$data['email'].'",TempoTrabalho = "'.$data['TempoTrabalho'].'",Senha = "'.$senha.'" where idLogin = :id', ['id' => $id ]);
            }
    return redirect('editprofile');
}
}
