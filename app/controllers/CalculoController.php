<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Operacao;

class CalculoController extends Controller{
    
    public function index(){
        
        //carregando a view
        $this->load("calculo");
    } 

    public function somar(){

        $objoperacao  = new Operacao();

        $a = $_POST['a'];
        $b = $_POST['b'];
       
        echo $objoperacao->somar($a, $b);

    } 

    public function multiplicar(){
        
        $objoperacao  = new Operacao();
        $a = $_POST['a'];
        $b = $_POST['b'];

        $dados["a"] = $a;
        $dados["b"] = $b;
        $dados["resultado"] = $objoperacao->multiplicar($a, $b);
        print_r($dados);
        $this->load("calculo", $dados);
    } 

    public function subtrair(){
        
        $objoperacao  = new Operacao();
        $a = $_POST['a'];
        $b = $_POST['b'];

        echo $objoperacao->subtrair($a, $b);
    } 

    public function dividir(){
        
        $objoperacao  = new Operacao();
        $a = $_POST['a'];
        $b = $_POST['b'];

        echo $objoperacao->dividir($a, $b);
    } 
}
