<!doctype html>
<html>
<head>
	<title>Twitter Database Insert</title>
</head>
<body>

	<div id="container">
		<h1>Twitter Handle</h1>
		<form action="<?php echo URL::to('twitter/search') ?>" method="get">
			<label>Username:</label>
			<input type="text" name="username"><br/>
			<label>Real Name: </label>
			<input type="text" name="real_name"><br/>
			<input type="submit" value="Add">
		</form>
	</div>

</body>
</html>