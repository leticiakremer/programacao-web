<?php
session_start();

if (!isset($_GET['controller'])) {
  require_once('controllers/MainController.php');
  $MainController = new MainController();
  $MainController->index();
} else {
  switch ($_REQUEST['controller']) {
    case 'main':
      require_once('controllers/MainController.php');
      $MainController = new MainController();
      if (!isset($_GET['action'])) {
        $MainController->index();
      } else {
        switch ($_REQUEST['action']) {
          case 'login':
            $MainController->login();
            break;
          case 'logout':
            $MainController->logout();
            break;
        }
      }
      break;
    case 'user':
      require_once('controllers/UserController.php');
      $UserController = new UserController();
      if (!isset($_GET['action'])) {
      } else {
        switch ($_REQUEST['action']) {
          case 'validateLogin':
            $UserController->validateLogin();
        }
      }

    case 'client':
      require_once('controllers/ClientController.php');
      $client = new ClientController();
      if (!isset($_GET['action'])) {
        $client->index();
      } else {
        switch ($_REQUEST['action']) {
          case 'register':
            $client->register();
            break;
          case 'registerView':
            $client->registerView();
            break;
          case 'listClients':
            $client->listClients();
            break;
        }
      }
      break;
  }
}
