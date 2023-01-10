<?php 
require_once __DIR__ . "/classes/movies.php";

$movies = [
    //Gli argomenti di una class (Movies[description]) opzionali vanno inseriti alla fine
    new Movies("Il Signore degli Anelli", ["Fantasy", "Avventura"], 2001, "Dall'idilliaca terra degli hobbit agli abissi fumosi di Mordor, Frodo Baggins intraprende la sua epica ricerca per distruggere l'anello di Sauron."),
    new Movies("The Batman", ["Avventura", "Azione"], 2022),
    new Movies("Il Silenzio degli Innocenti", ["Thriller","Giallo"], 1991, "Hannibal Lecter è uno psichiatra geniale, un uomo colto e raffinato. Ed è anche un pericoloso psicopatico e un feroce assassino. Ma è l'unica risorsa che ha a disposizione la giovane agente dell'FBI Clarice Starling per rintracciare Buffalo Bill, l'imprendibile \"mostro\" che scuoia le sue vittime."),
    new Movies("Nightmare - Dal profondo della notte", ["Horror", "Mystery"], 1984)
];

var_dump($movies)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movies</title>
</head>
<body>
    <h1>Lista film:</h1>
    <ul>
        <?php foreach( $movies as $movie) { ?>
        <li>
            <h3><?php echo $movie->title ?></h3>
            <span>Anno di uscita: <?php echo $movie->releaseDate ?></span>
            <ul>
            <?php foreach( $movie->genres as $genre) { ?>
                <li>
                    <?php echo ucfirst($genre) ?>
                </li>
            <?php } ?>
            </ul>
            <p><?php echo $movie->description ?></p>
        </li>
        <?php } ?>
    </ul>
</body>
</html>