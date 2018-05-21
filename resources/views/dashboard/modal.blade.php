 <!-- Classic Modal -->

 <form method="post" action="">
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Editar Tarefa</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="material-icons">clear</i>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group bmd-form-group">
                      {{--<label for="exampleEmail" class="bmd-label-floating">Nome <d></d>a Tarefa</label>--}}
                                  Nome da Tarefa:
                                  <input type="text" class="form-control" id="exampleEmail" placeholder="Nome da Tarefa">
                        <div class="form-group bmd-form-group">
                          Descrição da Tarefa:
                            <textarea style="margin-top: 25px;" type="text" class="form-control" placeholder="Descrição da tarefa"></textarea>
                          {{--<input style="margin-top: 25px;" type="text" class="form-control" placeholder="Descrição da tarefa">--}}
                        </div>
                                  <div class="form-group bmd-form-group is-filled">
                                      Data de entrega:
                                      <input type="date" class="form-control"  value="10/05/2016">
                                  </div>
                        <div class="col-lg-12">
                        <div class="col-lg-4 col-md-6 col-sm-3">
                          <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary btn-round btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Equipe
                            <div class="ripple-container"></div></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; top: 40px; left: 1px; will-change: top, left;">
                              <h6 class="dropdown-header">Selecione a Equipe</h6>
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </div>  
                              </p>
                        <div class="col-lg-4 col-md-6 col-sm-3">
                          <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary btn-round btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Prioridade
                            <div class="ripple-container"></div></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; top: 40px; left: 1px; will-change: top, left;">
                              <h6 class="dropdown-header">Selecione a prioridade</h6>
                                <a class="dropdown-item" name="1">1 - Prioridade Maxima</a>
                                <a class="dropdown-item" name="2">2 - Prioridade Intermediária</a>
                                <a class="dropdown-item" name="3">3 - Prioridade Média</a>
                                <a class="dropdown-item" name="4">4 - Baixa Prioridade</a>
                                <a class="dropdown-item" name="5">5 - Atividade Normal</a>
                            </div>
                          </div>
                          </div>
                            </p>
                            <div class="col-lg-4 col-md-6 col-sm-3">
                                <div class="dropdown">
                                    <button class="dropdown-toggle btn btn-primary btn-round btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Status
                                        <div class="ripple-container"></div></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; top: 40px; left: 1px; will-change: top, left;">
                                        <h6 class="dropdown-header">Selecione o status</h6>
                                        <a class="dropdown-item" name="2">2 - Tarefa em progresso</a>
                                        <a class="dropdown-item" name="3">3 - Tarefa Finalizada</a>
                                        <a class="dropdown-item" name="4">4 - Tarefa Pausada</a>
                                        {{--<a class="dropdown-item" name="4">4 - Baixa Prioridade</a>--}}
                                        {{--<a class="dropdown-item" name="5">5 - Atividade Normal</a>--}}
                                    </div>
                                </div>
                            </div>

                        </div> 
                            </div>


                            <div class="modal-footer">
                              <button type="submit" class="btn btn-link btn-success">Salvar alterações</button>
                              <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <!--  End Modal -->
@include('layouts.js')

 </form>