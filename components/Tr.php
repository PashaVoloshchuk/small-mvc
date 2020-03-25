<?php
class Tr{
    public static $langPath = '/language/';
    public static function t($group,$attribute){
        $current_lang='ru';
        $path = ROOT.self::$langPath.$current_lang.'/'.$group.'.php';
        if (file_exists($path)){
            $translated = include $path;
            if (array_key_exists($attribute,$translated)){
                return $translated[$attribute];
            }
            return $attribute;
        }
    }




}