<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search city</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Search city</h4>
<table>
<tr>
<td align="center">Enter name of city:</td>
</tr>
<tr>
<td><input type="text" id = "query" name="city_name"></td>
</tr>
</table>
<br>
<br>
</center>
<div id = "result"></div>
<script src="jquery.js"></script>
<script>
	$("#query").keydown(function(){
		var result = $("#result");
		var data = {query: $("#query").val()};	
		$.post("findCity.php", data, function(d){
			result.html(d);
		});
	});
</script>
</body>
</html>