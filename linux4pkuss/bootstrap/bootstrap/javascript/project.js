$(function(){
	//初始化最新文章列表板块
	$.post('/controller/project/projectHandler.php?type=list',{},
					function(_projects, statu) {
						var projects = eval('(' + _projects + ')');
						if (projects == null) {
							$("<p>暂时无数据</p>").appendTo($("#section_1"));
							$("<p>暂时无数据</p>").appendTo($("#section_2"));
							$("<p>暂时无数据</p>").appendTo($("#section_3"));
						} else {
								$("#section_1 .title").text(projects[0].name);
								$("#section_1 .content").text(projects[0].description);
								$("#section_2 .title").text(projects[1].name);
								$("#section_2 .content").text(projects[1].description);
								$("#section_3 .title").text(projects[2].name);
								$("#section_3 .content").text(projects[2].description);
						}
					}

			);
	
});