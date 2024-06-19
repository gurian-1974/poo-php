<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Poo - aula001</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <header>
            <img src="phplogo.jpg" alt="alt"/>
            
        </header>
        
        
        
        <?php
        require_once 'Caneta.php';
        
        $c1 = new Caneta;
        $c1 ->cor = "azul";
        $c1 ->ponta = 0.5;
        $c1 ->tampada =false;
        
       
      
       $c1 ->rabiscar();
       
        $c1 ->tampar();
        print_r("teste")
   
        
        
        
      
        ?>
    </body>
</html>
