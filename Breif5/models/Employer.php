<?php

class Employer
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM patient');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
        $stmt = null;
    }
    static public function getEmployer($data)
    {
        $id = $data['id'];
        try {
            $stmt = DB::connect()->prepare('select* from patient where id=:id');
            $stmt->execute(["id" => $data['id']]);
            $employer = $stmt->fetch(PDO::FETCH_OBJ);
            return $employer;
        } catch (PDOException $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    static public function add($data)
    {
        // var_dump($data);
        $stmt = DB::connect()->prepare('insert into patient(nom,prenom) values(:nom,:prenom)');
        $result = $stmt->execute(["nom" => $data['nom'], "prenom" => $data['prenom']]);
        if ($result) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->closeCursor();
    }
    static public function update($data)
    {
        // var_dump($data);
        $stmt = DB::connect()->prepare('UPDATE  patient set nom=:nom  ,prenom=:prenom WHERE id=:id ');
        $result = $stmt->execute(["id" => $data['id'], "nom" => $data['nom'], "prenom" => $data['prenom']]);
        if ($result) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->closeCursor();
    }
    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $stmt = DB::connect()->prepare('delete from patient where id=:id');
            $result = $stmt->execute(["id" => $data['id']]);
            // $employer = $stmt->fetch(PDO::FETCH_OBJ);
            // return $employer;
            if ($result) {
                return 'ok';
            }
        } catch (PDOException $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}
