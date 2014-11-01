<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search author</title>
</head>

<body>
<a href="index.php"><h3>Back</h3></a>
<center>
<h4>Search author</h4>
<table>
<tr>
<td align="center">Enter surname or first name of author:</td>
</tr>
<tr align="center">
<td><input type="text" id = "query" name="author_name"></td>
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
		$.post("findAuthor.php", data, function(d){
			result.html(d);
		});
	});
</script>
</body>
</html>