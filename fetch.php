<?php
$connect = mysqli_connect("localhost", "root", "", "dbmspro");
$output = '';

       include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';

if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM items 
	WHERE name LIKE '%".$search."%'
	OR os LIKE '%".$search."%'
	OR images LIKE '%".$search."%'
	OR id LIKE '%".$search."%'
	
	";
}
else
{
	$query = "
SELECT * FROM items ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
						<th>img</th>
						<th>name</th>
						<th>os</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td><img src='.$row["images"].' width="100" height="100"></td>
				<td>'.$row["name"].'</td>
				<td>'.$row["os"].'</td>
				<td><a href="products.php">Proceed to buy</a></td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>