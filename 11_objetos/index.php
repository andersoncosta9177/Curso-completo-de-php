<?php

// class Car {
// }
// $bmw = new  Car;


// class Person{
//      function  falar(){
//         echo "Ola, eu sou um objeto<br>";
//      }
// }
// $anderson = new Person;
// $anderson -> falar();

// class Dog{

//     function latir(){
//        echo "au au<br>";
//     }

//     function andar($nome,$m){
//          echo " O cachorro $nome andou $m metros<br> ";
//     }

// }
// $viralata  = new Dog;
// $viralata -> latir();
// $viralata -> andar('bily',122);
// $poodle = new Dog;
// $poodle -> andar('kiara',233);


// class Car{
//     public $rodas = 4;
//     public $aro = 20;
//     public $cor =  'vermeha';


//     function ligar(){
//         echo 'vrum vrum';
//     }
// }


// $ferrari = new Car;
// echo "Aro: ".$ferrari->aro,"<br>";
// echo "Rodas: ".$ferrari->rodas. "<br>";
// echo "Cor:".$ferrari->cor."<br>";
// $ferrari->ligar()


// class Animal{
//     public $nome;

//     function escolhaNome($nome){
//      $this->nome = $nome;
//     }
// }


// $frida = new Animal;
// echo "O nome do animal é $frida->nome <br>";
// $frida-> escolhaNome("frida");
// echo "O nome do animal é $frida->nome <br>";

use function PHPSTORM_META\map;

class Pessoa
{
    public $nome;
    public $idade;

    function andar($m)
    {
        echo "A pessoa andou $m metros<br>";
    }
}


//  $miguel = new Pessoa;
//  $miguel->nome ="Miguel";
//  $miguel->idade = 21;
// $miguel->andar(23);
//  echo "O nome dele é $miguel->nome  e tem $miguel->idade anos";


// class Car{
//     public $nome;
// public $cor;
// public $tetosolar;
// public $velocityMax;


// function setVelocidadeMax($vel){
//     $this->velocityMax = $vel;
// }

// function getVelocityMax(){
//     echo "A velocidade maxima do carro  é: $this->velocityMax km/h<br>";
// }
// }


// $volvo = new Car;
// $volvo->nome = "Volvo";
// $volvo->cor = 'blue';
// $volvo->tetosolar = true;
// $volvo->setVelocidadeMax(300);
// $volvo ->getVelocityMax();
// echo "O carro $volvo->nome é top";

// class Human{
//   public const BRACOS = 2;
//   public const olhos = 2;
//   public const pernas = 2;


// }


// $miguel = new  Human;
// echo "Olhos: ".$miguel::olhos;
// echo "<br>";
// echo "Pernas: ".$miguel::pernas;


// class Car{
//     public $rodas = 4;
// }
// $carro = new Car;
// echo $carro->rodas."<br>";

// class Mecanico{
//     public function alterarRodas($obj){
//         $obj->rodas = 10;
//     }
// }

// $mateus = new  Mecanico;
// $mateus->alterarRodas($carro);
// echo $carro->rodas."<br>";

// class Humano {
//     public $idade = 119;

//     public function falar(){
//         echo "ola mundo<br>";
//     }

//     private function gritar(){
//         echo "php é muito bom<br>";
//     }
//     public function acesseGritar(){
//         $this->gritar();
//     }
// }

// class Programador extends Humano{

// }

// $ze = new Humano;
// $ze ->falar();
// $ze->acesseGritar();

// $miguel = new Programador;
// $miguel->falar();
// echo $miguel->idade."<br>";

// $miguel->acesseGritar();
// echo"<br>";



// class Humano{
//     public $maos = 2;
//     public $pernas = 2;

//     public function falar(){
//         echo "Ola, eu sou humano!";
//     }
// }

// class Professor{
//     public $disciplina = 'matematica';

//    public function estaLecionando(){
//     echo "O professor esta dando aula de $this->disciplina<br>";
//    }

// }



// $marcos = new Humano;
// echo "$marcos->maos<br>";
// $marcos->falar();
// echo "<br>";
// $anderson = new  Professor;
// $anderson->estaLecionando


// class Humano {

// }

// class Animal{

// }

// class professor extends Humano{

// }

// $turca = new Animal;
//  $marcos = new Humano;

//  if($marcos instanceof Animal){
//     echo "Marcos e uma instancia de humano";
//  }else{
//     echo "False";
//  }

//  if($turca instanceof Humano){
//     echo "Marcos e uma instancia de humano";
//  }else{
//     echo "False";
// //  }

// $marcos = new professor;

//  if($marcos instanceof Humano){
//     echo "Marcos e uma instancia de humano";
//  }else{
//     echo "False";
//  }

// interface Caracteristicas
// {
//     const nome = 'mateus';
//     public function falar();
// }


// class Humano implements Caracteristicas
// {
//     public $idade = 29;
//     public function falar()
//     {
//         echo "Ola mundo<br>";
//     }

//     public function dizerNome()
//     {
//         echo "meu nome é: ". self::nome;
//     }
// }

// $mateus = new Humano;
// $mateus->falar();
// $mateus->dizerNome();


// trait Objeto {
//     public function teste(){
//         echo 'testando as trait<br>';
//     }
// }

// trait Testando{
//     public function traitTest(){
//         echo "ESTE METODO E DA TRAIT TESTANDO<br>";
//     }
// }

// class Central{
//     use Objeto;
//     use Testando;
// }

// $x = new Central;
// $x->teste();
// $y = new Central;
// $y-> traitTest();
// $x->traitTest();


// class Cachoro
// {
//     public $nome;
//     public $cor;
//     public $patas;

//     function __construct($nome, $cor, $patas)
//     {
//         $this->nome = $nome;
//         $this->cor = $cor;
//         $this->patas = $patas;
//     }

//     public function exibirAnimal()
//     {
//         echo "O nome do cachorro é $this->nome,<br>";
//         echo "A cor dele é : $this->cor e ele tem $this->patas patas";
//     }
// }
// $turca = new Cachoro("turca", 'red', '4');
// $turca->exibirAnimal();



// $pessoa = new class()
// {
//     public $nome = 'miguel';
//     public function dizerNome()
//     {
//         echo "ola, meu nome é $this->nome<br>";
//     }
// };

// echo $pessoa->nome;
// echo "<br>";
// $pessoa->dizerNome();




