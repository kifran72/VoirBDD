<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
        
<?php
        // $link = mysqli_connect('localhost', 'root', '');
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $link = mysqli_connect($dbhost,$dbuser,$dbpass) or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');
        $sql="SHOW DATABASES";

        if (!($result=mysqli_query($link,$sql)))
        {
            printf("Error: %s\n", mysqli_error($link));
        }

        while( $row = mysqli_fetch_row( $result ))
            echo $row[0] . "</br>";
?>

	</body> 
</html>