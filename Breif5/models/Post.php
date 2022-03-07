<?php
class Post
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM poste,utilisateur where poste.id_utilisateur=utilisateur.id_utilisateur order by published_at DESC ');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    static public function getPost($id)
    {
        $id_u = $id;
        $stmt = DB::connect()->prepare('SELECT * FROM poste,utilisateur where poste.id_utilisateur=:id and utilisateur.id_utilisateur=:id order by published_at DESC ');
        $stmt->execute(["id" => $id_u]);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $post;
    }
    static public function getPostDetaille($id)
    {
        $id_p = $id;
        $stmt = DB::connect()->prepare('SELECT * FROM poste,utilisateur where poste.id_p=:id and utilisateur.id_utilisateur=poste.id_utilisateur order by published_at DESC ');
        $stmt->execute(["id" => $id_p]);
        $post = $stmt->fetch(PDO::FETCH_OBJ);

        return $post;
    }
    static public function addPost($data)
    {
        var_dump($data);

        $stmt = DB::connect()->prepare('insert into poste(titre,description,photo,id_utilisateur) values(:titre,:description,:photo,:id_utilisateur)');
        $result = $stmt->execute(["titre" => $data['titre'], "description" => $data['description'], "photo" => $data['photo'], "id_utilisateur" => $data['id_utilisateur']]);
        if ($result) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->closeCursor();
    }

    static public function updatePost($data)
    {
        var_dump($data);

        $stmt = DB::connect()->prepare('UPDATE poste set titre=:titre ,description=:description ,photo=:photo where id_p=:id_p ');
        $result = $stmt->execute(["titre" => $data['titre'], "description" => $data['description'], "photo" => $data['photo'], "id_p" => $data['id_p']]);
        if ($result) {

            return 'ok';
        } else {
            return 'error';
        }
    }
}
