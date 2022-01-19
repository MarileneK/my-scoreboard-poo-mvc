<?php
define("URL",str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/PlayersController.controller.php";
require_once "controllers/GamesController.controller.php";
require_once "controllers/ContestsController.controller.php";
$playerController = new PlayersController();
$gamesController = new GamesController();
$contestsController = new ContestsController();

// print_r($_GET);

// 1. Si $_GET["page"] est vide, tu vas me charger le fichier et j'utiliserai le controller
if (empty($_GET["page"])) {
    $playerController->displayPlayersList();
    $gamesController->displayGamesList();
    $contestsController->displayContestsList();
} else {
    $url = explode("/", filter_var($_GET["page"]), FILTER_SANITIZE_URL); // 2. On va découper l'URL. $url renvoie un tableau.

    // print_r($url);

    switch($url[0]) {
        case "jeux":
            if(empty($url[1])){
            $gamesController->displayGamesList();
            }else if($url[1] === "add") {
                $gamesController->addOneGame();
            } else if ($url[1] === "modify") {
                $gamesController->modifyOneGame();
            }
            break;
         
    }

}