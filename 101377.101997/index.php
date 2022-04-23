<?php
include ("functions.php");
include ("CRUDFunctions.php");
require_once ("functions.php");
require_once ("CRUDFunctions.php")

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "style.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/5823e79d0e.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<header>
		<h1>Saikera</h1>
		<h2>Access To Book Samples</h2>
	</header>
	<main>
		<br>
		<form action = "#" method = "post">
			<input type = "text" id = "textbox" name = "book_title" placeholder="Book Name">
			<input type = "text" id = "textbox" name = "book_author" placeholder="Author">
			<input type = "text" id = "textbox" name = "book_genre" placeholder="Genre"><br><br>
 
			<button name = "create">Add</button>
			<button name = "read">Refresh</button>
			<button name = "edit">Edit</button>
			<button name = "delete">Delete</button><br><br>
		</form>

		<table id = "records">
			<thead>
				<th>ID</th>
				<th>Book Title</th>
				<th>Author</th>
				<th>Genre</th>
				<th>Edit</th>
				<th>Sample Link</th>
			</thead>
			<tbody>
				<?php 
				if(isset($_POST['read'])){
					$returns = getData();

					if($returns){
						
						while ($row = mysqli_fetch_assoc($returns)){ ?>

					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['book_title'];?></td>
						<td><?php echo $row['book_author'];?></td>
						<td><?php echo $row['book_genre'];?></td>
						<td><button type = "button" id = "singlEditer" onclick = "singlEditer()"><i class='fas fa-edit'></i></button></td>
						<td><?php SL();?></td>
					</tr>

					<?php 
					}
				}	
				}
			?>
			</tbody>
		</table>
	</main>
	<footer></footer>
<script type="text/javascript" src = "main.js"></script>
</body>
</html>