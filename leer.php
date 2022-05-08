<?php include 'template/header.php' ?>
<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from persona");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

            <!-- fin alerta -->
            <div class="card">
                <div class="card-header">
                    Lista de personas : LEER DATOS
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">carrera</th>
                                <th scope="col">sistema</th>
                                <th scope="col" colspan="2">Opcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($persona as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->codigo; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->edad; ?></td>
                                <td><?php echo $dato->carrera; ?></td>
                                <td><?php echo $dato->sistema; ?></td>
                                <td><a class="text-success" href="index.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-arrow-up-left"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>