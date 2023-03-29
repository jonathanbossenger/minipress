<?php
$message = 'Create a new post';
// check if the form has been posted
if ( isset( $_POST['action'] ) && $_POST['action'] === 'create' ) {
	$title   = $_POST['title'];
	$content = $_POST['content'];

	// use mysql_connect to connect to the database
	$mysqli = mysqli_connect( "localhost", "root", "password", "minipress" );

	//insert the post into the database
	$result = mysqli_query( $mysqli, "INSERT INTO posts (title, content) VALUES ('$title', '$content')" );
	if ( $result ) {
		$message = "Post created successfully";
	} else {
		$message = "Error creating post";
	}
}
?>
<html>
<head>
    <title>MiniPress Admin</title>
</head>
<body>
<h1>MiniPress Admin</h1>
<?php echo "<p>{$message}</p>" ?>
<form method="post">
    <input  type="hidden" name="action" value="create">
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title"/>
    </div>
    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content"></textarea>
    </div>
    <input type="submit" value="Create"/>
</form>
</html>
