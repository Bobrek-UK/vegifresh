<?php
// Include Config
require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/users.php');
require('controllers/recipe.php');
require('controllers/recipeset.php');
require('controllers/ingredient.php');
require('controllers/custcode.php');

require('models/home.php');
require('models/recipe.php');
require('models/recipeset.php');
require('models/ingredient.php');
require('models/users.php');
require('models/custcode.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}