<?php
	$caption=strtoupper($_POST["caption"]);
	$filename="out/".generateRandomString().".png";
	$meme="assets/memes/".rand(0,99).".png";

	
    	exec ("/var/www/html/create.sh $meme $filename \"$caption\"");

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="main.css">
    <title></title>
</head>

<body>

    	<?php echo "<img src=\"$filename\"><br/>"; ?>

</body>

</html>

<?php

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>