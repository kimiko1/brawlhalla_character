<?php

namespace Model;

use SQLite3;

class BDD
{
    private static string $cheminDeLaBDD = '../../data/data.db';

    static public function affiche($id)
    {
        $id = $_GET['id'];
        $conn = new SQLite3(BDD::$cheminDeLaBDD);
        $req = $conn->query("SELECT * from character WHERE idC=$id;");
        $product = array();
        $results = $req;
        if ($results) {
            while ($row = $results->fetchArray()) {
                array_push($product, new Character($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]));
            }
        }
        return $product;
    }
    static public function afficheAll()
    {
        $conn = new SQLite3(BDD::$cheminDeLaBDD);
        @$req = $conn->query("SELECT * from character;");
        $product = array();
        $results = $req;
        if ($results) {
            while ($row = $results->fetchArray()) {
                array_push($product, new Character($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]));
            }
        }
        return $product;
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