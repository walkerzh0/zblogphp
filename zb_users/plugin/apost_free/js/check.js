function checkPost(){
	$.post(bloghost+'zb_users/plugin/apost_free/postdata.php',
		{
			"Title":$("input[name='Title']").val(),
			"Content":editor.getContent(),
			"token":$("input[name='token']").val(),
			"verifycode":$("input[name='verifycode']").val(),
		},
		function(data){
			var s =data;
			if((s.search("faultCode")>0)&&(s.search("faultString")>0)){
				alert(s.match("<string>.+?</string>")[0].replace("<string>","").replace("</string>",""));
				$("#reg_verfiycode").attr("src",bloghost+"zb_system/script/c_validcode.php?id=apost_free&amp;tm="+Math.random());
			}else{
				var s =data;
				alert(s);
				window.location=bloghost+"?apost_free";
			}
		}
	);
}