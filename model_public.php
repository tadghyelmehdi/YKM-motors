<?php

function ouvrirConnexion() {
    $user = 'root';
    $password = '';
    $db = 'mysql:host=localhost;dbname=cars_table';
    try {
        $cn = new PDO($db, $user, $password);
    } catch (PDOException $dbex) {
        die("Erreur de connexion : " . $dbex->getMessage());
    }
    return $cn;
}

function getAllCars() {
    $cn = ouvrirConnexion();
    $Rq = "SELECT * FROM cars";
    $resultat = $cn->query($Rq);
    return $resultat;
}

function deleteCar($id) {
    $cn = ouvrirConnexion();
    $Rq = "DELETE FROM cars WHERE id='" . $id . "'";
    $resultat = $cn->exec($Rq);
    header('Location: index.php?action=order');
}

function modifyCar() {
    $cn = ouvrirConnexion();
    if (isset($_POST['submit'])) {   
        $id = $_POST['id'];
        $name = $_POST['name'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $Rq = "UPDATE cars SET `name` = '$name', `model` = '$model', `year` = '$year', `price` = '$price', `color` = '$color' WHERE `cars`.`id` = '$id'";
        $resultat = $cn->exec($Rq);
        header("Location:index.php?action=order");
    }
}

function Search($car) {
    $cn = ouvrirConnexion();
    $Rq = "SELECT * FROM cars WHERE name LIKE '%" . $car . "%'";
    $resultat = $cn->query($Rq); 
    return $resultat;
}



function getCarById($id) {
    $cn = ouvrirConnexion();
    $Rq = "SELECT * FROM cars WHERE id='" . $id . "'";
    $resultat = $cn->query($Rq);
    return $resultat;
}

function addCar() {
    $cn = ouvrirConnexion();
    if (isset($_POST['submit'])) {
        $Rq = "INSERT INTO cars (id, name, model, year, price, color) VALUES (NULL, '" . $_POST['name'] . "', '" . $_POST['model'] . "', '" . $_POST['year'] . "', '" . $_POST['price'] . "', '" . $_POST['color'] . "')";
        $resultat = $cn->exec($Rq);
        header('Location: index.php?action=order');
    }
}
?>