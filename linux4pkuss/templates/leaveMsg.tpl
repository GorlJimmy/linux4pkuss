<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>KindEditor JSP</title>
	<link rel="stylesheet" href="/linux4pkuss/kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="/linux4pkuss/kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="/linux4pkuss/kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="/linux4pkuss/kindeditor-4.1.10/lang/zh-CN.js"></script>
	<script charset="utf-8" src="/linux4pkuss/kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : '/linux4pkuss/kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : '/linux4pkuss/kindeditor-4.1.10/jsp/upload_json.jsp',
				fileManagerJson : '/linux4pkuss/kindeditor-4.1.10/jsp/file_manager_json.jsp',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						document.forms['example'].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						document.forms['example'].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body>

<form name="example" method="post" action="/linux4pkuss/controller/leaveMsg/addMsg.php">
<textarea name="content" cols="100" rows="8" style="width:700px;height:200px;visibility:hidden;"></textarea>
<br />
<input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
</form>
</body>
</html>