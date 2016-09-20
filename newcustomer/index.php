<?php
include 'model.php';
include 'view.php';
include 'controller.php';
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}
echo $view->output(); 
?>