<?php
class User{
    public $tableName = 'user';

    public function register($data){
        $name = trim($data['name']);
        $login = trim($data['login']);
        $password =$this->passwordHash(trim($data['password']));
        $date_register = time();

        $db = Db::connect();

        $sql='INSERT INTO '.$this->tableName.' (name,login,password,date_register) VALUES (:name,:login,:password,:date_register)';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':login',$login);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':date_register',$date_register);
        $stmt->execute();
        return $db->LastInsertId();


    }


    public function findByLogin($login){
        $db = Db::connect();
        $sql = 'SELECT login,password FROM '.$this->tableName.' WHERE login = :login LIMIT 1';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':login',$login);
        $stmt->execute();
        $result = $stmt->fetch();
        if(isset($result['login'])){
            return $result;
        }
        return false;
    }

    public function passwordHash($password){
        return password_hash($password,PASSWORD_DEFAULT);
    }


    public function passwordVerify($password,$hash){
        if (password_verify($password,$hash)){
            return true;
        }else{
            return false;
        }
    }


}



