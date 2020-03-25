<?php

class BaseController
{


    public $templatePath = 'views';
    public $loyautPath = 'views/common';
    public $templateAdminPath = 'views/admin';
    public $loyautAdminPath = 'views/admin/common';

    public function checkTemplate($template)
    {
        $fullTemplate = ROOT . '/' . $this->templatePath . '/' . $template . '.php';
        if (file_exists($fullTemplate)) {
            return true;
        } else {
            echo 'File Template not found <b>' . $fullTemplate . '</b>';
            return false;
        }
    }


    public function render($template, $data = null)
    {
        if (is_array($data)) {
            foreach ($data as $key => $dt) {
                ${$key} = $dt;
            }
        }
        if ($this->checkTemplate($template)) {
            include ROOT . '/' . $this->loyautPath . '/header.php';
            include ROOT . '/' . $this->templatePath . '/' . $template . '.php';
            include ROOT . '/' . $this->loyautPath . '/footer.php';
        }
    }


    public function renderAdmin($template, $data = null)
    {
        if (is_array($data)) {
            foreach ($data as $key => $dt) {
                ${$key} = $dt;
            }
        }
        // if ($this->checkTemplate($template)){
        include ROOT . '/' . $this->loyautAdminPath . '/header.php';
        include ROOT . '/' . $this->templateAdminPath . '/' . $template . '.php';
        include ROOT . '/' . $this->loyautAdminPath . '/footer.php';
        //}
    }


    public function renderAdminjax($template, $data = null)
    {
        if (is_array($data)) {
            foreach ($data as $key => $dt) {
                ${$key} = $dt;
            }
        }
        // if ($this->checkTemplate($template)){
        include ROOT . '/' . $this->templateAdminPath . '/' . $template . '.php';
        //}
    }
}


?>