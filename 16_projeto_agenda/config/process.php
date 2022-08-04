<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;
if (!empty($data)) {

    if ($data["type"] === "create") {

        $nome = $data["nome"];
        $phone = $data["phone"];
        $obervations = $data["observations"];

        $query = "insert into contacts(nome,phone,observations) values (:nome, :phone, :observations)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $obervations);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com successo!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "ERRO: $error";
        }
    }else if($data["type"]=== "edit"){
           $nome = $data["nome"];
           $phone = $data["phone"];
           $obervations = $data['observations'];
           $id = $data["id"];

           $query = "update contacts
           set nome = :nome, phone = :phone, observations = :observations 
           where id = :id";
           

           $stmt = $conn->prepare($query);
           $stmt->bindParam(":nome", $nome);
           $stmt->bindParam(":phone", $phone);
           $stmt->bindParam(":observations", $obervations);
           $stmt->bindParam(":id", $id);

           try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com successo!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "ERRO: $error";
        }

    }else if($data["type"] === "delete"){
        $id = $data["id"];

        $query = "delete from contacts where id = :id ";
        $stmt  = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try{
            $stmt->execute();
            $_SESSION['msg']  = "Contato removido com sucesso!";
        }catch(PDOException $e){
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    }


    //rediredt home
header("Location:". $BASE_URL."../index.php");



} else {

    $id;

    if (!empty($_GET)) {
        $id = $_GET['id'];
    }

    if (!empty($id)) {
        $query = "SELECT * FROM contacts where id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    } else {
        $contacts = [];

        $query = "SELECT *FROM contacts";

        $stmt = $conn->prepare($query);
        $stmt->execute();
        $contacts = $stmt->fetchAll();
    }
}

$conn = null;




// print_r($contacts);