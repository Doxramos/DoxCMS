<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
namespace user;
use PDO;
class user {
    public function __construct()
    {
        $this->connection = new \website_connection();
        $this->tPrefix = Config("Database", "Table_Prefix");
    }
    public function UserDetail($UserID, $Field) {
        $query = <<<SQL
    SELECT * FROM {$this->tPrefix}users WHERE userID = :userID
SQL;
        $resource = $this->connection->db->prepare( $query );
        $resource->execute( array (
            ":userID"   => $UserID,
        ));
        $result = $resource->fetch(PDO::FETCH_ASSOC);
        return $result[$Field];

    }
    public function generateGravatar ($email, $size=100, $d='404') {
        $email = trim($email);
        $email = strtolower($email);
        $email_hash = md5($email);
        $url = 'https://www.gravatar.com/avatar/'.$email_hash.'?s='.$size;
        $d = '?d='.$d;
        return $url.''.$d;
    }
}
class login
{
    public function __construct()
    {
        $this->connection = new \website_connection();
        $this->tPrefix = Config("Database", "Table_Prefix");
    }
    public function CheckExistance($Username, $Password) {
        $query = <<<SQL
      SELECT userID FROM {$this->tPrefix}users WHERE username = :username or email = :username
SQL;
        $resource = $this->connection->db->prepare( $query );
        $resource->execute( array (
            ':username' => $Username
        ));
        if($resource->rowCount() == 0 ) {
            return "Account Not Found";
        } else {
            return $this->CheckCurrentLockStatus($Username, $Password);
        }

    }
    public function CheckCurrentLockStatus($Username,$Password) {
        $lockTime = $this->GetUserDetail($Username, "locktime");
        $Elapsed = Config("Security", "LockOutTime");
        $UnlockTime = $lockTime + 60*$Elapsed;
        if($UnlockTime >= time()) {
            return "This account has been locked until ". date('m/d/Y', $UnlockTime) . " at " .date('h:i:s', $UnlockTime). " UTC";
        }
        else {
            return $this->CheckIfEmailUsed($Username, $Password);
        }
    }
    public function CheckIfEmailUsed($Username, $Password) {
        $query = <<<SQL
        SELECT username FROM {$this->tPrefix}users WHERE email = :email
SQL;
        $resource = $this->connection->db->prepare( $query );
            $resource->execute( array (
                ":email"    => $Username,
            ));
            if($resource->rowCount() == 0 ) {
                return $this->CheckUserLogin($Username, $Password);
            } else {
                $result = $resource->fetch(PDO::FETCH_ASSOC);
                return $this->CheckUserLogin($result['username'], $Password);
            }

    }
    public function CheckUserLogin($Username, $Password) {
        $HashedPass = sha1($Username.':'.$Password);
        $query = <<<SQL
        SELECT * FROM {$this->tPrefix}users
        WHERE username = :username AND sha_pass_hash = :password
SQL;
        $resource = $this->connection->db->prepare( $query );
            $resource->execute( array (
                ":username" => $Username,
                ":password" => $HashedPass,
            ));
            if($resource->rowCount() == 0 ) {
                return $this->InsertBrute($Username);
            } else {
                return $this->CheckAuthenticatorStatus($Username);
            }
    }
    public function CheckAuthenticatorStatus($Username) {
        $query = <<<SQL
    SELECT * FROM {$this->tPrefix}users WHERE username = :username
SQL;
        $resource = $this->connection->db->prepare( $query );
        $resource->execute( array (
            ':username' => $Username
        ));
        $result = $resource->fetch(PDO::FETCH_ASSOC);
        if($result['gauthCode'] == 0) {
            $this->ClearBrute($Username);
            return $this->Login($result['userID']);
        } else {
            return "Start Auth Sequence";
        }
    }
    public function Login($UserID) {
        session_start();
        return $_SESSION['userID'] = $UserID;
    }
    public function InsertBrute($Username) {
        $query = <<<SQL
    UPDATE {$this->tPrefix}users SET brute_prevent = brute_prevent +1 WHERE username = :username
SQL;
        $resource = $this->connection->db->prepare( $query );
        $resource->execute( array (
            ":username" => $Username
        ));
        if($this->GetUserDetail($Username, "brute_prevent")  >= 5) {
            return $this->LockAccount($Username);
        }
        else {
            return "You have used " .$this->GetUserDetail($Username, "brute_prevent"). " of ". Config('Security', 'LoginAttempts'). " attempts. <br />After " . Config('Security', 'LoginAttempts'). " failed attempts you will be locked out for " .Config("Security", "LockOutTime"). " minutes";
        }
    }
    public function LockAccount($Username) {
        $query = <<<SQL
    UPDATE {$this->tPrefix}users SET locktime = :currentTime WHERE username = :username
SQL;
        $resource = $this->connection->db->prepare( $query );
        $resource->execute( array (
            ':currentTime'  => time(),
            ':username' => $Username
        ));
        $this->ClearBrute($Username);
        return "You have been locked out for " . Config("Security", "LockOutTime") . " minutes.";
    }
    public function ClearBrute($Username) {
        $query = <<<SQL
    UPDATE {$this->tPrefix}users SET brute_prevent = 0 WHERE username = :username
SQL;
        $resource = $this->connection->db->prepare( $query );
        $resource->execute( array (
            ":username" => $Username,
        ));

    }
    public function GetUserDetail($Username, $UserDetail) {
        $query = <<<SQL
        SELECT * FROM {$this->tPrefix}users WHERE :username = :username
SQL;
        $resource = $this->connection->db->prepare( $query );
            $resource->execute( array (
                ":username" => $Username,
            ));
            $result = $resource->fetch(PDO::FETCH_ASSOC);
            return $result[$UserDetail];
    }


}
class register {
    public function __construct()
    {

    }
}

function LoginUser($Username, $Password) {
    $user = new login();
    return $user->CheckExistance($Username, $Password);
}