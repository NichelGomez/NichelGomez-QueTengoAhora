<html>
<head>
        <title>Horario en tabla HTML</title>
        <style>
                td, tr, table, th {border: 2px solid black; text-align: center;padding: 0.5%;}
        </style>
</head>
<?php
$horario = array(
    "Lunes"=>array(1=>array("Modulo"=>"Empresa e iniciativa emprendedora", "Docente"=>"María del Sol García Tarajano", "Aula"=>"201"),
                2=>array("Modulo"=>"Desarrollo web en entorno servidor", "Docente"=>"Sergio Ramos Suarez", "Aula"=>"201"),
                3=>array("Modulo"=>"Desarrollo web en entorno servidor", "Docente"=>"Sergio Ramos Suarez", "Aula"=>"201"),
                4=>array("Modulo"=>"Desarrollo web en entorno cliente", "Docente"=>"María del Carmen Rodriguez Suarez", "Aula"=>"201"),
                5=>array("Modulo"=>"Desarrollo web en entorno cliente", "Docente"=>"María del Carmen Rodriguez Suarez", "Aula"=>"201"),
                6=>array("Modulo"=>"Desarrollo web en entorno cliente", "Docente"=>"María del Carmen Rodriguez Suarez", "Aula"=>"201")),
           
    "Martes" => array( 1 => array("Modulo" => "Despliegue de aplicaciones web", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "201"),
                2 => array("Modulo" => "Despliegue de aplicaciones web", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "201"),
                3 => array("Modulo" => "Desarrollo web en entorno servidor", "Docente" => "Sergio Ramos Suarez", "Aula" => "201"),
                4 => array("Modulo" => "Desarrollo web en entorno servidor", "Docente" => "Sergio Ramos Suarez", "Aula" => "201"),
                5 => array("Modulo" => "Diseño de interfaces web", "Docente" => "Ermis Papakonstantinou Baez", "Aula" => "201"),
                6 => array("Modulo" => "Diseño de interfaces web", "Docente" => "Ermis Papakonstantinou Baez", "Aula" => "201")),
    
    "Miércoles" => array(1 => array("Modulo" => "Desarrollo web en entorno cliente", "Docente" => "María del Carmen Rodriguez Suarez", "Aula" => "201"),
                2 => array("Modulo" => "Desarrollo web en entorno cliente", "Docente" => "María del Carmen Rodriguez Suarez", "Aula" => "201"),
                3 => array("Modulo" => "Desarrollo web en entorno servidor", "Docente" => "Sergio Ramos Suarez", "Aula" => "201"),
                4 => array("Modulo" => "Desarrollo web en entorno servidor", "Docente" => "Sergio Ramos Suarez", "Aula" => "201"),
                5 => array("Modulo" => "Diseño de interfaces web", "Docente" => "Ermis Papakonstantinou Baez", "Aula" => "201"),
                6 => array("Modulo" => "Diseño de interfaces web", "Docente" => "Ermis Papakonstantinou Baez", "Aula" => "201")),

        
    "Jueves" => array(1 => array("Modulo" => "Despliegue de aplicaciones web", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "201"),
            2 => array("Modulo" => "Despliegue de aplicaciones web", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "201"),
            3 => array("Modulo" => "Despliegue de aplicaciones web", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "201"),
            4 => array("Modulo" => "Desarrollo web en entorno cliente", "Docente" => "María del Carmen Rodriguez Suarez", "Aula" => "201"),
            5 => array("Modulo" => "Desarrollo web en entorno cliente", "Docente" => "María del Carmen Rodriguez Suarez", "Aula" => "201"),
            6 => array("Modulo" => "Empresa e iniciativa emprendedora", "Docente" => "María del Sol García Tarajano", "Aula" => "201")),

    "Viernes" => array(1 => array("Modulo" => "Diseño de interfaces web", "Docente" => "Ermis Papakonstantinou Baez", "Aula" => "201"),
            2 => array("Modulo" => "Diseño de interfaces web", "Docente" => "Ermis Papakonstantinou Baez", "Aula" => "201"),
            3 => array("Modulo" => "Despliegue de aplicaciones web", "Docente" => "María Antonia Montesdeoca Viera", "Aula" => "201"),
            4 => array("Modulo" => "Empresa e iniciativa emprendedora", "Docente" => "María del Sol García Tarajano", "Aula" => "201"),
            5 => array("Modulo" => "Desarrollo web en entorno servidor", "Docente" => "Sergio Ramos Suarez", "Aula" => "201"),
            6 => array("Modulo" => "Desarrollo web en entorno servidor", "Docente" => "Sergio Ramos Suarez", "Aula" => "201")
));

//Función que muestra el horario completo
function mostrarHorario()
{
        global $horario;
        foreach($horario as $iden => $valores1){
                echo("<br>");
                echo("$iden");
                echo("<br><br>");
                foreach($valores1 as $iden2 => $valores2 ){
                        {
                                echo("<br>");
                                echo("A $iden2 ª hora hay:");
                                echo("<br><br>");
                        }
                        foreach($valores2 as $iden3 => $valores3)
                        {
                                echo("$iden3 = $valores3");
                                echo("<br>");
                        }
                }
        }
};
/* Primera función que dada un dia, una hora y un minuto te devuelve que asignatura hay en ese momento, esta función es sustituida más adelante pero la dejo comentada en caso de ser necesaria después.
function queAsignatura($queDia, $queHora, $queMinuto){
        global $horario;
        $horaFinal = queClaseToca($queHora, $queMinuto);
                if (queClaseToca($queHora, $queMinuto) == 8) {
                                        
                        echo("Estas fuera del horario escolar");
                        print_r("<br>");
                        
                }
                elseif ($queDia == "Domingo") {
                        print_r("Los domingos no hay clase");
                        print_r("<br>");
                }
                elseif ($queDia == "Sabado") {
                        print_r("Los sabados no hay clase");
                        print_r("<br>");
                }
                elseif(comprobarHora($queHora) && comprobarMinuto($queMinuto))
                {
                        if(queClaseToca($queHora, $queMinuto) == 7)
                        {
                                echo("Estas en el descanso");
                                print_r("<br>");
                        }
                        else
                                {
                                        if($queDia == "Lunes")
                                        {
                                                print_r($horario["Lunes"][$horaFinal]);
                                                print_r("<br>");
                                        }
                                        elseif($queDia == "Martes")
                                        {
                                                print_r($horario["Martes"][$horaFinal]);
                                                print_r("<br>");
                                        }
                                        elseif($queDia == "Miercoles")
                                        {
                                                print_r($horario["Miercoles"][$horaFinal]);
                                                print_r("<br>");
                                        }
                                        elseif($queDia == "Jueves")
                                        {
                                                print_r($horario["Jueves"][$horaFinal]);
                                                print_r("<br>");
                                        }
                                        elseif($queDia == "Viernes")
                                        {
                                                print_r($horario["Viernes"][$horaFinal]);
                                                print_r("<br>");
                                        }
                                }
                }
                                else
                                {
                                        print_r("La hora o minutos introducidos no son correctos o bien no hay clase");
                                        print_r("<br>");
                                }
};*/

/*Función auxiliar que me ayuda a comprobar si la hora introducida es correcta, al haber usado posteriormente la función "date("H")" y la función "date("i")" esta función pasa a ser inutil igual que la siguiente.
function comprobarHora($queHora){
        if($queHora < 24 && $queHora >= 0)
        {
                return true;
        }
        else
        {
                return false;
        }
};*/

/*Al igual que la función de comprobarHora como he cambiado la forma en que calculo el día no es necesario verificar si los minutos son correctos ya que siempre lo van a ser.
function comprobarMinuto($queMinuto){
        if($queMinuto < 60 && $queMinuto >= 0)
        {
                return true;
        }
        else
        {
                return false;
        }
};
*/

//Función que pasados una hora y un minuto nos calcula que posicion en el array de el horario estamos.
function queClaseToca($queHora, $queMinuto)
{
        {
                $horaYMinutos = ($queHora * 100) + $queMinuto;
                if($horaYMinutos < 855 && $horaYMinutos >= 800)
                {
                        return 1;
                }
                elseif($horaYMinutos < 950 && $horaYMinutos >= 855)
                {
                        return 2;
                }
                elseif($horaYMinutos < 1045 && $horaYMinutos >= 950)
                {
                        return 3;
                }
                elseif($horaYMinutos < 1210 && $horaYMinutos >= 1115)
                {
                        return 4;
                }
                elseif($horaYMinutos < 1305 && $horaYMinutos >= 1210)
                {
                        return 5;
                }
                elseif($horaYMinutos < 1400 && $horaYMinutos >= 1305)
                {
                        return 6;
                }
                elseif($horaYMinutos < 1115 && $horaYMinutos >= 1045)
                {
                        return 7;
                }
                else
                        return 8;
        }
};

/**Algunas pruebas para comprobar la segunda función
queAsignatura("Lunes", 10, 12);
queAsignatura("Miercoles", 10, 50);
queAsignatura("Viernes", 8, 12);
queAsignatura("Martes", 16, 51);
queAsignatura("Sabado", 10, 67);
queAsignatura("Domingo", 10, 67);
queAsignatura("Sabado", 10, 30);
queAsignatura("Domingo", 10, 15);*/

//date("N") Dia de la semana del 1(Lunes) al 7(Domingo)
//date("H") Hora desde 00 hasta 23 
//date("i") Minutos con cero inicial 


//Función que nos muestra la asignatura que tenemos en el horario actual.
function queTengoAhora()
{
        global $horario;

        if(queClaseToca(date("H") - 1, date("i")) != 8)
        {
                if(date("N") == 1)
                {
                        print_r($horario["Lunes"][queClaseToca(date("H") - 1, date("i"))]);
                        print_r("<br>");
                }
                elseif (date("N") == 2) 
                {
                        print_r($horario["Martes"][queClaseToca(date("H") - 1, date("i"))]);
                        print_r("<br>");
                }
                elseif (date("N") == 3) 
                {
                        print_r($horario["Miercoles"][queClaseToca(date("H") - 1, date("i"))]);
                        print_r("<br>");
                }
                elseif (date("N") == 4) 
                {
                        print_r($horario["Jueves"][queClaseToca(date("H") - 1, date("i"))]);
                        print_r("<br>");
                }
                elseif (date("N") == 5) 
                {
                        print_r($horario["Viernes"][queClaseToca(date("H") - 1, date("i"))]);
                        print_r("<br>");
                }
                elseif(date("N") == 6)
                {
                        print_r("Los sabados no hay clase");
                        print_r("<br>");
                }
                else
                {
                        print_r("Los domingos no hay clase");
                        print_r("<br>");
                }
        }
        else
        {
                print_r("No tienes ninguna clase ahora mismo.");
                print_r("<br>");
        }
};

//queTengoAhora();
//mostrarHorario();

?>

<body>
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
                        <td><?php echo("Módulo: ". $horario["Lunes"][1]["Modulo"]."<br>"."Docente: ".$horario["Lunes"][1]["Docente"]."<br>"."Aula: ".$horario["Lunes"][1]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Martes"][1]["Modulo"]."<br>"."Docente: ".$horario["Martes"][1]["Docente"]."<br>"."Aula: ".$horario["Martes"][1]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Miércoles"][1]["Modulo"]."<br>"."Docente: ".$horario["Miércoles"][1]["Docente"]."<br>"."Aula: ".$horario["Miércoles"][1]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Jueves"][1]["Modulo"]."<br>"."Docente: ".$horario["Jueves"][1]["Docente"]."<br>"."Aula: ".$horario["Jueves"][1]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Viernes"][1]["Modulo"]."<br>"."Docente: ".$horario["Viernes"][1]["Docente"]."<br>"."Aula: ".$horario["Viernes"][1]["Aula"])?></td>
                </tr>
                <tr>
                        <th>8:55 a 9:50</th>
                        <td><?php echo("Módulo: ". $horario["Lunes"][2]["Modulo"]."<br>"."Docente: ".$horario["Lunes"][2]["Docente"]."<br>"."Aula: ".$horario["Lunes"][2]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Martes"][2]["Modulo"]."<br>"."Docente: ".$horario["Martes"][2]["Docente"]."<br>"."Aula: ".$horario["Martes"][2]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Miércoles"][2]["Modulo"]."<br>"."Docente: ".$horario["Miércoles"][2]["Docente"]."<br>"."Aula: ".$horario["Miércoles"][2]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Jueves"][2]["Modulo"]."<br>"."Docente: ".$horario["Jueves"][2]["Docente"]."<br>"."Aula: ".$horario["Jueves"][2]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Viernes"][2]["Modulo"]."<br>"."Docente: ".$horario["Viernes"][2]["Docente"]."<br>"."Aula: ".$horario["Viernes"][2]["Aula"])?></td>
                </tr>
                <tr>
                        <th>9:50 a 10:45</th>
                        <td><?php echo("Módulo: ". $horario["Lunes"][3]["Modulo"]."<br>"."Docente: ".$horario["Lunes"][3]["Docente"]."<br>"."Aula: ".$horario["Lunes"][3]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Martes"][3]["Modulo"]."<br>"."Docente: ".$horario["Martes"][3]["Docente"]."<br>"."Aula: ".$horario["Martes"][3]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Miércoles"][3]["Modulo"]."<br>"."Docente: ".$horario["Miércoles"][3]["Docente"]."<br>"."Aula: ".$horario["Miércoles"][3]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Jueves"][3]["Modulo"]."<br>"."Docente: ".$horario["Jueves"][3]["Docente"]."<br>"."Aula: ".$horario["Jueves"][3]["Aula"])?></td>
                        <td><?php echo("Módulo: ". $horario["Viernes"][3]["Modulo"]."<br>"."Docente: ".$horario["Viernes"][3]["Docente"]."<br>"."Aula: ".$horario["Viernes"][3]["Aula"])?></td>
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