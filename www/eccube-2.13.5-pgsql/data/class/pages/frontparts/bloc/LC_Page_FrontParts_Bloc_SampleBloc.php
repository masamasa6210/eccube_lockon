<?php
require_once CLASS_REALDIR .'pages/frontparts/bloc/LC_Page_FrontParts_Bloc.php';

class LC_Page_FrontParts_Bloc_SampleBloc extends LC_Page_FrontParts_Bloc{
    function init(){
        parent::init();
    }

    function process(){
        $this->action();
        $this->sendResponse();
    }

    function action(){
    }

    function destroy(){
        parent::destroy();
    }
}
?>
