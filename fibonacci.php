<html>
<head>
<title>Numeros Fibonacci</title>
</head>
<body>

<?php
$a=0;
$b=1;
$limite=2048;

echo"<p>;

for($i=1; $i<=limite; $i++){

echo "$a,";
if($i < $limite){

echo ","; 
}
$c = $a + $b;
$a = $b;
$b =$c;

}

echo "</p>"
?>

</body>
</html>