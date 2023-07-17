<?php

namespace App\Models;

use PDO;

class User {
  private $pdo;

  public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }

  public function create($username, $password) {
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
      'username' => $username,
      'password' => password_hash($password, PASSWORD_DEFAULT),
    ]);
  }

  public function findByUsername($username) {
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(['username' => $username]);
    return $stmt->fetch();
  }
}