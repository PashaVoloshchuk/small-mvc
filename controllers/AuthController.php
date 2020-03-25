<?php

class AuthController extends BaseController {

    public function actionLogin(){

        if (isset($_POST['btn_login'])){
            $post = $_POST;
            $model=new User;
            $user = $model->findByLogin($post['login']);
            if ($user['login'] === false){
                $errors[]='Login not found';
            }
            else{
                if ($model->passwordVerify($post['password'],$user['password'])){
                    echo 'User is auth ';
                    $_SESSION['user'] = $user['login'];
                    echo 'Hello '.$_SESSION['user'];
                }else{
                    echo 'Wrong password';
                }
            }

        }
        return $this->render('auth/login',['errors'=>$errors]);
    }

    public function actionRegister(){
       $errors=[];
        if (isset($_POST['btn_register'])){
            $post = $_POST;
            $model = new User();
            if ($model->findByLogin($post['login'])){
                $errors[] = 'Login is find';
            }else{
                $uid = $model->register($post);
            }

        }
        return $this->render('auth/register',['errors' =>$errors]);

    }




}

?>