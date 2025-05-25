<?php

class Login extends Database {


    protected function getUser($username, $pwd) {
        $stmt = $this->connect()->prepare('SELECT pwd FROM pouzivatelia WHERE username = ? OR pwd = ?;');


        if(!$stmt->execute(array($username, $pwd))) {
            $stmt = null;
            header("location: ../blog-F1-main/index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: ../blog-F1-main/index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["pwd"]);

        if($checkPwd == false)
        {
            $stmt = null;
            header("location: ../blog-F1-main/index.php?error=wrongpassword");
            exit();
        }
        elseif($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM pouzivatelia WHERE username = ? OR email = ? AND pwd = ?;');

            if(!$stmt->execute(array($username, $email, $pwd))) {
                $stmt = null;
                header("location: ../blog-F1-main/index.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0)
            {
                $stmt = null;
                header("location: ../blog-F1-main/index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["id"] = $user[0]["id"];
            $_SESSION["username"] = $user[0]["username"];

            $stmt = null;
        }

       
        $stmt = null;
    }

       
}





