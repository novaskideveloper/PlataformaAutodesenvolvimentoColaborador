 <!-- Classic Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Modal title</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="material-icons">clear</i>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group bmd-form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Nome da Tarefa</label>
                      <input type="email" class="form-control" id="exampleEmail">
                        <div class="form-group bmd-form-group">
                          <input style="margin-top: 25px;" type="text" class="form-control" placeholder="Descrição da tarefa">
                        </div>
                        <div class="col-lg-12">
                        <div class="col-lg-4 col-md-6 col-sm-3">
                          <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary btn-round btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Equipe
                            <div class="ripple-container"></div></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; top: 40px; left: 1px; will-change: top, left;">
                              <h6 class="dropdown-header">Dropdown header</h6>
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
                              <h6 class="dropdown-header">Dropdown header</h6>
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                          </div>
                        </div> 
                            </div>
                            <div class="form-group bmd-form-group is-filled">
                    <input type="text" class="form-control datetimepicker" value="10/05/2016">
                  </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-link">Nice Button</button>
                              <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--  End Modal -->
@include('layouts.js')