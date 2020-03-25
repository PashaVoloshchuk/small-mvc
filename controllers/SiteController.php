<?php

class SiteController extends BaseController {
    public function actionHome(){
        $model = new Page();
        $page = $model->getPageById();
        $db = Db::connect();
        return $this ->render('site/home',['page'=>$page]);
    }

    public function actionContact(){
        echo 'contact-page';
    }
}






?>