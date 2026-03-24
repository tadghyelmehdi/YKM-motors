<?php
include("model_public.php");


if (empty($_GET["action"])) {
    $action = "home";

} else {
    $action = $_GET["action"];

}if ($action == 'about') {
    $vue = "about.php";
} elseif ($action == 'cars') {
    $vue = "cars.php";

} elseif ($action == 'contact') {
    $vue = "contact.php";

} elseif ($action == 'login') {
    $vue = "login.php";

} elseif ($action == 'order') {
    $carsStatement = getAllCars();
    $cars = $carsStatement->fetchAll(PDO::FETCH_ASSOC);
    $editCar = null;
    $vue = "order.php";

} elseif ($action == 'search') {
    $vue = "search.php"; 

} elseif ($action == 'services') {
    $vue = "services.php";

} elseif ($action == 'add') {
    addCar();

} elseif ($action == 'delete') {
    deleteCar($_GET['id']);
    $resultat = getCarById();
    $vue = "order.php";

} elseif ($action == 'modify') {
    modifyCar();
    $editCarStatement = getCarById($_GET['edit']);
    $editCar = $editCarStatement->fetch(PDO::FETCH_ASSOC);
    $vue = "vModify.php";

} elseif (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $searchResults = Search($searchTerm);
    $action = 'search';
    $vue = "search.php";
    $editCarStatement = getCarById($_GET['edit']);
    $editCar = $editCarStatement->fetch(PDO::FETCH_ASSOC);


}else {
    $vue = "home.php";
}

include("vues/" . $vue);
include("vues/Template.php");
?>