<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
<form method="post" action="text.php">
	<label>Заголовок</label>
	<input type="text" name="zag">
	<br>
	<label>Текст</label>
	<textarea name="text" cols="20" rows="4" style="vertical-align: top;">	
	</textarea>
	<br>
	<input type="submit" name="submit">
	<a href="finder.php">Найти Текст по ID</a>
	<a href="index.php">Log out</a>
</form>
</body>
</html>