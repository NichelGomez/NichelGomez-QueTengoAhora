<html>
<head>
        <title>Horario en tabla HTML</title>
        <style>
                td, tr, table, th {border: 2px solid black; text-align: center;padding: 0.5%;}
        </style>
</head>
<body>
    <?php
    if($_POST["queHorario"]=="DAW1")
    {
        include 'ArrayHorarioDAW1.php';
    }
    elseif ($_POST["queHorario"]=="DAW2") {
        include 'ArrayHorarioDAW2.php';
    }
    elseif ($_POST["queHorario"]=="PRO1")
    {
        include 'ArrayHorarioPRO1.php';
    }
    else
    {
        include 'ArrayHorarioPRO2.php';
    }
    ?>
       <table>
                <tr>
                        <th colspan="6">HORARIO</tr>
                </tr>
                <tr>
                <tr>
                        <th>HORA</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                </tr>
                        <th>8:00 a 8:55</th>
                        <td><?php echo("Módulo: ". $horario["Lunes"][1]["Modulo"]."<br>"."Docente: ". $horario["Lunes"][1]["Docente"]."<br>"."Aula: ". $horario["Lunes"][1]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Martes"][1]["Modulo"]."<br>"."Docente: ". $horario["Martes"][1]["Docente"]."<br>"."Aula: ". $horario["Martes"][1]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Miércoles"][1]["Modulo"]."<br>"."Docente: ". $horario["Miércoles"][1]["Docente"]."<br>"."Aula: ". $horario["Miércoles"][1]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Jueves"][1]["Modulo"]."<br>"."Docente: ". $horario["Jueves"][1]["Docente"]."<br>"."Aula: ". $horario["Jueves"][1]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Viernes"][1]["Modulo"]."<br>"."Docente: ". $horario["Viernes"][1]["Docente"]."<br>"."Aula: ". $horario["Viernes"][1]["Aula"])?></td>
                </tr>
                <tr>
                        <th>8:55 a 9:50</th>
                        <td><?php echo("Módulo: ". $horario["Lunes"][2]["Modulo"]."<br>"."Docente: ".$horario["Lunes"][2]["Docente"]."<br>"."Aula: ". $horario["Lunes"][2]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Martes"][2]["Modulo"]."<br>"."Docente: ".$horario["Martes"][2]["Docente"]."<br>"."Aula: ". $horario["Martes"][2]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Miércoles"][2]["Modulo"]."<br>"."Docente: ".$horario["Miércoles"][2]["Docente"]."<br>"."Aula: ". $horario["Miércoles"][2]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Jueves"][2]["Modulo"]."<br>"."Docente: ".$horario["Jueves"][2]["Docente"]."<br>"."Aula: ". $horario["Jueves"][2]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Viernes"][2]["Modulo"]."<br>"."Docente: ".$horario["Viernes"][2]["Docente"]."<br>"."Aula: ". $horario["Viernes"][2]["Aula"])?></td>
                </tr>
                <tr>
                        <th>9:50 a 10:45</th>
                        <td><?php echo("Módulo: ". $horario["Lunes"][3]["Modulo"]."<br>"."Docente: ".$horario["Lunes"][3]["Docente"]."<br>"."Aula: ". $horario["Lunes"][3]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Martes"][3]["Modulo"]."<br>"."Docente: ".$horario["Martes"][3]["Docente"]."<br>"."Aula: ". $horario["Martes"][3]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Miércoles"][3]["Modulo"]."<br>"."Docente: ".$horario["Miércoles"][3]["Docente"]."<br>"."Aula: ". $horario["Miércoles"][3]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Jueves"][3]["Modulo"]."<br>"."Docente: ".$horario["Jueves"][3]["Docente"]."<br>"."Aula: ". $horario["Jueves"][3]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Viernes"][3]["Modulo"]."<br>"."Docente: ".$horario["Viernes"][3]["Docente"]."<br>"."Aula: ". $horario["Viernes"][3]["Aula"])?></td>
                </tr>
                <tr>
                        <th>10:45 a 11:15</th>
                        <th colspan="5">DESCANSO</th>
                </tr>
                <tr>
                        <th>11:15 a 12:10</th>
                        <td><?php echo("Módulo: ". $horario["Lunes"][4]["Modulo"]."<br>"."Docente: ".$horario["Lunes"][4]["Docente"]."<br>"."Aula: ".$horario["Lunes"][4]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Martes"][4]["Modulo"]."<br>"."Docente: ".$horario["Martes"][4]["Docente"]."<br>"."Aula: ".$horario["Martes"][4]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Miércoles"][4]["Modulo"]."<br>"."Docente: ".$horario["Miércoles"][4]["Docente"]."<br>"."Aula: ".$horario["Miércoles"][4]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Jueves"][4]["Modulo"]."<br>"."Docente: ".$horario["Jueves"][4]["Docente"]."<br>"."Aula: ".$horario["Jueves"][4]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Viernes"][4]["Modulo"]."<br>"."Docente: ".$horario["Viernes"][4]["Docente"]."<br>"."Aula: ".$horario["Viernes"][4]["Aula"])?></td>
                </tr>
                <tr>
                        <th>12:10 a 13:05</th>
                        <td><?php echo("Módulo: ". $horario["Lunes"][5]["Modulo"]."<br>"."Docente: ".$horario["Lunes"][5]["Docente"]."<br>"."Aula: ".$horario["Lunes"][5]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Martes"][5]["Modulo"]."<br>"."Docente: ".$horario["Martes"][5]["Docente"]."<br>"."Aula: ".$horario["Martes"][5]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Miércoles"][5]["Modulo"]."<br>"."Docente: ".$horario["Miércoles"][5]["Docente"]."<br>"."Aula: ".$horario["Miércoles"][5]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Jueves"][5]["Modulo"]."<br>"."Docente: ".$horario["Jueves"][5]["Docente"]."<br>"."Aula: ".$horario["Jueves"][5]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Viernes"][5]["Modulo"]."<br>"."Docente: ".$horario["Viernes"][5]["Docente"]."<br>"."Aula: ".$horario["Viernes"][5]["Aula"])?></td>
                </tr>
                <tr>
                        <th>13:05 a 14:00</th>
                        <td><?php echo("Módulo: ". $horario["Lunes"][6]["Modulo"]."<br>"."Docente: ".$horario["Lunes"][6]["Docente"]."<br>"."Aula: ".$horario["Lunes"][6]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Martes"][6]["Modulo"]."<br>"."Docente: ".$horario["Martes"][6]["Docente"]."<br>"."Aula: ".$horario["Martes"][6]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Miércoles"][6]["Modulo"]."<br>"."Docente: ".$horario["Miércoles"][6]["Docente"]."<br>"."Aula: ".$horario["Miércoles"][6]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Jueves"][6]["Modulo"]."<br>"."Docente: ".$horario["Jueves"][6]["Docente"]."<br>"."Aula: ".$horario["Jueves"][6]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Viernes"][6]["Modulo"]."<br>"."Docente: ".$horario["Viernes"][6]["Docente"]."<br>"."Aula: ".$horario["Viernes"][6]["Aula"])?></td>
                </tr>
                
                


       </table> 
</body>
</html>