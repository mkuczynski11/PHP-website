<?php
require_once '../views/RedirectView.php';
require_once '../views/SignUpView.php';
require_once '../views/CompletedView.php';
require_once '../views/LoginView.php';
require_once '../views/VerifiedView.php';
require_once '../models/User.php';

class UserController {

  public function signup() {
    if(isset($_SESSION['user_id']))
    {
      return new RedirectView('/', 303);
    }
    return new SignUpView();
  }

  public function add() {
    if(isset($_SESSION['user_id']))
    {
      return new RedirectView('/', 303);
    }
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $repeat = $_POST['repeat'];
    $valid = true;

    if($email == "")
    {
      $_SESSION['error'][] = "Pole e-mail jest puste.";
      $valid = false;
    }

    if($login == "")
    {
      $_SESSION['error'][] = "Pole login jest puste.";
      $valid = false;
    }
    if($password == "")
    {
      $_SESSION['error'][] = "Pole hasło jest puste.";
      $valid = false;
    }
    if($repeat != $password)
    {
      $_SESSION['error'][] = "Hasła nie są takie same.";
      $valid = false;
    }

    $taken = User::check_login([
      'login' => $login
    ]);
    if($taken)
    {
      $valid = false;
      $_SESSION['error'][] = "Login jest zajęty.";
    }

    if($valid)
    {
      $user = new User($login, $email, password_hash($password, PASSWORD_DEFAULT));
      $user->save();
      return new RedirectView('/signup/completed', 303);
    }
    else
    {
      return new RedirectView('/signup', 303);
    }

  }
  public function completed() {
    return new CompletedView();
  }

  public function login() {
    if(isset($_SESSION['user_id']))
    {
      return new RedirectView('/', 303);
    }
    return new LoginView();
  }

  public function verify() {
    if(isset($_SESSION['user_id']))
    {
      return new RedirectView('/', 303);
    }
    $login = $_POST['login'];
    $password = $_POST['password'];

    $user = User::find_user(['login' => $login]);
    if($user !== null && password_verify($password, $user['password']))
    {
      session_regenerate_id(true);
      $_SESSION['user_id'] = $user['_id'];
      return new VerifiedView();
    }
    else
    {
      $_SESSION['error'][] = "Nie udało się zalogować.";
      return new RedirectView('/login', 303);
    }
  }

  public function signout() {
    if(isset($_SESSION['user_id']))
    {
      session_destroy();
    }
    return new RedirectView('/', 303);
  }

}

 ?>
