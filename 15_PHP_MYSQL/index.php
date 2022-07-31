<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);
// if($conn -> connect_errno){
//     echo "Erro na conexão";
//     echo "Erro: ".mysqli_connect_error();
// }



// queries 
// $sql = "select * from users";
// $result = $conn->query($sql);
// print_r($result);



// $q = "create table teste(nome varchar(100),sobrenome varchar(100))";
// $conn->query($q);

// $q = "DROP TABLE teste";
// $conn -> query($q);

// $table = 'users';
// $nome = "Marcos";
// $idade =21;
// $q = "insert into $table (nome,idade) values('$nome', '$idade') ";
// $conn-> query($q);

// $q = "select * from users";
// $result  = $conn ->query($q);

// retorna apenas um resultado
// $users = $result->fetch_assoc();
// retorna todos os resultados
// $users = $result->fetch_assoc();


// print_r($users);

// $conn->close();\



//inserindo dados com prepared statements;
// $nome = "Fabio";
// $idade = 26;

// $stmt = $conn->prepare("INSERT INTO users (nome,idade) VALUES(?,?)");
// $stmt ->bind_param("ss",$nome, $idade);
// $stmt->execute();

// print_r($stmt);



// selecionando dados com prepared;
// $idade = 3;
// $stmt = $conn->prepare("select * from users where idade > 3");
// $stmt->bind_param("i", $idade);
// $stmt->execute();
// $result = $stmt->get_result();
// $data  = $result->fetch_all();
// print_r($data);


// $nome = "Fabio";
// $stmt = $conn->prepare("delete from users where  nome = ?");
// $stmt->bind_param("s", $nome);
// $stmt->execute();
// $conn->close();



// CONEXAO COM PDO 

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

// $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// $stmt = $conn->prepare("insert into users(nome,idade) values (:nome, :idade)");

// $nome = 'Fernada';
// $idade= 21;

// $stmt->bindParam(":nome", $nome);
// $stmt->bindParam(":idade", $idade);

// $stmt->execute();
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
// $id = 1;
// $nome = 'Marilia';
// $idade = 21;

// $stmt = $conn->prepare("UPDATE users set nome =  :nome,idade =  $idade where id = :id");
// $stmt->bindParam(":id", $id);
// $stmt->bindParam(":nome",$nome);
// $stmt->bindParam(":idade",$idade);
// $stmt->execute();


$stmt = $conn->prepare("select * from users");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($data);