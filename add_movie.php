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
		<h1>Add Movie</h1>
	</header>
    <form action="add_movie_verify.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="show_type">Show Type:</label>
        <input type="text" id="show_type" name="show_type" required><br><br>

        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="duration" required><br><br>

        <label for="rating">Rating:</label>
        <input type="text" id="rating" name="rating" required><br><br>

        <label for="date_added">Date Added:</label>
        <input type="text" id="date_added" name="date_added" required><br><br>

        <label for="listed_in">Listed In:</label>
        <input type="text" id="listed_in" name="listed_in" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
