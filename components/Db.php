<?php
    class Db
    {
        public static function connect(){
            try {
                $con = new PDO('mysql:host='.DB_SERVER.'; dbname='.DB_NAME, DB_USER, DB_PASSWORD);
                $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                $con->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8
                return $con;
            }
            catch (PDOException $err) {
                Log::add('Error connect to database - '.$err->getMessage());
                die();  //  terminate connection
            }
        }
    }
?>