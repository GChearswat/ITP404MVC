<!doctype html>
<html>
<head>
	<title>Twitter Search Results</title>
</head>
<body>

	<p>You searched for <?php echo $search_term ?></p>

	<div id="results">
		<?php 
			echo '<ul>';
			foreach($results->status as $tweet) {
				echo '<li style="padding:10px">' . '<strong>' . $tweet->created_at . '</strong> </br>' . $tweet->text . '</br>';
				
				echo '</li>';
			}
			echo '</ul>';
		?>
	</div>
</body>
</html>