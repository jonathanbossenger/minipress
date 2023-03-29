<?php
// use mysql_connect to connect to the database
$mysqli = mysqli_connect( "localhost", "root", "password", "minipress" );
?>
<html>
<head>
    <title>MiniPress</title>
</head>
<body>
<h1>MiniPress</h1>
<?php
// get the posts from the database
$result = mysqli_query( $mysqli, "SELECT * FROM posts" );
while ( $row = mysqli_fetch_assoc( $result ) ) {
	echo "<h1>" . $row['title'] . "</h1>";
	echo "<p>" . $row['content'] . "</p>";
}
?>
</html>
