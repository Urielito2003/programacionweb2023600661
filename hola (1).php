<html>
    <head>
    <title>Hola Mundo PHP</title>
</head>
    <body>
        
        <h1>Este es el poder de la generacion de codigo HTML desde el servidor :)</h1>
        <table border="3"
        <?php
                for($i=0; $i<10; $i++) {

                echo "<tr>
                <td> Hola  </td>     
                <td> Mundo !!! </td> 
                     </tr> ";
                }
        ?>
        </table>
</body>

</html>