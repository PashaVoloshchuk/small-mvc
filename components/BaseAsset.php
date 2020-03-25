<?php
class BaseAsset {

    public function init($css,$js){
        echo $this->renderCss($css);
    }

    public function renderCss($css){
        if(is_array($css)){
            $html = '';
            foreach ($css as $cs){
                $html .='<link rel="stylesheet" src=""'.$cs.'">';
            }
        }
        return $html;
    }

}
?>