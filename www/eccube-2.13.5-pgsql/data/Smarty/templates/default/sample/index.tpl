<!--▼CONTENTS-->
<div id="undercolumn">
    <div id="undercolumn_aboutus">It works!</div>

    <!--{if $arrRet}-->
    ニュースタイトル:<!--{$arrRet.news_title|escape}--><BR>
    ニュースコメント:<!--{$arrRet.news_comment|escape}-->
    <!--{/if}-->

    <hr>
    <!--{if $arrRetMulti}-->
        <!--{section name = cnt loop = $arrRetMulti}-->
            製品名[<!--{$arrRetMulti[cnt].name|escape}-->]
            コメント[<!--{$arrRetMulti[cnt].main_list_comment|escape}-->]<BR>
        <!--{/section}-->
    <!--{/if}-->

</div>

<!--▲CONTENTS-->

