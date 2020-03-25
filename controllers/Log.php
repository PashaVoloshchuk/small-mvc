<?php
 class Log{
     public static $logsFolder = '/logs/';
     public static function add($message, $description = null){
         $fileName = ROOT.self::$logsFolder.date('d-m-Y').'.txt';
         if (!file_exists($fileName)){
             $fp = fopen($fileName, 'w');
             fwrite($fp, $message.$description);
             fclose($fp);
         }
         else{
             $fp = fopen($fileName, 'a+');
             fwrite($fp, $message.$description.PHP_EOL);
             fclose($fp);
         }
     }
 }
 ?>