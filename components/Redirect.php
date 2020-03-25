<?php
class Redirect{
    public static function run($link){
        if (header("HTTP/1.1 301 Moved Permanently")){
            header('Location:'.$link);
            exit;
        }
        else{
            echo '<script>location.href="'.$link.'"</script>';
        }
            
    }
}