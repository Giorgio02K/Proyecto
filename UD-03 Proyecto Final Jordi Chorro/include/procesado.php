<?php
function procesado(){
//INFORMACION PERSONAL
print '<div class="contenido">';
print '<h2>Información personal</h2>';
print"<p><b>Nombre y Apellidos:</b> $_REQUEST[nomApell]</p>";    
print"<p><b>Sexo:</b> $_REQUEST[sexo]</p>";
print '</div>';
//

//NUMERO DE SERIES
print '<div class="contenido">';

    if ($_REQUEST["numSeries"] == "") {

        print "<p>No has contestado al número de series vistas este mes.</p>";
    }

    else {

        if ($_REQUEST["numSeries"] == 1) {

            print "<p>Has visto 1 serie.</p>";
            print"<img width='100px' src='img/series.png'>";
        }
        
        else {
        
            print "<p>Has visto $_REQUEST[numSeries] series.</p>";
            for ($i=0; $i<$_REQUEST["numSeries"]; $i++) {
                print"<img width='100px' src='img/serie.png'>";
            }
        
        }
    }

print '</div>'; 

//ESTRELLAS
print '<div class="contenido">';

    if ($_REQUEST["estrellas"] == "") {

        print"<p>No has valorado la web con una puntuación.</p>";

    }
        else {

            print "<p>Puntuación: $_REQUEST[estrellas]/5 estrellas.</p>";

            for ($i=0; $i<$_REQUEST["estrellas"]; $i++) {

                print"<img width='25px' src='img/star.svg'>";

            }
    }

print '</div>'; 

//MEJORES SERIES
print '<div class="contenido">';

print "<h2>Tu serie favorita: $_REQUEST[mejorSerie]</h2>";
print"<img width='500px' src='img/$_REQUEST[mejorSerie].jpg'>";


//TEXTO
print '<div class="contenido">';

$palabras = str_word_count("$_REQUEST[texto]", 1,'[áéíóúñ]' );

$numPalabras = count($palabras);

$array_cadena = str_word_count("$_REQUEST[texto]", 1, '[áéíóúñ]');


for ($i=0; $i<$numPalabras; $i++){


        if ($i%2==0){

            print "<span class='palabras1'>";
            print($array_cadena)[$i] . " ";
            print "</span>";
            
            }  
        
            else {
        
            print "<span class='palabras2'>";
            print($array_cadena)[$i] . " ";
            print "</span>";
            }
    }

print "<p>Nos has escrito <b>$numPalabras</b> palabras.";




}
