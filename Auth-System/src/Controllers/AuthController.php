<?php

namespace App\Controllers;

use App\Models\User;
use PDO;

class AuthController {
  private $user;

  public function __construct(PDO $pdo) {
    $this->user = new User($pdo);
  }

  public function showLoginForm() {
    require '../views/login.php';
  }

  public function login($username, $password) {
    $user = $this->user->findByUsername($username);
    if ($user && password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['user_id'] = $user['id'];
      header('Location: /dashboard');
      exit;
    } else {
      $error = 'Invalid username or password';
      require '../views/login.php';
    }
  }

  public function showRegisterForm() {
    require '../views/register.php';
  }

  public function register($username, $password) {
    $this->user->create($username, $password);
    header('Location: /login');
    exit;
  }

  public function logout() {
    session_start();
    session_destroy();
    header('Location: /login');
    exit;
  }
}