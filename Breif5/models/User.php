<?php
class User
{
    static public function login($data)
    {
        $psseudo = $data['login'];
        try {
            $stmt = DB::connect()->prepare('SELECT * FROM utilisateur where psseudo=:psseudo');
            $stmt->execute(["psseudo" => $psseudo]);
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    static public function createUser($data)
    {
        // var_dump($data);
        $stmt = DB::connect()->prepare('insert into utilisateur(psseudo,email,pass) values(:login,:email,:pass)');
        $result = $stmt->execute(["login" => $data['login'], "email" => $data['email'], "pass" => $data['password']]);
        if ($result) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->closeCursor();
    }
}
