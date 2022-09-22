<?php
$datos = simplexml_load_file("horario.xml");



echo "<br> El lunes a primera hora se imparte {$datos->lunes->clase[0]->modulo}. La imparte {$datos->lunes->clase[0]->profe}.";
echo "<br> El lunes a segunda hora se imparte {$datos->lunes->clase[1]->modulo}. La imparte {$datos->lunes->clase[1]->profe}.";
echo "<br> El lunes a tercera hora se imparte {$datos->lunes->clase[2]->modulo}. La imparte {$datos->lunes->clase[2]->profe}.";
echo "<br> El lunes a cuarta hora se imparte {$datos->lunes->clase[3]->modulo}. La imparte {$datos->lunes->clase[3]->profe}.";
echo "<br> El lunes a quinta hora se imparte {$datos->lunes->clase[4]->modulo}. La imparte {$datos->lunes->clase[4]->profe}.";
echo "<br> El lunes a última hora se imparte {$datos->lunes->clase[5]->modulo}. La imparte {$datos->lunes->clase[5]->profe}.<br>";

echo "<br> El martes a primera hora se imparte {$datos->martes->clase[0]->modulo}. La imparte {$datos->martes->clase[0]->profe}.";
echo "<br> El martes a segunda hora se imparte {$datos->martes->clase[1]->modulo}. La imparte {$datos->martes->clase[1]->profe}.";
echo "<br> El martes a tercera hora se imparte {$datos->martes->clase[2]->modulo}. La imparte {$datos->martes->clase[2]->profe}.";
echo "<br> El martes a cuarta hora se imparte {$datos->martes->clase[3]->modulo}. La imparte {$datos->martes->clase[3]->profe}.";
echo "<br> El martes a quinta hora se imparte {$datos->martes->clase[4]->modulo}. La imparte {$datos->martes->clase[4]->profe}.";
echo "<br> El martes a última hora se imparte {$datos->martes->clase[5]->modulo}. La imparte {$datos->martes->clase[5]->profe}.<br>";

echo "<br> El miercoles a primera hora se imparte {$datos->miercoles->clase[0]->modulo}. La imparte {$datos->miercoles->clase[0]->profe}.";
echo "<br> El miercoles a segunda hora se imparte {$datos->miercoles->clase[1]->modulo}. La imparte {$datos->miercoles->clase[1]->profe}.";
echo "<br> El miercoles a tercera hora se imparte {$datos->miercoles->clase[2]->modulo}. La imparte {$datos->miercoles->clase[2]->profe}.";
echo "<br> El miercoles a cuarta hora se imparte {$datos->miercoles->clase[3]->modulo}. La imparte {$datos->miercoles->clase[3]->profe}.";
echo "<br> El miercoles a quinta hora se imparte {$datos->miercoles->clase[4]->modulo}. La imparte {$datos->miercoles->clase[4]->profe}.";
echo "<br> El miercoles a última hora se imparte {$datos->miercoles->clase[5]->modulo}. La imparte {$datos->miercoles->clase[5]->profe}.<br>";

echo "<br> El jueves a primera hora se imparte {$datos->jueves->clase[0]->modulo}. La imparte {$datos->jueves->clase[0]->profe}.";
echo "<br> El jueves a segunda hora se imparte {$datos->jueves->clase[1]->modulo}. La imparte {$datos->jueves->clase[1]->profe}.";
echo "<br> El jueves a tercera hora se imparte {$datos->jueves->clase[2]->modulo}. La imparte {$datos->jueves->clase[2]->profe}.";
echo "<br> El jueves a cuarta hora se imparte {$datos->jueves->clase[3]->modulo}. La imparte {$datos->jueves->clase[3]->profe}.";
echo "<br> El jueves a quinta hora se imparte {$datos->jueves->clase[4]->modulo}. La imparte {$datos->jueves->clase[4]->profe}.";
echo "<br> El jueves a última hora se imparte {$datos->jueves->clase[5]->modulo}. La imparte {$datos->jueves->clase[5]->profe}.<br>";

echo "<br> El viernes a primera hora se imparte {$datos->viernes->clase[0]->modulo}. La imparte {$datos->viernes->clase[0]->profe}.";
echo "<br> El viernes a segunda hora se imparte {$datos->viernes->clase[1]->modulo}. La imparte {$datos->viernes->clase[1]->profe}.";
echo "<br> El viernes a tercera hora se imparte {$datos->viernes->clase[2]->modulo}. La imparte {$datos->viernes->clase[2]->profe}.";
echo "<br> El viernes a cuarta hora se imparte {$datos->viernes->clase[3]->modulo}. La imparte {$datos->viernes->clase[3]->profe}.";
echo "<br> El viernes a quinta hora se imparte {$datos->viernes->clase[4]->modulo}. La imparte {$datos->viernes->clase[4]->profe}.";
echo "<br> El viernes a última hora se imparte {$datos->viernes->clase[5]->modulo}. La imparte {$datos->viernes->clase[5]->profe}.<br>";





?>