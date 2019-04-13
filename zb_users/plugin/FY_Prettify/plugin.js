//注册按钮---ue哎(叹气！
$(function() {
  $("#msg").after("<a href='javascript:void(0)' onclick='prettify()' title='插入代码'> 代码高亮</a>");
  $("#prettify-box").draggable();
});
function prettify(){
  var ueObj=UE.getEditor('editor_content');
  var range = ueObj.selection.getRange();
  range.select();
  var txt = ueObj.selection.getText();
  var value = '<pre class="fy-prettyprint linenums"></pre>';
  ueObj.execCommand('insertHtml', value);
  $('#prettify-box').slideToggle();
}

var DMGL_Btn = [];
DMGL_Btn['代码高亮'] = 'background: rgba(0, 0, 0, 0) url(\'' + bloghost + 'zb_users/plugin/FY_Prettify/Prettify.png\') no-repeat center / 20px 20px !important;';
UE.registerUI('代码高亮', function (editor, uiname) {
  var btn = new UE.ui.Button({
    name: uiname,
    title: uiname,
    cssRules: DMGL_Btn[uiname],
    //点击时执行的命令
    onclick: function () {
     	var ueObj=UE.getEditor('editor_content');
		var range = ueObj.selection.getRange();
  		range.select();
  		var txt = ueObj.selection.getText();
  		var value = '<pre class="fy-prettyprint linenums"></pre>';
  		ueObj.execCommand('insertHtml', value);
  		$('#prettify-box').slideToggle();
    }
  });
  return btn;
});
window.UEDITOR_CONFIG['toolbars'][0].push('代码高亮');