<?php
$miArray=[2,3,6];
$miArray[]=7;
$cantantes = [
  0 => [
    "nombre" => "Luis",
    "apellido" => "Miguel"
  ],
  1 => [
    "nombre" => "Charly",
    "apellido" => "Garcia"
  ],
  2 => [
    "nombre" => "Joaquín",
    "apellido" => "Sabina"
  ]
];


$nombres = [];

  foreach ($cantantes as $key => $valor ){
		  //var_dump($valor);exit ;
    $val= $valor['nombre'];
    //var_dump($val);exit;
    $nombres[]=$valor['nombre'];
  }


  // Tu código va acá!

  var_dump($nombres);exit ;



$resultado=[];
		for($i=0; $i>count($miArray); $i++) {
      if ( $miArray[$i]%2==0){
    	   //	echo $miArray[$i]."<br>";
         $val=$miArray[$i];
         $resultado[]=$val;

		}

  }var_dump($resultado);
    ?>
