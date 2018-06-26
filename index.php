<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>


<form action="add_comment.php" method="post">

<div class="form-group">
<label for="usr"> Name: </label>
<input type="text" class="form-control" id="name">
</div>

<div class="form-group">
<label for="email">Email: </label>
<input type="text" class="form-control" id="email">
</div>

<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

<button type="submit" class="btn btn-default"> Submit </button>

</form>

<?php 

$user = 'root';
$pass = '';
$db  = 'test';

$link = mysqli_connect('localhost', $user, $pass, $db);

$result = $link->query("SELECT * FROM comments");
$num_rows = mysqli_num_rows($result);

 if(!$result || ($num_rows <0)) {
	echo "Error displaying info";
return;
 }

else {
	echo "<h1> $num_rows Comments  </h1>";
}


echo "<table>";

while($row = mysqli_fetch_assoc($result)) {
								$vardas = $row['Name'];
								$date = $row['Date'];
								$comment = $row['Comment'];

								
							echo "<tr><td>$vardas</td><td>$date</td></tr><tr><td>$comment</td></tr>\n";
									
								
							}

	

	
?>



</body>
</html>
