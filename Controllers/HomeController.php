<?php

//le controlleur inclut le modèle
include('Models/Film.php');

//Récupérer les données (ici, tous les films car on est sur la home)


// $movies = getAllMovies();
if (isset($_GET['whichactor'])){
	$actor_name = getMoviesByActor($_GET['whichactor']);
}

$all_actors = getAllActors();
if (isset ($_GET['whichmovie'])){
	$one_movie = getOneMovie($_GET['whichmovie']);
}
//traiter les données
// foreach ($movies as $key => $movie) {
//     $movie['realisateur'] = ucfirst($movie['realisateur']); //Mets une majuscule au nom du réalisateur
// }

//Le tableau retourné a en clé la table, et en valeur, les colonnes de la table.
	// foreach ($actor_name as $key => $value) {
	//     $key['acteurs'].$value['nom'];
	//     $key['films'].$value['titre'];
	// }
	
	//inclure la vue
	include('Views/HomeView.php');