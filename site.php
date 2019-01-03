<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
       .table, th, td{
        border: 1px solid black;

       }
       .th{
          align:left;
       } 
    </style>
</head>
<body>

    <!--<form action="site.php" method="get">
    //   Name: <input type="text" name="name" value="">
    //   <input type="submit">

    //<form>-->
    <?php

    $lista = array("Uno","Dos","Tres", "Cuatro", "Cinco");
     //if(isset($_GET["name"])){
        //echo $_GET["name"]
     //}
     sayHello();

     function sayHello(){
        global $lista;
        echo "<table style='width=100%; border:1px solid;'>";
        echo "<tr>";
        echo "<th>Columna</th>";
        echo "<th>Columna</th>";
        echo "</tr>";
        for($i=0; $i < count($lista);$i++){
           echo "<tr>";
           echo "<td>".$lista[$i]."</td>";
           echo "<td>"."Registro".$lista[$i]."</td> </tr>";

        }

        echo "</table>";

     }
      
     ?>
</body>
</html>