<?php
#注册插件
RegisterPlugin("FY_Prettify","ActivePlugin_FY_Prettify");
function ActivePlugin_FY_Prettify() {
   Add_Filter_Plugin('Filter_Plugin_Zbp_MakeTemplatetags','FY_Prettify_main');	
   Add_Filter_Plugin('Filter_Plugin_Edit_Response2','FY_Prettify_Edit');
}

//引入js/css
function FY_Prettify_main() {
	global $zbp;
	$zbp->header .= '<style type="text/css">.prettyprint,pre.prettyprint{white-space:pre-wrap;word-wrap:break-word;background-color:#444;border:1px solid #272822;overflow:hidden;padding:0;margin:20px 0;font-family:Consolas,"Bitstream Vera Sans Mono","Courier New",Courier,monospace!important;color:#666}.prettyprint.linenums,pre.prettyprint.linenums{-webkit-box-shadow:inset 40px 0 0 #39382e,inset 41px 0 0 #464741;-moz-box-shadow:inset 40px 0 0 #39382e,inset 41px 0 0 #464741;box-shadow:inset 40px 0 0 #39382e,inset 41px 0 0 #464741}.prettyprint.linenums ol,pre.prettyprint.linenums ol{margin:0 0 0 33px;padding:5px 10px}.prettyprint.linenums ol li,pre.prettyprint.linenums ol li{color:#bebec5;line-height:20px;margin-left:0;list-style:decimal}.prettyprint ol.linenums{margin-bottom:0;background-color:#272822}.prettyprint .com{color:#93a1a1}.prettyprint .lit{color:#ae81ff}.prettyprint .clo,.prettyprint .opn,.prettyprint .pun{color:#f8f8f2}.prettyprint .fun{color:#dc322f}.prettyprint .atv,.prettyprint .str{color:#e6db74}.prettyprint .kwd,.prettyprint .tag{color:#f92659}.prettyprint .atn,.prettyprint .dec,.prettyprint .typ,.prettyprint .var{color:#a6e22e}.prettyprint .pln{color:#66d9ef}
	</style>' . "\r\n";
	$zbp->footer .= '<script src="'.$zbp->host.'zb_users/plugin/FY_Prettify/prettify.js" type="text/javascript"></script>' . "\r\n";
}
//后台编辑器添加按钮
function FY_Prettify_Edit(){
	global $zbp;
    echo "<script src='" . $zbp->host . "zb_users/plugin/FY_Prettify/plugin.js' type='text/javascript'></script>";
}

function UninstallPlugin_FY_Prettify() {}