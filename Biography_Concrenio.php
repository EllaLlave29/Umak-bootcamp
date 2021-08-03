<!HTML 5>
<header> <title> Biography</title> </header>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 500px;
  text-align: center;
  margin-top:-220px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}


</style>
<body>
<br> <center> <h1>MY BIOGRAPHY</h1> 

<table>

<?php

$name = "Maria Prescila Concrenio";
$gender = "Female";
$birthday = "August 29, 1998";
$hobby ="Reading, Watching American Series, Kdrama and Anime";
$color = "White, Black, Beige";
$food = "ice cream, pizza, pasta dish";
$drinks ="cola, apple juice, lemon juice";

    echo "<br/>"."<td>Name: "."&nbsp&nbsp".$name."</td><br/>"."<br/>";
    echo "</tr>";

    echo "<td>Gender: "."&nbsp&nbsp".$gender."</td><br/>"."<br/>";
    echo "</tr>";

    echo "<td>Birthday: "."&nbsp&nbsp".$birthday."</td><br/>"."<br/>";  
    echo "</tr>";  

    echo "<td>Hobby: "."&nbsp&nbsp".$hobby."</td><br/>"."<br/>";
    echo "</tr>";

    echo "<td>Favorite Food: "."&nbsp&nbsp".$food."</td><br/>"."<br/>";
    echo "</tr>";
    
    echo "<td>Favorite Drinks: "."&nbsp&nbsp".$drinks."</td><br/>"."<br/>";
    echo "</tr>";
    
    echo "<td>Favorite Color: "."&nbsp&nbsp".$color."</td><br/>"."<br/>";
    echo "</tr>";
?>

</table>
</center>

</body>
</HTML>