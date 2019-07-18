<div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <img style="max-width:100%;" src="#" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Titulo del producto -->
                    <h3>

                        <?php
                           if(isset($nombre_libro)){
                                include($nombre_libro);
                            }
                        ?>
                            

                    </h3>
                    <h5 style="color:#337ab7">Escrito por <a href="#">

                        <?php
                           if(isset($autor_libro)){
                                include($autor_libro);
                            }
                        ?>

                            

                    </a> · <small style="color:#337ab7">(En 
                        <?php
                           if(isset($librarys_libro)){
                                include($librarys_libro);
                            }
                        ?>


                     librerías)</small></h5>
        
                    <!-- Detalles especificos -->
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>ESTADO</small></h6>                    
                        <div>
                            <div>
                                
                                <?php
                                   if(isset($estado_libro)){
                                        include($estado_libro);
                                    }
                                ?>


                                    
                            </div>
                        </div>
                    </div>   
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>Largo</small></h6>                    
                        <div>
                            <div>
                                <?php
                                   if(isset($largo_libro)){
                                        include($largo_libro);
                                    }
                                ?>
                            </div>
                        </div>
                    </div>                
        
                    <!-- Agregar a librería o leer -->
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-leer"><span style="margin-right:20px" aria-hidden="true"><i class="fas fa-book"></i></span> LEER</button>
                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a mi librería</a></h6>
                    </div>
                </div>

                <div class="col-xs-9">
                    <ul class="menu-items">
                        <li class="active">Sinopsis</li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>

                                <?php
                                   if(isset($descripcion_libro)){
                                        include($descripcion_libro);
                                    }
                                ?>


                            </small>
                        </p>
                    </div>
                </div>		
            </div>
        </div>