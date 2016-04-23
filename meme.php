<?php
    $meme="assets/memes/".rand(0,99).".png";
	$filename="out/".generateRandomString()."png";
    $sentences=getsentences();
    $caption=$sentences[rand(0,count(sentences)-1)];

    exec ("/var/www/html/create.sh $meme $filename \"$caption\"");

    echo "<p/>";
    echo "<img src=\"$filename\"><br/>";
    echo count($sentences);


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getsentences() {
    $frases = [
            "El blanco combina con todo.",
            "La natación es el deporte más completo",
            "La gente más humilde es la más generosa",
            "Los animales son más listos que las personas",
            "La dieta mediterránea es la más sana",
            "Las mejores baladas son de grupos heavy",
            "Los gays son supersensibles.",
            "Todas las modelos son tontas.",
            "En España se hace el mejor doblaje.",
            "Los más radicales con el tabaco son los exfumadores.",
            "Barcelona es muy cosmopolita.",
            "Lo que pinta Miró lo puede pintar un niño.",
            "Me gusta el cine de verdad, no el de bombas.",
            "Si no tienes celos es que no le quieres de verdad.",
            "Los niños de hoy no saben jugar.",
            "La tele atonta.",
            "El rey es campechano.",
            "El rey está preparado.",
            "Los Rolling Stones son incombustibles.",
            "Yo creo en dios, pero no en el de la Iglesia.",
            "El rock ha muerto."
            ];
    return $frases;
}

?>
