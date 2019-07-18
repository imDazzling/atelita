<div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <?php 

                        if(isset($portada_libro)){
                            include($portada_libro);
                        }
                        else{
                            $portada_libro = '<img class="item-photo" src="' . 'https:/www.desnivel.com/images/2012/12/de-la-montana-y-el-amor-978-84-9829-267-1-660x991.jpg' . '"/>';
                            echo $portada_libro;
                        }

                    ?>
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Titulo del producto -->
                    <h3>

                        <?php
                           if(isset($nombre_libro)){
                                include($nombre_libro);
                            }
                            else{
                                $nombre_libro = "Nombre de libro";
                                echo $nombre_libro;
                            }
                        ?>
                            

                    </h3>
                    <h5 style="color:#337ab7">Escrito por <a href="#">

                        <?php
                           if(isset($autor_libro)){
                                include($autor_libro);
                            }
                            else{
                                $autor_libro = "Nombre de autor";
                                echo $autor_libro;
                            }
                        ?>

                            

                    </a> · <small style="color:#337ab7">(En 
                        <?php
                           if(isset($librarys_libro)){
                                include($librarys_libro);
                            }
                            else{
                                echo "ninguna";
                            }
                        ?>


                     librería/s)</small></h5>
        
                    <!-- Detalles especificos -->
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>ESTADO</small></h6>                    
                        <div>
                            <div>
                                
                                <?php
                                   if(isset($estado_libro)){
                                        include($estado_libro);
                                    }
                                    else{
                                        echo "Inexistente";
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
                                    else{
                                        echo "Infinito";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>                
        
                    <!-- Agregar a librería o leer -->
                    <div class="section" style="padding-bottom:20px;">
                        <a href="index.php?m=read"><button class="btn btn-leer"><span style="margin-right:20px" aria-hidden="true"><i class="fas fa-book"></i></span> LEER</button></a>
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
                                    else{
                                        echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet esse, numquam nobis quos doloribus error veritatis nemo temporibus libero dolorum tenetur iste. Nobis alias voluptas tempora cumque molestias, pariatur tenetur!";
                                    }
                                ?>

                            </small>
                        </p>
                    </div>
                </div>		
            </div>
        </div>