<?php


include_once "personas.php";

$lista = [

new Persona("Fulano" ,"1999-07-11" ,"5520205050"),
new Persona("Pepe","1965-12-05","5530306070"),
new Persona("Andres","1980-11-03","5515167890"),
new Persona("Karlita","2002-01-29","5518190405"),
new Persona("Joel","1998-10-09","5510112324"),
new Persona("Michel","1970-10-07","5511565541"),
new Persona("Martha","1981-05-16","5520205050"),
new Persona("Brenda","1995-10-16","5520205050"),
new Persona("Erick","2000-10-03","5520205050"),
new Persona("Iñaki","1997-07-11","5520205050"),

];

function calcularEdad($fechaNacimiento) {
    $fechaNac = new DateTime($fechaNacimiento);
    $hoy = new DateTime();
    $edad = $hoy->diff($fechaNac)->y;
    return $edad;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="uff-8">
        <title>Lista de Personas</title>
<style>

    td{

        background-color:cyan;
    }
</style>
    </head>
    <body>
    <h1>Lista de Personas</h1>  
    <table border>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Edad Actual</th>
            <th>Telefono</th>
        </tr>
        <tbody>
<?php foreach($lista as $p): ?>

            <tr>
                <td><?php echo $p->getnombre()?></td>
                <td><?php echo $p->getFecNac()?></td>
                <td><?php echo calcularEdad($p->getFecNac()); ?> años</td>
                <td><?php echo $p->getTel()?></td>
            </tr>
<?php endforeach?>

        </tbody>
    </thead>
    </table>
    </body>
</html>