<?php
$datos = simplexml_load_file("horario.xml");
foreach($datos as $key=>$val)
{
  echo $val;
  foreach($val as $key1=>$val2)
{
  echo $val2;
}
}
foreach($datos as $diaXML=>$valor){
    echo "<table style='display: inline'>";
    echo "<tr style='border-collapse:collapse; border: 1px solid black;background-color:rgb(28, 255, 228)'>";
    echo "<th colspan='3' style='border-collapse:collapse; border: 1px solid black'>{$diaXML}</th>";
    
    foreach($valor as $horaXML=>$valor2){
       foreach($valor2 as $moduloXML=>$valor3){
        echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
        echo "<td style='border-collapse:collapse; border: 1px solid black;text-align: center;'>{$horaXML}</td>";
        echo "<td style='border-collapse:collapse; border: 1px solid black;text-align: center;'>{$valor3}</td>";
        
        echo "</tr>";
        }
    }
    echo "</tr>";
    echo "</table>";
}

$horaactual=date("G");
    $minutosactuales=date("i");
    $diaactual=date("l");
    function dos($dia,$hora,$minutos){
      global $datos;

        switch ($dia) {
          case "Monday":
              $diaEspanol  = "lunes";
              break;
          case "Tuesday":
              $diaEspanol  = "martes";
              break;
          case "Wednesday":
              $diaEspanol  = "miercoles";
              break;
          case "Thursday":
              $diaEspanol  = "jueves";
              break;
          case "Friday":
              $diaEspanol  = "viernes";
              break;
          case "Saturday":
              $diaEspanol  = "sabado";
              break;
          case "Sunday":
              $diaEspanol  = "Domingo";
              break;
      }
                if ($hora == 8 and $minutos>=0 and $minutos <=55){
                    $QUEHORA='Primera-Hora';
                    }
                    elseif($hora == 8 and $minutos > 55 or $hora == 9 and $minutos <= 50){
                      $QUEHORA='Segunda-Hora';
                    }
                    elseif($hora == 9 and $minutos > 50 or $hora == 10 and $minutos <= 45){
                      $QUEHORA='Tercera-Hora';
                    }
                    elseif($hora == 11 and $minutos > 15 or $hora == 12 and $minutos <= 10){
                      $QUEHORA='Cuarta-Hora';
                    }
                    elseif($hora == 12 and $minutos > 10 or $hora == 13 and $minutos <= 05){
                      $QUEHORA='Quinta-Hora';
                    }
                    elseif($hora == 13 and $minutos > 05 or $hora == 13 and $minutos <= 50){
                      $QUEHORA='Sexta-Hora';
                    }
                    elseif($hora == 10 and $minutos > 45 or $hora == 11 and $minutos <= 15){
                      $QUEHORA='RECREO';
                    }
                    else{
                      $QUEHORA=8;
                    }
            
            
        if($QUEHORA==8){
          echo "No estamos en clase.";
        }
        elseif($QUEHORA=='RECREO'){
          echo "Estamos en el recreo";
        }
        foreach ($datos as $clave=>$valor)
        {
         if ($diaEspanol==$clave)
         {
          foreach($valor as $clave1=>$valor1)
          {
            if($QUEHORA==$clave1)
            {
              foreach($valor1 as $clave2)
              {
                echo "Ahora toca ".$clave2;
              }
            }
          }
         }
        }
      }

    dos($diaactual,10,15);
?>