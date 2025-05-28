<?php


class Signup extends Database {


    protected function getUser($username, $pwd) {
        $stmt = $this->connect()->prepare('SELECT pwd FROM pouzivatelia WHERE username = ? OR email = ?;');

       

        if(!$stmt->execute(array($username, $pwd,))) {
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
            header("location: ../blog-F1-main/index.php?error=usernotfound");
            exit();
        }
        elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM pouzivatelia WHERE username = ? OR email = ? AND pwd = ?;');

            if(!$stmt->execute(array($username, $username, $pwd,))) {
            $stmt = null;
            header("location: ../blog-F1-main/index.php?error=stmtfailed");
            exit();
        }

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION["userid"] = $user[0]["username"];
        $_SESSION["username"] = $user[0]["username"];

        }

        $stmt = null;
    }

    protected function setUser($username, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO pouzivatelia (username, pwd, email) VALUES (?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $hashedPwd, $email))) {
            $stmt = null;
            header("location: ../blog-F1-main/index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT username FROM pouzivatelia WHERE username = ? OR email = ?;');

        if(!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../blog-F1-main/index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;

        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }


   

}