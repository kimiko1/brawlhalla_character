<?php

namespace Model;

use SQLite3;

class BDD
{
    private static string $cheminDeLaBDD = '../../data/database.db';

    static public function affiche($id): array
    {
        $bdd = new SQLite3(BDD::$cheminDeLaBDD);
        // Construction de la requête SQL
        $requete = "select * from character where id='$id';";

        // Envoi de la requête SQL
        $resultats = $bdd->query($requete);

        // Création d'un tableau vide
        $persos = array();

        // La requête a renvoyé des éléments ?
        if ($resultats) {
            // Récupération des lignes de la table
            while ($res = $resultats->fetchArray(1)) {
                // Chaque enregistrement vient enrichir le tableau.
                $persos[] = $res;
            }
        }

        return $persos;
    }
    static public function afficheAll(): array
    {
        $bdd = new SQLite3(BDD::$cheminDeLaBDD);
        // Construction de la requête SQL
        $requete = "select * from character;";

        // Envoi de la requête SQL
        $resultats = $bdd->query($requete);

        // Création d'un tableau vide
        $perso = array();

        // La requête a renvoyé des éléments ?
        if ($resultats) {
            // Récupération des lignes de la table
            while ($res = $resultats->fetchArray(1)) {
                // Chaque enregistrement vient enrichir le tableau.
                $perso[] = $res;
            }
        }

        return $perso;
    }

    static function usertype($email)
    {
        $conn = new SQLite3(BDD::$cheminDeLaBDD);
        $req = "select roles from user where email = '$email' ";
        $result = $conn->query($req);
        $role = $result->fetchArray();
        if ($result) {
            return $role[0];
        } else {

        }

    }

    static function passwordhash($email)
    {
        $db = new SQLite3('../../data/data.db');
        $testPassword = $db->query("SELECT password FROM user WHERE email = '$email'");
        $passHash = $testPassword->fetchArray();
        if ($testPassword) {
            return $passHash[0];
        } else {

        }
    }
    static public function changeCharacter($description, $weapons, $strength, $defence, $dexterity, $speed)
    {
        $conn = new SQLite3(BDD::$cheminDeLaBDD);
        @$req = $conn->query("INSERT INTO (description, weapons, strength, defence, dexterity, speed) value('$description','$weapons','$defence','$dexterity','$speed')from character WHERE ;");
        $product = array();
        $results = $req;
        if ($results) {

        }
        return $product;
    }
}
?>