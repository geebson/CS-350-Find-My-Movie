<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.php">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Movie Finder</title>
	<link rel="stylesheet" href="luke_gibson_first_style.css">
    
</head>
<body>
	<header>
		<h1>Search for a Movie to Delete</h1>
	</header>
    <form action="delete_verify.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        
        <input type="submit" value="Search">
    </form>

    <header>
		<h1>Search for a Movie to Update</h1>
	</header>
    <form action="update_verify.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        
        <input type="submit" value="Search">
    </form>
</body>