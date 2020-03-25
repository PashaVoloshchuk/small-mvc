<?php
 class AdminLanguageController extends BaseController {


     public function actionIndex(){
         $language = new Language;
         $lists = $language->listAll();
         return $this->renderAdmin('language/index', [
             'lists'=>$lists,
         ]);
     }



     public function actionCreate(){
         if (isset($_POST['Language'])){
             $language = new Language;
             $post = $_POST['Language'];
             $lastId = $language->create($post);
             if (isset($data['apply'])){
                 Redirect::run('/admin/language/update?id='.$lastId);
             }
             elseif(isset($data['save'])){
                 Redirect::run('/admin/language');
             }
         }
         return $this->renderAdmin('language/create');
     }


     public function actionUpdate(){
         if (isset($_GET['id'])){
             $id = (int)$_GET['id'];
             $language = new Language;
             $languageInfo = $language->getById($id);
             if (isset($_POST['Language'])){
                 $data = $_POST['Language'];
                 $language->update($id,$data);
                 if(isset($data['apply'])){
                     Redirect::run('/admin/language/update?id='.$id);
                 }
                 elseif(isset($data['save'])){
                     Redirect::run('/admin/language');
                 }
             }
         }
             return $this->renderAdmin('language/update',[
                 'language'=>$languageInfo
             ]);
         }




         public function actionDelete()
    {
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $language = new Language;
            $languageInfo = $language->getById($id);
            if (isset($_POST['delete'])) {
                $language->delete($id);
                echo 'delete';
            }
            return $this->renderAdmin('language/delete', [
                'language' => $languageInfo
            ]);
        }


    }
 }