<?php

class LanguageTab extends BaseController {
    public function begin(){
        $languages=Language::getActive();
        return $this->renderAdminjax('widgets/language/tab',[
            'languages'=>$languages
        ]);
    }
}
