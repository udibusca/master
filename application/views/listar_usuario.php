<div class="container-fluid">
    <div class="side-body">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="page-title">
                    <span class="title">Usuários</span>
                    <div class="description">Lista de usuários cadastradas</div>
                </div>                            
                <div class="card">
                    <div class="card-header">
                        <div class="pull-right">
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="<?= base_url() ?>usuario/cadastro" class="btn btn-info"><i class="fa fa-plus"></i> Novo</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="datatable table table-striped dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Login</th>
                                            <th width="12%" >Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($usuarios as $usu) { ?>                                                       
                                            <tr>                                                        
                                                <td><?= $usu->NOME; ?></td>
                                                <td><?= $usu->LOGIN; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalDetalhes"><i class="fa fa-eye"></i></a>
                                                    <a href="<?= base_url('usuario/editar/' . $usu->CODIGO) ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                    <a href=""  class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>                                            
                            </div>                                        
                        </div>                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal de excluir  -->
<div id="modalDelete" class="modal fade modal-danger" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Deletar</h4>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja excluir ?</p>
            </div>
            <div class="modal-footer">
                <a  href="<?= base_url('usuario/excluir/' . $usu->CODIGO) ?>" class="btn btn-default"  >Sim</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
            </div>
        </div>
  </div>
</div>
<!-- Modal Detalhes  -->
<div id="modalDetalhes" class="modal fade modal-info" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detalhes do usuário</h4>
            </div>
            <div class="modal-body">
                <p>Codigo : <?=$usu->CODIGO;?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
  </div>
</div>

