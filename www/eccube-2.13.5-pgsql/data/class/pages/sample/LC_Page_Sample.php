<?php

require_once(CLASS_EX_REALDIR ."page_extends/LC_Page_Ex.php");

class LC_Page_Sample extends LC_Page_Ex{
    /**
     * Pageを初期化する
     *
     *@return void
     */
    function init(){
        parent::init();
        $this->tpl_page_category = 'sample';
        $this->tpl_title = 'サンプルページ';
    }

    /**
     *
     * Pageのプロセス
     * @return  void
     */
    function process(){
        parent::process();
        $this->action();
        $this->sendResponse();
    }

    /**
     * Pageのアクション
     *
     * @return void
     */
    function action(){
        $objQuery = SC_Query_Ex::getSingletonInstance();
        $this->arrRet=array();
        $this->arrRetMulti=array();

        //ニュースを取得
        $arrRet = $objQuery->select('*','dtb_news','news_id = 1');

        //データベースからデータを取得できたか？
        if(isset($arrRet)){
            $this->arrRet=$arrRet[0];
        }

        $arrRetMulti = $objQuery->select('*','dtb_products');

        if(isset($arrRetMulti)){
            $this->arrRetMulti=$arrRetMulti;
        }
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