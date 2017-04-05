<?php

require_once(CLASS_REALDIR ."pages/sample/LC_Page_Sample.php");

class LC_Page_Sample_Ex extends LC_Page_Sample{
    /**
     * Pageを初期化する
     *
     *@return void
     */
    function init(){
        parent::init();
    }

    /**
     *
     * Pageのプロセス
     * @return  void
     */
    function process(){
        parent::process();
    }

    /**
     * デストラクタ
     *
     * @return void
     */
    function destroy(){
        parent::destroy();
    }
}
?>