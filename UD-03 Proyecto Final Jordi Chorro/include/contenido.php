<?php

function contenido(){

print '<div class="contenido">';
print' <form action="include/procesa.php" method="post">';
print'      <label for="nomApell">Nombre y Apellidos</label>';
print'      <input type="text" name="nomApell" required><br><br>';
print'      <label for="sexo">Sexo: </label><br><br>';
print'      <input type="radio" name="sexo" value="Hombre" checked> Hombre <br>';
print'      <input type="radio" name="sexo" value="Mujer"> Mujer <br>';
print'      <input type="radio" name="sexo" value="Otro"> Otro <br><br>';
print'      ¿Cuántas series has visto este mes? <input type="number" name="numSeries" min="0" max="20"><br><br>' ;
print'      ¿Cuántas estrellas le pondrías a nuestra web? (0 a 5) <input type="number" name="estrellas" min="0" max="5"><br><br>' ;
print'      <label for="mejorSerie">Para ti, ¿Cuál es la mejor série entre estas? </label><br><br>';
print'      <select name="mejorSerie">';
print'      <option name="Ninguna">-- Ninguna --</option>';
print'      <option name="_breaking">Breaking Bad</option>';
print'      <option name="_sons">Sons Of Anarchy</option>';
print'      <option name="_witcher">The Witcher</option>';
print'      <option name="_office">The Office</option>';
print'      <option name="_comoConoci">Como conocí a vuestra madre</option>';
print'      <option name="_vikingos">Vikingos</option>';
print'      </select><br><br>';
print       '<label for="text">Dime la frase que mas te gusta que se ha dicho en las series.</label><br><br>';
print       '<textarea name="texto" id="texto" placeholder="Introduce aquí la frase." maxlength="200" cols="50" rows="10"></textarea><br><br>';
print       '<label for="generos">¿Qué generos son tus favoritos entre estos seis?</label><br><br>';
print       '<input type="checkbox" name="genero[]" value="Terror">Terror<br><br>';
print       '<input type="checkbox" name="genero[]" value="Drama">Drama<br><br>';
print       '<input type="checkbox" name="genero[]" value="Comedia">Comedia<br><br>';
print       '<input type="checkbox" name="genero[]" value="Suspense">Suspense<br><br>';
print       '<input type="checkbox" name="genero[]" value="Accion">Accion<br><br>';
print       '<input type="checkbox" name="genero[]" value="Documentales">Documentales <br><br>';
print'      <input type="submit" value="Enviar formulario">';
print' </form>';
print '</div>';        

}

?>
