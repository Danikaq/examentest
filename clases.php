<?php

class Paginaweb {
    protected string $html;
    public string $css;

    function __construct(){
        $this->css='<link rel="stylesheet" href="estilos.css">';
        $this->html='<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            '.$this->css.'
        </head>
        <body>
        <form action="recogida.php" method="post">
        <label>
            Nombre:
        </label>
        <input type="text" name="nombre">
    </br>
    <label>
            Apellidos:
        </label>
        <input type="text" name="apellidos">
    </br>
    <label>
            Ciudad:
        </label>
        <input type="text" name="ciudad">
    </br>
    <label>
            Código Postal:
        </label>
        <input type="text" name="cpostal">
    </br>
    <input type="submit">
    </br>
    </form>
        </body>
        </html>';
        
    }
    function paginaweb(){
        echo '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            '.$this->css.'
        </head>
        <body>
        <img src="C:\xampp\htdocs\examen\capibara4.jpg">
        </body>
        </html>';
    }
}
class Formulario extends Paginaweb {
    function formulario(){
        echo $this->html;

    }
}

?>
