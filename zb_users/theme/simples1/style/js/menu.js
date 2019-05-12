var isOpen = false;
function animateShow(){
	$(".menubox").animate({
		height:'162px',
		opacity:'1',
	},300);
}
function animateHide(){
	$(".menubox").animate({
		height:'0px',
		opacity:'0',
	},300);
}
//点击非菜单区域关闭菜单
$('body').on('click',function () {
	if (isOpen) {
		animateHide();
		isOpen = false;
		return;
	}
});
// 点击按钮区打开菜单
$('.menu').on('click',function (e) {
	e.stopPropagation();
	if (isOpen) {
		animateHide();
		isOpen = false;
		return;
	}
	isOpen = true;
	animateShow();
});
//点击菜单区域不能关闭菜单
$(".menubox").on('click',function(e){
	e.stopPropagation();
	if (isOpen)  return;
});
//点击close按钮关闭菜单
$(".menu-close").click(function(){
	if(isOpen){
		animateHide();
		isOpen = false;
		return;
	}
});
/* 评论框相关 */
zbp.plugin.unbind("comment.reply", "system");
zbp.plugin.on("comment.reply", "simples",function(i) {
	$("#inpRevID").val(i);
	var p = $('#comment-'+i);
	var o = p.find(".author_name").html();
	$("#reply-name").html(o);
    cancel = $("#cancel-comment-reply-link"),
    cancel.show();
	$("#reply-title").show();
    cancel.click(function() {
		$("#inpRevID").val(0);
		$("#reply-name").html("");
		$("#reply-title").hide();
        $(this).hide();
		window.location.hash = '#comment-'+i;
        return false;
    });
    try {
        $('#txaArticle').focus()
    } catch(e) {}
    return false
});
zbp.plugin.on("comment.postsuccess", "system",
function(formData, retString, textStatus, jqXhr) {
	var objSubmit = $("#inpId").parent("form").find(":submit");
	objSubmit.removeClass("loading").removeAttr("disabled").val(objSubmit.data("orig"));
	var data = $.parseJSON(retString);
	if (data.err.code !== 0) {
		alert(data.err.msg);
		throw "ERROR - " + data.err.msg
	}
	if (formData.replyid == "0") {
		$("#comment_list .commentlist").prepend(data.data.html);
	} else {
		$("#comment-"+formData.replyid+" .children").append(data.data.html);
	}
	location.hash = "#comment-" + data.data.ID;
	zbp.$("#txaArticle").val("");
	zbp.userinfo.saveFromHtml()
});
zbp.plugin.on("comment.postsuccess", "simples",
function() {
    $("#cancel-comment-reply-link").click();
});
function c(p, o) {
    p = isNaN(p) ? $("#" + p).offset().top: p;
    $("body,html").animate({
        scrollTop: p
    },
    o ? 0 : 233);
    return false
}
zbp.plugin.on("comment.get", "system", function(postid, page) {
    $("#cancel-comment-reply-link").trigger("click");
    $.get(bloghost + "zb_system/cmd.php?act=getcmt&postid=" + postid + "&page=" + page,
    function(data) {
        $('#AjaxCommentBegin').nextUntil('#AjaxCommentEnd').remove();
        $("#comments_paginate, #comment_list").fadeOut("slow");
        var q = $("#comment_list").html();
        var p = $("#comments_paginate").html();
        $("#comment_list").html(q);
        $("#comments_paginate").html(p);
        c("post-comment-list");
        $("#comments_paginate, #comment_list").fadeIn("slow");
        $('#AjaxCommentBegin').after(data)
    })
});