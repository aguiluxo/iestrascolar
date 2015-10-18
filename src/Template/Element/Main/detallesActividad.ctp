<?php
$consulta1 = "Select A.id, A.objetivos, A.nombre, P.nombre as pronom,  O.rol, D.nombre as deptnom "
            . "from actividad A, profesor P, actividad_profesor O, departamento D "
            . "where $id=A.id and A.id=O.actividad_id and O.profesor_id=P.id and O.rol='responsable' and P.dept=D.id";

    if ($conexion->exist_some_row($consulta1)) {//comprobar que existe alguna actividad
        //Si existe cargamos la tabla con las actividades existentes (todas)
        $conexion->get_results_from_query($consulta1);
        $resultado1 = $conexion->get_rows();

        echo "<h3>Actividad</h3><p>" . $resultado1[0]['nombre'] . "</p>"
        . "<h3> Descripcion</h3>"
        . "<p>" . $resultado1[0]['objetivos'] . ""
        . "</p><div class='columna'>"
        . "<h3>Departamento</h3>"
        . "<p>" . $resultado1[0]['deptnom'] . "</p>"
        . "</div>"
        . "<div class='columna'>"
        . "<h3>Responsable</h3>"
        . "<p>" . $resultado1[0]['pronom'] . " " . $resultado1[0]['apellidos'] . "</p></div>";
    }
    $consulta2 = "Select A.id, P.nombre as pronom, P.apellidos, O.rol, D.nombre as deptnom "
            . "from actividad A, profesor P, organizar O, departamento D "
            . "where $id=A.id and A.id=O.idact and O.dniprof=P.dni and O.rol='participante' and P.dept=D.id";

    if ($conexion->exist_some_row($consulta2)) {//comprobar que existe alguna actividad
        //Si existe cargamos la tabla con las actividades existentes (todas)
        $conexion->get_results_from_query($consulta2);
        $resultado2 = $conexion->get_rows();
        echo "<div class='columna' style='width:100%'><h3>Participantes</h3>";
        for ($c2 = 0; $c2 < count($resultado2); $c2++) {
            echo "<p>" . $resultado[$c2]['pronom'] . " " . $resultado[$c2]['apellidos'] . "</p>";
        }
        echo "</div>";
    }
    $consulta3 = "Select A.id, A.trimestre, A.nombre, R.participan, C.nombre as cursonom, C.alumnos "
            . "from actividad A, participar R, curso C "
            . "where $id=A.id and A.id=R.idact and R.ncurso=C.nombre";

    if ($conexion->exist_some_row($consulta3)) {//comprobar que existe alguna actividad
        //Si existe cargamos la tabla con las actividades existentes (todas)
        $conexion->get_results_from_query($consulta3);
        $resultado3 = $conexion->get_rows();

        $totalasistentes = 0;
        echo "<div class='columna' style='width:20%'><h3>Curso</h3>";
        for ($c3 = 0; $c3 < count($resultado3); $c3++) {
            $dividendo = $resultado3[$c3]['participan'];
            $totalasistentes +=$dividendo;

            echo "<p>" . $resultado3[$c3]['cursonom'] . "</p>";
        }
        echo "</div>";
        echo "<div class='columna' style='width:40%'><h3>Participantes</h3>";
        for ($c32 = 0; $c32 < count($resultado3); $c32++) {
            echo "<p>" . $resultado3[$c32]['participan'] . "</p>";
        }
        echo "</div>";
        echo "<div class='columna' style='width: 40%'>"
        . "<h3>Total Asistentes</h3>"
        . "<p>" . $totalasistentes . "</p>"
        . "</div>";
    }
    $consulta4 = "Select A.objetivos,A.trimestre, A.fecha, A.hora_ini, A.hora_fin, D.nombre as deptnom "
            . "from actividad A, profesor P, organizar O, departamento D "
            . "where $id=A.id and A.id=O.idact and O.dniprof=P.dni and O.rol='responsable' and P.dept=D.id";

    if ($conexion->exist_some_row($consulta4)) {//comprobar que existe alguna actividad
        //Si existe cargamos la tabla con las actividades existentes (todas)
        $conexion->get_results_from_query($consulta4);
        $resultado4 = $conexion->get_rows();

        echo "<div class='columna'>"
        . "<h3>Trimestre</h3>"
        . "<p>" . $resultado4[0]['trimestre'] . "º</p>"
        . "</div>";

        echo "<div class='columna'><h3>Fecha</h3>";
        if ($resultado4[0]['fecha'] == "") {
            $fechar4 = "Sin fijar";
            echo "<p>" . $fechar4 . "</p></div>";
        } else {
            $fechar4 = $resultado4[0]['fecha'];
            echo "<p>" . $fechar4 . "</p></div>";
            echo "<div class='columna'><h3>Hora de Inicio</h3>";
            if ($resultado4[0]['hora_ini'] == "") {
                $horainir4 = "Sin fijar";
                echo "<p>" . $horainir4 . "</p></div>";
            } else {
                $horainir4 = $resultado4[0]['hora_ini'];
                echo "<p>" . substr($horainir4, 0, -3) . "</p></div>";
            }
            echo "<div class='columna'><h3>Hora Final</h3>";
            if ($resultado4[0]['hora_fin'] == "") {
                $horafinr4 = "Sin fijar";
                echo "<p>" . $horafinr4 . "</p></div>";
            } else {
                $horafinr4 = $resultado4[0]['hora_fin'];
                echo "<p>" . substr($horafinr4, 0, -3) . "</p></div>";
            }
        }
    }
    //Primero meter en una variable si hay o no financiación
    $financiacion = "Select A.id, F.cantidad, E.nombre as financianom "
            . "from actividad A, financiar F, financiador E "
            . "where $id=A.id and A.id=F.idact and F.idfinan=E.id";
    if ($conexion->exist_some_row($financiacion)) {//comprobar que existe alguna actividad
        //Si existe cargamos la tabla con las actividades existentes (todas)
        $conexion->get_results_from_query($financiacion);
        $resultado5 = $conexion->get_rows();
        $hayfinan = 1;
    } else {
        $hayfinan = 0;
    }

    //si hay financiación:
    //Cuanto hay del centro
    $financentro = "Select A.id, F.cantidad, E.nombre as financianom "
            . "from actividad A, financiar F, financiador E "
            . "where $id=A.id and A.id=F.idact and F.idfinan=E.id and E.nombre='Centro'";
    if ($conexion->exist_some_row($financentro)) {//comprobar que existe alguna actividad
        //Si existe cargamos la tabla con las actividades existentes (todas)
        $conexion->get_results_from_query($financentro);
        $resultado6 = $conexion->get_rows();
        $centro = $resultado6[0]['cantidad'];
        if ($centro > 1) {
            $centro = substr($resultado6[0]['cantidad'], 0, -3);
        }
    } else {
        $centro = 0;
    }


    //Cuanto hay de los alumnos
    $finanalumno = "Select A.id, F.cantidad, E.nombre as financianom "
            . "from actividad A, financiar F, financiador E "
            . "where $id=A.id and A.id=F.idact and F.idfinan=E.id and E.nombre='Alumno'";
    if ($conexion->exist_some_row($finanalumno)) {//comprobar que existe alguna actividad
        //Si existe cargamos la tabla con las actividades existentes (todas)
        $conexion->get_results_from_query($finanalumno);
        $resultado7 = $conexion->get_rows();
        $alumno = $resultado7[0]['cantidad'];
        if ($alumno > 1) {
            $alumno = substr($resultado7[0]['cantidad'], 0, -3);
        }
    } else {
        $alumno = 0;
    }

    //Si hay en el apartado OTROS, averiguar, nombre, cantidad
    $finanotros = "Select A.id, F.cantidad, E.nombre as financianom "
            . "from actividad A, financiar F, financiador E "
            . "where $id=A.id and A.id=F.idact and F.idfinan=E.id and E.nombre!='Alumno' and E.nombre!='Centro'";
    if ($conexion->exist_some_row($finanotros)) {//comprobar que existe alguna actividad
        //Si existe cargamos la tabla con las actividades existentes (todas)
        $conexion->get_results_from_query($finanotros);
        $resultado8 = $conexion->get_rows();
        for ($r8 = 0; $r8 < count($resultado8); $r8++) {
            $finanotros = $resultado8[$r8]['cantidad'];
            $totalotros = $totalotros + $finanotros;
        }
        if ($totalotros > 1) {
            $totalotros = substr($totalotros, 0, -3);
        }
    } else {
        $finanotros = 0;
    }

    $total = $centro + ($alumno * $totalasistentes) + $totalotros;
    if ($hayfinan == 1) {

        echo "<hr><div class='columna' style='width: 100%'><h3>Presupuesto</h3><p>" . $total . "€</p></div>";

        echo "<table id='tablaFinanciacion'>"
        . "<caption>Financiación</caption>"
        . "<tr>"
        . "<th>Financiador</th>"
        . "<th>Cantidad</th>"
        . "</tr>"
        . "<tr>"
        . "<td>Centro</td>"
        . "<td>" . $centro . "€</td>"
        . "</tr>"
        . "<tr>"
        . "<td>Alumnos</td>"
        . "<td>" . $alumno . "€</td>"
        . "</tr>"
        . "<tr>"
        . "<td>Otros</td>"
        . "<td>" . $totalotros . "€</td>"
        . "</tr></table>";
    }
?>