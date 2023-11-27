<?php
include'../config.php';

class UserC {
    public function listeUser()
    {

        $db=config::getConnexion();
        try{
            $liste =$db->query('SELECT * FROM user');
            return $liste;

        } catch(Exception $e) { 
            die('Error: ' .$e->getMessage());

        }

    }


public function addUser($person)
{
    $db=config::getConnexion();
    try{
        $req = $db->prepare('
        INSERT INTO user VALUES (:id, :n, :p, :address,:pwd,:role)
        ');
        $req->execute([
            'id'=>$person->getId(),
            'n'=> $person->getNom(),
            'p'=> $person->getPrenom(),
            'address' =>$person->getAddress(),
            'pwd' =>$person->getPwd(),
            'role' =>$person->getRole()
        ]);
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
public function Signup($person)
{
    $db=config::getConnexion();
    try{
        $req = $db->prepare('
        INSERT INTO user VALUES (:id, :n, :p, :address,:pwd,:role)
        ');
        $req->execute([
            'id'=>$person->getId(),
            'n'=> $person->getNom(),
            'p'=> $person->getPrenom(),
            'address' =>$person->getAddress(),
            'pwd' =>$person->getPwd(),
            'role' =>$person->getRole()
        ]);
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}

public function deleteUser($id)
{
    $db = config::getConnexion();

    try {
         // Get the ID of the person object
        $req = $db->prepare('DELETE FROM user WHERE Id = ?'); // Use a parameterized query to avoid SQL injection
        $req->execute([$id]); // Bind the ID as a parameter and execute the query
        //echo "Person deleted successfully";
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
public function updateUser($user)
{
    $db = config::getConnexion();
    try {
        $id = $user->getId();
        $req = $db->prepare('
        UPDATE user SET   Nom=:n, Prenom=:p, Address=:a, pwd=:pw, Role=:b WHERE Id=:id
        ');
        $req->execute([
            'id' => $user->getId(),
            'n' => $user->getNom(),
            'p' => $user->getPrenom(),
            'a' => $user->getAddress() ,
            'pw' =>$user->getPwd(),
            'b' =>$user->getRole()
        ]);
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}










}