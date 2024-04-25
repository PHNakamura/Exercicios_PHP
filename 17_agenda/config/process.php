<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    // Modificações no banco
    if(!empty($data)) {
        
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        //exit;

        // Criar contatos
        if($data["type"] === "create"){

            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":phone", $phone, PDO::PARAM_INT);
            $stmt->bindParam(":observations", $observations, PDO::PARAM_STR);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
            
            } catch (PDOException $e) {
                // erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error <br>";            
            }
        
        } else if($data["type"] === "edit"){

            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];
            $id = $data["id"];

            $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":phone", $phone ,PDO::PARAM_STR);
            $stmt->bindParam(":observations", $observations ,PDO::PARAM_STR);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso!";
            
            } catch (PDOException $e) {
                // erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error <br>";            
            }

        } else if($data['type'] === "delete") {
            
            $id = $data["id"];

            $query = "DELETE FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato removido com sucesso!";
            
            } catch (PDOException $e) {
                // erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error <br>";            
            }

        }
        
        //REDIRECT HOME
        header("Location:" . $BASE_URL . "../index.php");

    // Seleções de dados
    } else {

        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }

        // Retorna os dados de apenas um contato
        if(!empty($id)){

            $query = "SELECT * FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            $stmt->execute();

            $contact = $stmt->fetch();

        } else {

            // Retorna todos os dados de todos os contatos
            $contatcs = [];

            $query = "SELECT * FROM contacts";

            $stmt = $conn->prepare($query);

            $stmt->execute();

            $contacts = $stmt->fetchAll();
        }

    }

    // FECHAR CONEXÃO NO PDO (NÃO TEM O MÉTODO CLOSE (mysqli))
    $conn = null;
