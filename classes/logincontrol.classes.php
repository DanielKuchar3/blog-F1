<?php


class LoginContr extends Login {
    private $username;
    private $pwd;

    public function __construct($username, $pwd) {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function loginUser() {
        if($this->emptyInput() == false) {
            header("location: ../blog-F1-main/index.php?error=emptyinput");
            exit();
        }
    
        $this->getUser($this->username, $this->pwd);
    }

    private function emptyInput() {
        $result;
        if(empty($this->username) || empty($this->pwd)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

  

}