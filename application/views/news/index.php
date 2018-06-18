<!-- <h2><?php echo $title ?></h2> -->


	
	<!-- <h3><?php echo $news_item['title']; ?></h3> -->
	<!-- <a href="<?php echo site_url('news/'); ?>">Ver Notícias</a> -->

	<!-- <?php print_r($usu); ?> -->




<!-- <?php
print_r($usu);
?> -->





	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?= base_url() ?>Usuario"><h1 class="page-header">Dashboard View</h1></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                	 <!-- <?php print_r($usu2); ?> -->
                                
                                    <div class="huge"><td><?= $usua['total'] ?></td></div>
                                    <div>Usuários Cadastrados</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
          
            <!-- /.row -->


            
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h1 class="page-header">Tables</h1> -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- DataTables Advanced Tables -->

                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Senha</th>
                                        <th>E-mail</th>
                                        <th>Options</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>



                                    <?php foreach($usu2 as $usuario){ ?>
                                   
                                    	<!-- <?php print_r($usuario); ?> -->
                             	

                                    <tr class="odd gradeX">

                                       
                                        <td><?= $usuario['id_usu'] ?></td>
                                        <td><?= $usuario['usu_nome'] ?></td>
                                        <td><?= $usuario['usu_senha'] ?></td>
                                        <td><?= $usuario['usu_email'] ?></td>
                                        <td>
                                            <a href="<?= base_url('Usuario/alterar/'.$usuario['id_usu']) ?>" type="button" class="btn btn-primary">Atualizar</a>
                                              -  
                                            <a href="<?= base_url('Usuario/remover/'.$usuario['id_usu']) ?>"  type="button" class="btn btn-danger">Remover</a>
                                        </td>
                                      
                                        <!-- <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="center">4</td> -->
                         
                                    </tr>
                               
                                   <?php } ?>
                               
                         
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <!-- <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div> -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
         
            <!-- /.row -->
       


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


