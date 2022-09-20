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
        foreach($horario as $iden => $valores1){
                echo("<br>");
                echo("$iden");
                echo("<br><br>");
                foreach($valores1 as $iden2 => $valores2 ){
                        echo("<br>");
                        echo("A $iden2 ª hora hay:");
                        echo("<br><br>");
                        foreach($valores2 as $iden3 => $valores3)
                        {
                                echo("$iden3 = $valores3");
                                echo("<br>");
                        }
                }
        
        
        
        
        
        
        }
};