<!doctype html>
<html>
<head>
	<title>Twitter Search App</title>
</head>
<body>

	<div id="container">
		<h1>Twitter Search Page</h1>
		<form action="<?php echo URL::to('twitter/results') ?>" method="get">
			<input type="text" name="search-term">
			<input type="submit" value="Search">
		</form>
	</div>


	<div id="databaseQuery">
		<?php
			echo "<a href=" . URL::to('twitter/add') . ">Add a database entry.</a><br>";
			foreach ($users as $user) {
				echo $user->real_name . ' ';
				echo "<a href=" . URL::to('twitter/results') . "?search-term=" . $user->username . ">";
				echo $user->username . "</a></br>";
			}
		?>
	</div>

</body>
</html>