<?php


class SignupContr extends Signup {
    private $username;
    private $email;
    private $pwd;

    public function __construct($username, $email, $pwd) {
        $this->username = $username;
        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../blog-F1-main/index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUsername() == false) {
            header("location: ../blog-F1-main/index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: ../blog-F1-main/index.php?error=email");
            exit();
        }
        if($this->takenCheck() == false) {
            header("location: ../blog-F1-main/index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->username, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result;
        if(empty($this->username) || empty($this->email) || empty($this->pwd)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidUsername() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if (!filter_var($this->email,FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function takenCheck() {
        $result;
        if (!$this->checkUser($this->username, $this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }


}