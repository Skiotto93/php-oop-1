<?php 

class Movies {
    public $title;
    public $genre;
    public $releaseDate;
    public $description;
}

$the_lord_of_the_rings_I = new Movies();

$the_lord_of_the_rings_I->title = "Il Signore degli Anelli";
$the_lord_of_the_rings_I->genre = "Fantasy";
$the_lord_of_the_rings_I->releaseDate = "2001";
$the_lord_of_the_rings_I->description = "Dall'idilliaca terra degli hobbit agli abissi fumosi di Mordor, Frodo Baggins intraprende la sua epica ricerca per distruggere l'anello di Sauron.";

$the_batman = new Movies();

$the_batman->title = "The Batman";
$the_batman->genre = "Avventura";
$the_batman->releaseDate = "2022";
$the_batman->description = "Gotham City è in mano alla corruzione, che dilaga tra le più alte cariche della città, dove Batman sembra esser l'unico che cerchi di garantire giustizia. È per questo che Bruce Wayne deve essere cauto e non fidarsi facilmente, ma dalla sua parte ha sempre il fidatissimo Alfred (Andy Serkis) e può contare anche sul tenente James Gordon (Jeffrey Wright).";

$the_silence_of_the_lambs = new Movies();

$the_silence_of_the_lambs->title = "Il Silenzio degli Innocenti";
$the_silence_of_the_lambs->genre = "Thriller";
$the_silence_of_the_lambs->releaseDate = "1991";
$the_silence_of_the_lambs->description = "Hannibal Lecter è uno psichiatra geniale, un uomo colto e raffinato. Ed è anche un pericoloso psicopatico e un feroce assassino. Ma è l'unica risorsa che ha a disposizione la giovane agente dell'FBI Clarice Starling per rintracciare Buffalo Bill, l'imprendibile \"mostro\" che scuoia le sue vittime.";

$nightmare = new Movies();

$nightmare->title = "Nightmare - Dal profondo della notte";
$nightmare->genre = "Horror";
$nightmare->releaseDate = "1984";
$nightmare->description = "Tina Grey ha un incubo dove si ritrova in una decrepita caldaia e viene inseguita da una misteriosa figura dalla pelle bruciata che prova ad attaccarla con il suo guanto artigliato.";

var_dump($the_lord_of_the_rings_I);
var_dump($the_batman);
var_dump($the_silence_of_the_lambs);
var_dump($nightmare);


?>