<?php
require_once '../classes/database.php';

class FormHandler extends Database
{
    private $username;
    private $email;
    private $message;

    public function __construct($username, $email, $message)
    {
        $this->username = htmlspecialchars(trim($username));
        $this->email = htmlspecialchars(trim($email));
        $this->message = htmlspecialchars(trim($message));
    }

    public function validate()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "Neplatný email.";
        }
        if (empty($this->username) || empty($this->message)) {
            return "Všetky polia sú povinné.";
        }
        return true;
    }

    public function message()
    {
        $pdo = $this->connect();
        $sql = "INSERT INTO messages (username, email, message) VALUES (:username, :email, :message)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':message', $this->message);

        return $stmt->execute();
    }
}
