
<?php

$registros = buscarLibro( $_REQUEST["id"] );

$libro = mysqli_fetch_assoc($registros);

?>

<div class="container">
        	<div class="row">
               <div class="col-xs-4">
                    <img class="img-fluid item-photo" alt="" src="<?=PATH_FILES . "/imagenes/portadas/" . $libro["portada_libros"]?>" />

                </div>
                <div class="col-xs-5 col-6" style="border:0px solid gray">
                    <!-- Titulo del producto -->
                    <h3>

                        <?= $libro["nombre_libros"] ?>
                            

                    </h3>
                    <h5 style="color:#ad5389">Escrito por

                        <?php

                       
                        $autores = getAutoresDelLibro( $libro['id_libros'] );


                        while ( $autor = $autores->fetch_assoc() ){

                            echo "<span>" . $autor["nombre_autores"] . " - </span>";
                        }

                        ?>

                            

                    <small style="color:#ad5389">(En 
                        <?php

                            $conexion = getConexion();

                            $consulta = "SELECT count(*) FROM `libreria` WHERE `id_libros`=" . $libro['id_libros'];

                            $popularidad = $conexion->query($consulta);

                            $array_librerias = array();

                            $librerias = $popularidad->fetch_assoc();

                            $array_librerias[] = $librerias["count(*)"];

                            $librerias = implode(" ",$array_librerias);

                            echo $librerias;

                        ?>


                     librería/s)</small></h5>
        
                    <!-- Detalles especificos -->
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>ESTADO</small></h6>                    
                        <div>
                            <div>
                                
                                <?php

                                    $conexion = getConexion();

                                    $consulta = "SELECT estado.nombre_estado

                                          FROM libros, estado

                                          WHERE libros.id_estado = estado.id_estado AND 

                                          libros.id_libros =" . $libro['id_libros'];


                                    $estados = $conexion->query($consulta);

                                    while ( $estado = $estados->fetch_assoc() ){

                                        echo "<span>" . $estado["nombre_estado"] . "</span>";
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
                                   
                                ?>
                            </div>
                        </div>
                    </div>                
        
                    <!-- Agregar a librería o leer -->
                    <div class="section" style="padding-bottom:20px;">
                        <a href="index.php?m=read&id=<?= $libro['id_libros'] ?>"><button class="btn btn-leer"><span style="margin-right:20px" aria-hidden="true"><i class="fas fa-book"></i></span> LEER</button></a>
                        <h6><a href="index.php?m=lib&a=add&id=<?= $libro['id_libros'] ?>"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a mi librería</a></h6>
                    </div>
                </div>

                <div class="col-9">
                    <ul class="menu-items">
                        <li class="active">Sinopsis</li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>

                                <?= $libro["descripcion_libros"] ?>

                            </small>
                        </p>
                    </div>
                </div>		
            </div>
        </div>