<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Operacao;

class CalculoController extends Controller{
    
    public function index(){
        echo "<br>Sistema Calculadora<br>";
    } 

    public function somar($a, $b){
        
        $objoperacao  = new Operacao();

        echo $objoperacao->somar($a, $b);
    } 
}
