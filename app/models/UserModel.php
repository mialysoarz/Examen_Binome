<?php 

namespace app\models;

class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function registerUser($username, $email, $password) {
        // Logique pour enregistrer un utilisateur dans la base de données
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $hashedPassword,
        ]);
    }

    public function authenticateUser($email, $password) {
        // Logique pour authentifier un utilisateur
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }
}
?>
