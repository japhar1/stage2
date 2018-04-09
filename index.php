<!doctype html>

<html>
	<head>
		<title>HNG Internship 4.0</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
	</head>

	<body>
        <div class="container">
            <div class="content">
                <p>User - @japhar1</p>
                <p>HNG Internship 4.0</p>
                <?php
                $time = time();
                $actual_time = date('F jS Y h:i a' );
                ?>
               <p><?php echo 'Date/Time: '.$actual_time;?></p>
                <p>Task - Stage 1</p>
            </div>
        </div>

	</body>
</html>