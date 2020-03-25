<?php
class AdminAssets{
    public static $dir = '/assets/admin/';
    public static function storageCss(){
        return [
          'css/bootstrap.css',
          'css/dashboard.css'

        ];

    }
    public static function storageJs(){
        return [
           // 'js/bootstrap.js',
            'js/jquery-3.4.1.min.js',
            'js/tab.js'
        ];
    }

    public static function registerCss()
    {
        $css = self::storageCss();
        $html = '';
        if (is_array($css)) {
            foreach ($css as $item) {
                $html .= '<link rel="stylesheet" href="' . self::$dir . $item . '">';
            }
        }
            return $html;

    }

    public static function registerJs()
    {
        $Js = self::storageJs();
        $html = '';
        if (is_array($Js)) {
            foreach ($Js as $item) {
                $html .= '<script src="' . self::$dir . $item . '"></script>';
            }
        }
        return $html;

    }

}