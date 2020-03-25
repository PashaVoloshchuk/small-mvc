<?php
class language{
    public $statusInActive = 1;
    public $statusIsDraft = 0;
    public $tableName = 'language';
    public function create($data){
        $db = Db::connect();
        $sql = 'INSERT INTO '.$this->tableName.' (code, name, title, locale, status) '.
            ' VALUES (:code, :name, :title, :locale, :status)';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':code',$data['code']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':title',$data['title']);
        $stmt->bindParam(':locale',$data['locale']);
        $stmt->bindParam(':status',$data['status']);
        $stmt->execute();
        return $db->lastInsertId();
    }

    public function update($id,$data){
        $db = Db::connect();
        $sql = 'UPDATE '.$this->tableName.' SET code = :code, name = :name, title = :title, locale = :locale, '.
            'status = :status WHERE id = :id';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':code',$data['code']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':title',$data['title']);
        $stmt->bindParam(':locale',$data['locale']);
        $stmt->bindParam(':status',$data['status']);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
        return true;
    }


    public function delete($id){
        $db = Db::connect();
        $sql = 'DELETE FROM '.$this->tableName.' WHERE id = :id';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return true;
    }


    public function listAll(){
        $db = Db::connect();
        $sql = 'SELECT * FROM '.$this->tableName. ' ORDER BY id DESC';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function getById($id){
        $db=Db::connect();
        $sql = 'SELECT * FROM '.$this->tableName.' WHERE id = :id';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }

    static function getActive(){
        $db=Db::connect();
        $sql = 'SELECT * FROM '.(new self)->tableName.' WHERE status = "'.(new self())->statusInActive.'"';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
