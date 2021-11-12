<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mini examen de Programacion en php</title>
</head>
<body style="background-image: url(Sonylover.jpg)" style="background-position: center">
	<font color="#000000">
	

<?php 
	
	$cal = 0;

	$Nombre_a = $_GET['Nombre_a'];
	echo "<br> El nombre del alumno es: " . $Nombre_a;


	$Pregunta_1 = $_GET['Pregunta_1'];
	$resp_1 = "30 años";
	if ($Pregunta_1 == $resp_1) {
		echo "<br><br><br> 1.correctoooo!!!!! <br><br>";
		$cal++;
	} else {
		echo "<br><br><br> 1.incorrecto pa que responde al ahi se va pues<br><br>";
	}


	$Pregunta_2 = $_GET['Pregunta_2'];
	if ($Pregunta_2 == "a") {
		echo "<br> 2.cual es una comida tipica mexicana?:<br> a)tacos correctoooo!!!!! <br> b.hamburgesas<br> c.pizza<br><br>";
		$cal++;
	} if ($Pregunta_2 == "b") {
		echo "<br> 2.cual es una comida tipica mexicana?: <br> a.tacos <br> b.hamburgesasincorrecto pa que responde al ahi se va pues <br> c.pizza<br><br>";
	} if ($Pregunta_2 == "c") {
		echo "<br> 2.cual es una comida tipica mexicana?: <br> a.tacos<br> b.hamburgesas<br> c.pizza incorrecto pa que responde al ahi se va pues <br><br>";
	}


	$Pregunta_3 = $_GET["Pregunta_3"];
    $resp2 = "200";
     if ( $Pregunta_3 == $resp2) {
    	echo "<br> 3.cuanto es 100 mas 100? correctoooo!!!!! <br><br>";
    	$cal++;
    }else {
    	echo "<br> 3.cuanto es 100 mas 100? incorrecto pa que responde al ahi se va pues<br><br> ";
    }


    $Pregunta_4 = $_GET["Pregunta_4"];
     $resp3 = "30";
     if ( $Pregunta_4 == $resp3) {
    	echo "<br> 4.cuanto es 15 mas 15?: <br>correctoooo!!!! <br><br> ";
    	$cal++;
    }else {
    	echo "<br> 4.cuanto es 15 mas 15?: <br> muy mal <br><br> ";
    }


    $Pregunta_5 = $_GET["Pregunta_5"];
    if ($Pregunta_5 == "1") {
    	echo "<br> 5.cual es la mejor consola?: <br>correctoooo!!!! <br><br> ";
    	$cal++;
    } else {
    	echo "<br>  5.cual es la mejor consola?: <br>uuuuy pa que pues si ya sabes que xbox es mejor<br><br> ";
    }
    

    $Pregunta_6 = $_GET["Pregunta_6"];
      if ( $Pregunta_6 == "c") {
      echo "<br> 6.cuales son las mejores tortas del mundo?: <br> a.las del hugoo osea su servidor<br> b.don juan<br> c. las de copel ñeeee tan 2/3 pero no se comparan :(<br><br> ";
    } if ($Pregunta_6 == "b") {
      echo "<br> 6.cuales son las mejores tortas del mundo?: <br> a.las del hugoo osea su servidor<br> b.don juan esas huelen feo<br> c. las de copel :(<br><br> ";
    }if ($Pregunta_6 == "a") {
      echo "<br> 6.cuales son las mejores tortas del mundo?: <br> a.las del hugoo osea su servidor no avia duda <br> b.don juan<br> c. las de copel :(<br><br> ";
      $cal++;
    }


    $Pregunta_7 = $_GET["Pregunta_7"];
     if ($Pregunta_7 == "1") {
    	echo "<br> 7.cual de estas afirmaciones es falsa?: <br>correctoooo!!!! <br><br> ";
    	$cal++;
    } else {
    	echo "<br> 7.cual de stas afirmaciones es falsa?: <br> muy mal <br><br> ";
    }


     $Pregunta_8 = $_GET["Pregunta_8"];
     if ( $Pregunta_8 == "a") {
      echo "<br> 8.cuanto es 2+2?: <br> a.2(respuesta correcta)  <br> b. printf  <br> c. char  <br><br> ";
      $cal++;
    } if ($Pregunta_8 == "b") {
      echo "<br> 8.cuanto es 2+2?: <br> a.2<br> b.pez noma no, field_number)<br> c.5<br><br> ";
    }if ($Pregunta_8 == "c") {
      echo "<br> 8.cuanto es 2+2?: <br> a.2<br> b.pez<br> c.5 sumale bien<br><br> ";
    }


    $Pregunta_9 = $_GET["Pregunta_9"];
     if ($Pregunta_9 == "1") {
      
             
    	echo "<br> 9.que hace un pelon antes de salir a la calle?: <br>correctoooo!!!! <br><br> ";
    	$cal++;
     
    }if ($Pregunta_9 == "2") {
             
      echo "<br> 9.que hace un pelon antes de salir a la calle?: <br>correctoooo!!!! <br><br> ";
      $cal++;
     }if ($Pregunta_9 == "0") {
    
    	echo "<br> 9.que hace un pelon antes de salir a la calle?: <br> muy mal<br><br> ";
    }


    $Pregunta_10 = $_GET["Pregunta_10"];
    $resp10 = "Mexico";
    if ( $Pregunta_10 == $resp10) {
    	echo "<br> 10.en que pais vives?: <br>correctoooo!!!! <br><br> ";
    	$cal++;
    	 }else {
    	echo "<br> 10.en que pais vives ?: <br> no sabes en que pais vives??<br><br> ";
    }

    echo " Es: " . "$cal/10";

	if ($cal == 10) {
		echo "<br>puro diez como siempre";
	}if  ($cal == 9) {
    	echo "<br>tsss por poco;)";
    }if  ($cal == 8) {
    	echo "<br> 8 no esta mal";
    }if ($cal == 7) {
    	echo "<br> 7!!?!?!?! bueno es mejor que 6";
    }if ($cal == 6) {
    	echo "<br> no 6 me dan ganas de reprobarte";
    }if ($cal <= 5) {
    	echo "<br> pa recursamiento  >:( <br>";
    }

	
 ?>
</font>
 </body>
</html>