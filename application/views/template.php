	<body class="container-fluid">
        
      		<!-- Barra superior fija con opciones principales de menú -->         
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="agenda"><?= $titulo ?> </a>
           
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="bs-docs-nabvar collapse navbar-collapse bs-example-navbar-collapse-1">

             <ul class="nav navbar-nav navbar-right top">
                
                  
                <?php if ($this->session->userdata('usuario') == FALSE ) 
                  {
                        ?>
        
                   <li>
                    <?= form_open('home/ingreso', array('class'=>'form-search left')); ?>
                    <?= form_button(array('type'=>'submit', 'content'=>'Ingresar', 'class'=>'btn btn-success')); ?>
                    <?= form_close(); ?>
                  </li>
                  
                <?php     
                }    ?> 


                  <?php if ($this->session->userdata('usuario') == TRUE ) 
                            {
                                ?>
                  <li>


                    <?= form_open('home/cambio_clave', array('class'=>'form-search left')); ?>
                      <?= form_button(array('type'=>'submit', 'content'=>'Cambio de Clave', 'class'=>'btn btn-info')); ?>
                    <?= form_close(); ?>

                  </li>
                 <li>
                    <?= form_open('home/salir', array('class'=>'form-search left')); ?>
                      <?= form_button(array('type'=>'submit', 'content'=>'Salir', 'class'=>'btn btn-danger')); ?>
                    <?= form_close(); ?>

                 </li>


                <?php     
                }    ?> 

                
              </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>  

        <!-- Contenido dividos en 2, una parte izquierda para el menú, una parte central para las vistas -->
		<div class="container-fluid cuadro">            
         
            <div class="row row-fluid ">
          
            	<!-- Menú del sistema -->                                                    
                              
              <div class="col-sm-3 col-md-3">

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                </span>Contenido</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-home text-primary"></span><a href="http://localhost/miSitio/agenda/index"> Inicio</a>
                                        </td>
                                    </tr>
                                    <?php if ($this->session->userdata('usuario') == TRUE ) 
                                    {
                                        ?>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-flash text-success"></span><a href="http://localhost/miSitio/agenda/create">Crear Evento</a>
                                        </td>
                                    </tr>

                                    <?php     
                                    }    ?> 
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-file text-info"></span><a href="http://localhost/miSitio/agenda/today_events">Eventos Hoy </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-file text-success"></span><a href="http://localhost/miSitio/agenda/mes_events">Eventos Mes </a>
                                            <!-- <span class="badge">42</span> -->
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <?php if (  $this->session->userdata('perfil_name') == 'administrador' ) 

                    {
                        ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                                </span>Modulo Admin</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="http://localhost/miSitio/usuario/index">Administrar Usuarios</a>
                                            <!-- <span class="label label-success">$ 320</span> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="http://localhost/miSitio/perfil/index">Administrar Perfiles </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="http://localhost/miSitio/menu_perfil/index">Administrar Accesos  </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="http://localhost/miSitio/menu/index">Administrar Menu Perfiles</a>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>

                     <?php     
                    }    ?> 

                   <?php if ($this->session->userdata('usuario') == TRUE ) 
                            {
                                ?>
    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                                </span>Cuenta de Usuario</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="http://localhost/miSitio/home/cambio_clave">Cambiar Contraseña</a>
                                        </td>
                                    </tr>
                               
                              
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://localhost/miSitio/home/salir" class="text-danger">
                                                Salir</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                            
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                                </span>Reportes</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-usd"></span><a href="http://localhost/miSitio/agenda/asistencia">Busquedas Avanzadas</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-user"></span><a href="http://localhost/miSitio/agenda/no_asist">Eventos Asistidos</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-tasks"></span><a href="http://localhost/miSitio/agenda/asist">Eventos Derivados</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://localhost/miSitio/agenda/next_events">Eventos Próximos</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                        <?php     
                    }    ?> 
                </div>
              </div>

                <!-- Contenido de la aplicación -->

              <div class="col col-md-6 col-sm-8">
                    <?= $this->load->view($contenido) ?>
              </div>

                <!-- Calendario  -->
            
              <div class="visible-lg col col-md-3" >
                   <div class="alcalde fechaactual">
                     <h2>Nuestro Alcalde</h2>
                     <img img-responsive src="http://www.municiudadnueva.gob.pe/TGH2.png" alt="">
                 
                    <div><h2>Calendario</h2></div>
                                         
                    <div class="jquery-calendar"></div>
                    <div>
                        
                    </div>
                 
                   </div>        
              </div>

            </div>
                           
      </div>
   
 
</body>