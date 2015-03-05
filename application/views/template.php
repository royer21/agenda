
	<body>

      		<!-- Barra superior fija con opciones principales de menú -->
        <div class="navbar navbar-inverse fondito">
            <div class="navbar fondito">
                <div class="container-fluid ">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"> <?= $titulo ?> </a>

                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <?= my_menu_ppal(); ?>
                        </ul>
                        <ul class="nav">
                            <?= form_open('agenda/search', array('class'=>'form-search')); ?>
                                <?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Evento', 'class'=>'input-medium search-query')); ?>
                                <?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn')); ?>
                            <?= form_close(); ?>
                        </ul> 
                        
                    </div>


                </div>
            </div>
        </div>

        <!-- Contenido dividos en 2, una parte izquierda para el menú, una parte central para las vistas -->
		<div class="container-fluid ">
            <div class="row-fluid">
            	<!-- Menú del sistema -->
                <?php if ($this->session->userdata('usuario') == TRUE ) 
                            {
                                ?>
                <div class="span4">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            
                                <li class="nav-header"> Menu Opciones </li>
                                  
                                <?= form_open('agenda/search', array('class'=>'form-search')); ?>
                                <?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Evento', 'class'=>'input-medium search-query')); ?>
                                <?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn')); ?>
                                <?= form_close(); ?>
                                <?= my_menu_app(); ?>

                                                                                
                        </ul>
                    </div>
                </div>

                <!-- Contenido de la aplicación -->
                <div class="span8">

                	<?= $this->load->view($contenido) ?>

                </div>
                 <?php
                }
                else{
                    ?>

                <div class="span12">

                    <?= $this->load->view($contenido) ?>

                </div>
                <?php      }
                             ?>  

            </div>

            <hr>

            