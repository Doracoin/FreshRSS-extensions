<?php

class KeepFolderStateExtension extends Minz_Extension {

    public function init() {
        Minz_View::appendScript($this->getFileUrl('jquery.min.js', 'js'));
        Minz_View::appendScript($this->getFileUrl('script.js', 'js'));   
    }

}
