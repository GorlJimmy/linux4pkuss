$(function() {
	province = $('#province_list');
	city = $('#city_list');
	area = $('#area_list');

	$.post('/controller/address/addressHandler.php', {
		type : 'province_list'
	}, function(provinces, statu) // 回传函数
	{
		var provinces = eval('(' + provinces + ')');
		for (var i = 0; i < provinces.length; i++) {
			$(
					'<option value=' + provinces[i].province_code + '>'
							+ provinces[i].name + '</option>').appendTo(
					province);
		}
	});

	province.change(function() {
		$.post('/controller/address/addressHandler.php', {
			type : 'city_list',
			province_code : province.val()
		}, function(cities, statu) // 回传函数
		{
			var cities = eval('(' + cities + ')');
			city.children().remove();
			$("<option value=''>请选择城市</option>").appendTo(city);
			for (var i = 0; i < cities.length; i++) {
				$(
						
						'<option value=' + cities[i].city_code + '>'
								+ cities[i].name + '</option>').appendTo(city);
			}
		});
	});
	city.change(function() {
		$.post('/controller/address/addressHandler.php', {
			type : 'area_list',
			city_code : city.val()
		}, function(areas, statu) // 回传函数
		{
			var areas = eval('(' + areas + ')');
			area.children().remove();
			$("<option value=''>请选择地区</option>").appendTo(area);
			for (var i = 0; i < areas.length; i++) {
				$(
						'<option value=' + areas[i].area_code + '>'
								+ areas[i].name + '</option>').appendTo(area);
			}
		});
	});
});