<?php

class Page{

    public $tableName = 'page';
    public $tableTranslateName = 'page_translate';


    public function create($data){
        $time = time();
        $db = Db::connect();
        $sql = 'INSERT INTO '.$this->tableName.' SET status= :status,
        is_index= :is_index,
        date_create= :date_create,
        date_update= :date_update';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':status',$data['status']);
        $stmt->bindParam(':is_index',$data['is_index']);
        $stmt->bindParam(':date_create',time());
        $stmt->bindParam(':date_update',time());
        $stmt->execute();
        return $db->lastInsertId();


    }

    public function createTranslate($id,$lang,$data){
        $db = Db::connect();
        $sql ='INSERT INTO '.$this->tableTranslateName.' SET language = :language,
        page_id = :page_id,
        meta_title = :meta_title,  
        meta_description = :meta_description,  
        header = :header,  
        header2 = :header2,  
        content = :content,  
        short_content = :short_content  
        ';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':language',$lang);
        $stmt->bindParam(':page_id',$id);
        $stmt->bindParam(':meta_title',$data['meta_title']);
        $stmt->bindParam(':meta_description',$data['meta_description']);
        $stmt->bindParam(':header',$data['header']);
        $stmt->bindParam(':header2',$data['header2']);
        $stmt->bindParam(':content',$data['content']);
        $stmt->bindParam(':short_content',$data['short_content']);
        $stmt->execute();
        return $db->lastInsertId();
    }

    public function getPageById($pageId)
    {
        $sql = 'SELECT * FROM '.$this->tableName.' WHERE id = '.$pageId;
        $db = Db::connect();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getPageTranslateById($pageId){
        $sql = 'SELECT * FROM ' . $this->tableName . '
         INNER JOIN ' . $this->tableTranslateName . ' ON ' . $this->tableName . '.id = 
         ' . $this->tableTranslateName . '.page_id WHERE ' . $this->tableTranslateName . '.page_id = 
         "'.$pageId.'"  ORDER BY ' . $this->tableName . '.id DESC';
        $db = Db::connect();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $pageTranslate = $stmt->fetchAll();
        $pageTranslateInfo = [];
        if (is_array($pageTranslate)){
            foreach ($pageTranslate as $translate){
                $pageTranslateInfo[$translate['language']]=$translate;
            }
        }
        return $pageTranslateInfo;
    }

    public function update($id,$data){
        $time = time();
        $db = Db::connect();
        $sql = 'UPDATE '.$this->tableName.' SET status= :status,
        is_index= :is_index,
        date_create= :date_create,
        date_update= :date_update
        WHERE  id= :id';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':status',$data['status']);
        $stmt->bindParam(':is_index',$data['is_index']);
        $stmt->bindParam(':date_create',time());
        $stmt->bindParam(':date_update',time());

        return $db->lastInsertId();


    }

    public function updateTranslate($id,$lang,$data){
        $db = Db::connect();
        $sql ='UPDATE '.$this->tableTranslateName.' SET language = :language,
        page_id = :page_id,
        meta_title = :meta_title,  
        meta_description = :meta_description,  
        header = :header,  
        header2 = :header2,  
        content = :content,  
        short_content = :short_content
        WHERE page_id = :page_id
        AND language = :language  
        ';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':language',$lang);
        $stmt->bindParam(':page_id',$id);
        $stmt->bindParam(':meta_title',$data['meta_title']);
        $stmt->bindParam(':meta_description',$data['meta_description']);
        $stmt->bindParam(':header',$data['header']);
        $stmt->bindParam(':header2',$data['header2']);
        $stmt->bindParam(':content',$data['content']);
        $stmt->bindParam(':short_content',$data['short_content']);
        $stmt->execute();
        return $db->lastInsertId();
    }


    public function getListPage()
    {
        $sql = 'SELECT  '.$this->tableTranslateName.'.id as tr_id, 
          '.$this->tableTranslateName.'.*,
          '.$this->tableName . '.*
          FROM '.$this->tableName . '
         INNER JOIN '.$this->tableTranslateName.' ON '.$this->tableName . '.id = 
         '.$this->tableTranslateName.'.page_id WHERE '.$this->tableTranslateName.'.language = 
         "en"  ORDER BY '.$this->tableName . '.id DESC';
        $db = Db::connect();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();

    }


}


?>