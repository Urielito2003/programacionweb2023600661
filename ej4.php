<html>
<head>
	
	<title>Area y Perimetro</title>
</head>
<body>
<?php

 <?php


$L = 2;

$L2=sqrt($L*$L+$L*$L);

$L3=sqrt(6/$L*6/$L+$L*$L);

$pt = 3*$L+$L/2+$L2*2+$L3+6/$L;

$at=3*$L*$L/2*$L2*2*$L3*6/$L;


printf("pt=%f<br>",$pt);

printf("at=%f<br>",$at);


?>



</body>
</html>