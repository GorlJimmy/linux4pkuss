$(function() {
	project = $('#project_list');
	theme = $('#theme_list');

	$.post('/controller/project/projectHandler.php?type=project_list', {},
			function(projects, statu) // 回传函数
			{
				var projects = eval('(' + projects + ')');
				for (var i = 0; i < projects.length; i++) {
					$(
							'<option value=' + projects[i].id + '>'
									+ projects[i].name + '</option>').appendTo(
							project);
				}
			});

	project.change(function() {
		$.post('/controller/theme/themeHandler.php?type=theme_list', {
			project_id : project.val()
		}, function(themes, statu) // 回传函数
		{
			var themes = eval('(' + themes + ')');
			theme.children().remove();
			$("<option value='0'>请选择主题</option>").appendTo(theme);
			for (var i = 0; i < themes.length; i++) {
				$('<option value=' + themes[i].id + '>'
								+ themes[i].name + '</option>').appendTo(theme);
			}
		});
	});

});