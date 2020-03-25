<?php
class AdminPageController extends BaseController {


    public function actionIndex(){
        $page = new Page;
        $pageList = $page->getListPage();
        return $this->renderAdmin('page/index',['pageList'=>$pageList]);
    }


    public function actionCreate (){
        if (isset($_POST['Page'])){
            $postPage = $_POST['Page'];
            $postPageTranslate=$_POST['PageTranslate'];
            $page = new Page();
            $pageId = $page->create($postPage);
            foreach ($postPageTranslate as $lang => $dataPageTranslate) {
                $page->createTranslate($pageId,$lang,$dataPageTranslate);
            }

            if (isset($postPage['apply']) && !empty($pageId)){
                Redirect::run('/admin/page/update?id='.$pageId);
            }
            elseif (isset($postPage['save']) && !empty($pageId)){
                Redirect::run('/admin/page');
            }

        }
        return $this->renderAdmin('page/create');
    }


    public function actionUpdate(){
        if (isset($_GET['id'])){
            $page_id = $_GET['id'];
            $page = new Page;
            $pageInfo = $page->getPageById($page_id);
            $pageTranslateInfo = $page->getPageTranslateById($page_id);
            if (isset($_POST['Page'])){
                $postPage = $_POST['page'];
                $postPageTranslate = $_POST['PageTranslate'];
                $page->update($page_id,$postPage);
               foreach ($postPageTranslate as $lang => $dataTranslatePage){
                   $page->updateTranslate($page_id,$lang,$dataTranslatePage);
               }
               if (isset($postPage['apply'])){
                   Redirect::run('/admin/page/update?id='.$page_id);
               }
               elseif (isset($postPage['save'])){
                   Redirect::run('/admin/page');
               }
            }
            return $this->renderAdmin('page/update',[
                'pageInfo'=>$pageInfo,
                'pageTranslateInfo'=>$pageTranslateInfo
                ]);
        }
    }




}