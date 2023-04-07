<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Caneta
 *
 * @author luciano
 */
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if($this->tampada==false){
            echo "<p> nao posso rabsicar</p>";
        }else{
        echo "<p>estou rabiscando</p>";}
    }
        function tampar(){ 
        
       $this->tampada = true;
    }
    function destampar(){
       $this->tampada = false;
 }
}
