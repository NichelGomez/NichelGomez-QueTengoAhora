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

//mostrarHorario();
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
};

function comprobarHora($queHora){
        if($queHora < 24 && $queHora >= 0)
        {
                return true;
        }
        else
        {
                return false;
        }
};

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

function queClaseToca($queHora, $queMinuto)
{

        if(comprobarHora($queHora) && comprobarMinuto($queMinuto))
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
                elseif($horaYMinutos < 1045 && $horaYMinutos >= 1115)
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

function queTengoAhora()
{
        global $horario;
        $horaCompleta = (date("H") * 100) + date("i");
        if(date("N") == 1)
        {
                print_r($horario["Lunes"][$horaCompleta]);
                print_r("<br>");
        }
        elseif (date("N") == 2) 
        {
                print_r($horario["Martes"][$horaCompleta]);
                print_r("<br>");
        }
        elseif (date("N") == 3) 
        {
                print_r($horario["Miercoles"][$horaCompleta]);
                print_r("<br>");
        }
        elseif (date("N") == 4) 
        {
                print_r($horario["Jueves"][$horaCompleta]);
                print_r("<br>");
        }
        elseif (date("N") == 5) 
        {
                print_r($horario["Viernes"][$horaCompleta]);
                print_r("<br>");
        }
};

queTengoAhora();