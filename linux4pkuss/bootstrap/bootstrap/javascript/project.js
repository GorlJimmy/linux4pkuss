$(function(){
	//初始化最新文章列表板块
	var section_1=$("#section_1");
	$.post('/controller/project/projectHandler.php?type=list',{},
					function(projects, statu) {
						var projects = eval('(' + projects + ')');
						if (projects == null) {
							alert("kkk");
							$("<p>暂时无数据</p>").appendTo(section_1);
							$("<p>暂时无数据</p>").appendTo(section_1);
							$("<p>暂时无数据</p>").appendTo(section_1);
						} else {
							for (var i = 0; i < projects.length; i++) {
								$(projects[i].num).appendTo(section_1);
							}
						}
					}

			);
	
})