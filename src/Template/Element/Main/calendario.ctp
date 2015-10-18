<?php 
include_once '/pruebaies/lib/Conection.php';
# definimos los valores iniciales para nuestro calendario 
    $month = date("n"); //cambia según los parámetros que le demos para mostrar
    $mesactual = date("n");
    $year = date("Y");
    $diaActual = date("j");
    $fechaday = $year . "-" . $mesactual . "-" . $diaActual;
    if ($month != 12) {
        $month2 = $month + 1;
    } else {
        $month2 = 1;
        $year2 = $year + 1;
    }
//hallo mes anterior
    if ($month == 1) {
        $mesanterior = 12;
        $yearanterior = $year - 1;
    } else {
        $mesanterior = $month - 1;
        $yearanterior = $year;
    }
    
    $ultimoDiaMesAnterior = date("d", (mktime(0, 0, 0, $mesanterior + 1, 1, $yearanterior) - 1));
    
# Obtenemos el dia de la semana del primer dia 
# Devuelve 0 para domingo, 6 para sabado 
    $celdasvacias = date("w", mktime(0, 0, 0, $month, 1, $year));
    $diaSemana = date("w", mktime(0, 0, 0, $month, 1, $year)) + 7;
    $diaSemana2 = date("w", mktime(0, 0, 0, $month2, 1, $year)) + 7;

# Obtenemos el ultimo dia del mes 
    $ultimoDiaMes = date("d", (mktime(0, 0, 0, $month + 1, 1, $year) - 1));
    $ultimoDiaMes2 = date("d", (mktime(0, 0, 0, $month2 + 1, 1, $year) - 1));


    $last_cell2 = $diaSemana2 + $ultimoDiaMes2;


    $meses = array(1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    

    $resultado;
    $conexion = new Conection('iestrascolar_db');
?>



            <div id="actividad">
            <div class="entradaCalendario">
                <?php
                $con = "Select A.id, A.nombre, A.objetivos, A.fecha_inicio, "
                        . "P.nombre as pronom, O.rol"
                        . "from actividad A, profesor P, actividad_profesor O "
                        . "where A.id=O.actividad_id and O.profesor_id=P.id and O.rol='responsable'";

                $conexion->get_results_from_query($con);
                if ($conexion->num_rows_cursor() > 0) {//comprobar que existe alguna actividad
                    //Si existe cargamos la tabla con las actividades existentes (todas)
                    $resultado = $conexion->get_rows();

                    for ($i = 0; $i < count($resultado); $i++) {
                        $id = $resultado[$i]['id'];
                        ?>
                        <div class="tituloInformacionActividad" id='<?php echo $resultado[$i]['id']; ?>'>
                            <div>
                                <?php
                                    echo $this->element('Main/detallesActividad'); //evitamos 200 líneas de código haciéndolas en otro archivo.
                                ?>
                                <div class='reset'></div>

                            </div>
                        </div>

                        <?php
                    }
                }
                ?>
                <table id="calendar"> 
                    <caption><?php
                        $comprobarmeses = "" . $meses[$month] . "-" . $meses[$month2] . "";
                        if ($comprobarmeses == "Diciembre-Enero") {
                            echo $meses[$month] . " " . $year . " - " . $meses[$month2] . " " . $year2;
                        } else {
                            echo $meses[$month] . " - " . $meses[$month2] . " " . $year;
                        }
                        ?></caption> 
                    <tr> <th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th> <th>Vie</th><th>Sab</th><th>Dom</th> </tr> 
                    <tr> <?php
                        $last_cell = $diaSemana + $ultimoDiaMes;
                        //// hacemos un bucle hasta 42, que es el máximo de valores que puede 
                        // haber... 6 columnas de 7 dias 70 para 2 
                        $dia = 1; //variable para determinar el mes siguiente
                        $colortd = 0; //si la variable está a 0, los td tienen una clase, a 1, otra.
                        for ($i = 1; $i <= 42; $i++) {
                            if ($i == $diaSemana) {
                                // determinamos en que dia empieza 
                                $day = 1;
                            }
                            if ($dia == $ultimoDiaMes + 1) {
                                $colortd = 1;
                                if ($meses[$month] == "Diciembre") {
                                    $year = $year + 1;
                                    $month = 1;
                                } else {
                                    $month++;
                                }

                                $day = 1;
                            }

                            $resta = $diaSemana - $i - 1;
                            $dayanterior = $ultimoDiaMesAnterior - $resta;
                            $fechaanterior = $yearanterior . "-" . $mesanterior . "-" . $dayanterior;
                            if ($i < $diaSemana || $i >= ($last_cell + $ultimoDiaMes2)) { // celda vacia 
                                if ($diaSemana < 8) {

                                    echo "<td><a class='mespasado' href='index.php?fecha=$fechaanterior' title='Pulsa para ver el mes anterior'>$dayanterior</a></td>";
                                } else {
                                    if ($i < 8) {
                                        echo "<td class='desaparecer'></td>";
                                    } else {
                                        echo "<td><a class='mespasado' href='index.php?fecha=$fechaanterior' title='Pulsa para ver el mes anterior'>$dayanterior</a></td>";
                                    }
                                }
                            } else { // mostramos el dia 
                                $fecha = $year . "-" . $month . "-" . $day;

                                if ($day == $diaActual) {

                                    if ($day == $diaActual && $fechaday == $fecha) {//controlar que no coloree el día si no es del mes
                                        echo "<td class='diahoy'><a class='dia' href='index.php?fecha=$fecha' title='Pulsa para ver el dia'>$day</a>";
                                    } else {
                                        if ($colortd == 1) {
                                            echo "<td class='otrodia'><a class='dia' href='index.php?fecha=$fecha' title='Pulsa para ver el dia'>$day</a>";
                                        } else {
                                            echo "<td class='otrodia2'><a class='dia2' href='index.php?fecha=$fecha' title='Pulsa para ver el dia'>$day</a>";
                                        }
                                    }

                                    //conexión a la base de datos y extracción en resultados 
                                    echo dayCalendar($fecha);
                                    //cierra los valores de resultado
                                    echo "</td>";
                                } else {
                                    if ($colortd == 1) {
                                        echo "<td class='otrodia'><a class='dia' href='index.php?fecha=$fecha' title='Pulsa para ver el dia'>$day</a>";
                                    } else {
                                        echo "<td class='otrodia2'><a class='dia2' href='index.php?fecha=$fecha' title='Pulsa para ver el dia'>$day</a>";
                                    }

                                    //conexión a la base de datos y extracción en resultados 
                                    echo dayCalendar($fecha);
                                    //cierra los valores de resultado
                                    echo "</td>";
                                }//cierra otro dia

                                $day++;
                                $dia++;
                            }

                            // cuando llega al final de la semana, iniciamos una linea nueva 
                            if ($i % 7 == 0) {
                                echo "</tr><tr>\n";
                            }
                        }
                        ?> 
                    </tr> 
                </table>
            </div>
        </div>