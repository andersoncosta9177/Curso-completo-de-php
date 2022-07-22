<!-- <?php
 echo '<br>';
//  echo $num;
 $_nome = "mateus";
  echo "<br>";
  echo $_nome;

  echo "<br>";
  $velocidadeMaxima =  100;
  $velocidadeMinima  = 80;

$velocida = 100;
$marca = 'Ferrari';
$itens = ['Teto solar','motor 2.0','Porta malas grande','Piloto automatico'];


echo $velocida;
echo '<br>';
echo $marca;
echo "<br>";
print_r($itens);

echo '<hr>';
$num1 = 121;
$num2 = 323;
 $soma = $num1 + $num2;
 echo "<br>";
  echo $soma;
  echo "<br><hr>";

  $x = "nome";
  echo "$x <br>";
  $$x  = "mateus";
  echo "$nome <br>";

  echo "<hr>";

//variavel por referencia
$x = 19;
$y = & $x;
 echo $x;
 echo "<br>";
 echo $y; 
 echo "<hr>";
 $y = 11;
 echo $x;
 echo "<br>";
 echo $y;



 //escopo  local

$x = 10;

function teste(){
    $x = 5;
    echo "$x local <br>";


 }

teste();

echo "$x global <br>";




//  escopo  global

$teste = "asd";
 echo "$teste global <br>";
 if(5> 2){
    $teste = 'dsa';
    echo "$teste if <br>";
 }

  echo "$teste global 2 <br>";

function funcao(){
    $teste = 12;
//     echo "$teste dentro da funcao 2<br>";
}

funcao();


// VARIALVEL ESTATICA 

function teste2(){
    $a = 0;
    $a++;
    $a++;
    echo "$a <br>";

}
teste2();
teste2();
echo "<br>";
echo "==============================<br>";
function testestatic(){
    static $a = 0;
    $a++;
    echo "$a <br>";

}
testestatic();
testestatic();
testestatic();



// ESCOPO DE PARAMETROS DE FUNÇOES

function soma($a, $b){
 echo $a + $b;
 echo "<br>";
}

soma(12,32);
echo "<br>";
soma(1232,232);




?> 