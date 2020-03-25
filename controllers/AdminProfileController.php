<?php

class AdminProfileController extends BaseController
{
    public function actionIndex()
    {
        $setting = new UserSetting();
        if (isset($_POST['UserSetting'])) {
            $data = $_POST['UserSetting'];
            $userId = 1;
            foreach ($data as $name=>$params) {
                if (!empty($params)) {
                    if ($setting->find($userId, $name, $params)) ;
                    else {
                        $setting->add($userId, $name, $params);
                    }
                }
                if (isset($data['save'])) {
                    Redirect::run('/admin/profile');
                }
            }
        }
        return $this->renderAdmin('profile/index', ['setting'=> $setting]);
    }//sdfsdf
}