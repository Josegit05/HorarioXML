<?php
$datos = simplexml_load_file("horario.xml");

foreach($datos as $dia=>$valor){
    echo "<table style='display: inline'>";
    echo "<tr style='border-collapse:collapse; border: 1px solid black;background-color:rgb(28, 255, 228)'>";
    echo "<th colspan='3' style='border-collapse:collapse; border: 1px solid black'>{$dia}</th>";
    
    foreach($valor as $hora=>$valor2){
       foreach($valor2 as $modulo=>$valor3){
        echo "<tr style='border-collapse:collapse; border: 1px solid black'>";
        echo "<td style='border-collapse:collapse; border: 1px solid black;text-align: center;'>{$hora}</td>";
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
      global $diaactual;
      global $minutosactuales;
        switch ($diaactual) {
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
  
      
  
        foreach($datos as $dia=>$valor){
  
          if ($diaEspanol == $dia){ 
            
            foreach($valor as $hora=>$valor2){
                foreach($valor2 as $modulo=>$valor3){
                if ($hora == 8 and $minutosactuales>=0 and $minutos <=55){
                    $hora = 'Primera-Hora';
                    $QUEHORA='Primera-Hora';
                    }
                    elseif($hora == 8 and $minutos > 55 or $hora == 9 and $minutos <= 50){
                        $hora = 'Segunda-Hora';
                      $QUEHORA='Segunda-Hora';
                    }
                    elseif($hora == 9 and $minutos > 50 or $hora == 10 and $minutos <= 45){
                        $hora = 'Tercera-Hora';
                      $QUEHORA='Tercera-Hora';
                    }
                    elseif($hora == 11 and $minutos > 15 or $hora == 12 and $minutos <= 10){
                        $hora = 'Cuarta-Hora';
                      $QUEHORA='Cuarta-Hora';
                    }
                    elseif($hora == 12 and $minutos > 10 or $hora == 13 and $minutos <= 05){
                        $hora = 'Quinta-Hora';
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
              if($hora==$QUEHORA){
                $horaguardada=$hora;
                $diaguardado=$dia;
              }
            }
            }
          } 
        }
        if($QUEHORA==8){
          echo "No estamos en clase.";
        }
        elseif($QUEHORA=='RECREO'){
          echo "Estamos en el recreo";
        }
        else{ 
          echo "Ahora toca {$diaguardado->$horaguardada->$valor3}.";
        }
    }

    dos($diaactual,$horaactual,$minutosactuales);
?>