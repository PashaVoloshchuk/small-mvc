<?php
class UserSetting{
    public $tableName = 'user_setting';
    public function add($userId, $name, $params){
        $db = Db::connect();
        $sql = 'INSERT INTO '.$this->tableName.' SET 
        user_id = :user_id,
        name = :name,
        params = :params
        ';
        $stmt = $db->prepare($sql);
        $stmt->bindParam('user_id', $userId);
        $stmt->bindParam('name', $name);
        $stmt->bindParam('params', $params);
        $stmt->execute();
        return $db->lastInsertId();
    }
    public function update($userId, $name, $params){
        $db = Db::connect();
        $sql = 'UPDATE '.$this->tableName. ' SET
            params = :params
            WHERE user_id = :user_id
            AND name = :name';
        $stmt = $db->prepare($sql);
        $stmt->bindParam('user_id', $userId);
        $stmt->bindParam('name', $name);
        $stmt->bindParam('params', $params);
        $stmt->execute();
        return $db->lastInsertId();
    }
    public function find($userId, $name){
        $db = Db::connect();
        $sql = 'SELECT * FROM '.$this->tableName. '
        WHERE user_id = :user_id
        AND name = :name LIMIT 1';
        $stmt = $db->prepare($sql);
        $stmt->bindParam('user_id', $userId);
        $stmt->bindParam('name', $name);
        $stmt->execute();
        $result = $stmt->fetch();
        if(isset($result['id'])){
            return true;
        }
        return false;

    }
    public function getValue($userId, $name){
        $db= Db::connect();
        $sql = 'SELECT * FROM '.$this->tableName.'
        WHERE user_id = :user_id AND name = :name';
        $stmt = $db->prepare($sql);
        $stmt->bindParam('user_id', $userId);
        $stmt->bindParam('name', $name);
        $stmt->execute();
        $result = $stmt->fetch();
        if (isset($result['params'])){
            return $result['params'];
        }
    }
}