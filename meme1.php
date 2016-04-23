<?php
	$caption=$_POST["caption"];
	$filename="out/".generateRandomString().".png";
	$meme="assets/memes/".rand(0,99).".png";

#        echo $caption;
#        echo "<br>";
#        echo $filename;
#        echo "<br>";
#        echo "<img src=\"$meme\"><br/>";
#        echo $meme;
#	echo "<br>";
	
    	exec ("/var/www/html/create.sh $meme $filename \"$caption\"");

#	echo "/var/www/html/create.sh $meme $filename \"$caption\"";
    	echo "<p/>";
    	echo "<img src=\"$filename\"><br/>";


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
