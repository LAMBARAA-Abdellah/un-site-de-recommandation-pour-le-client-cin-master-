<?php
class Comment
{

    static public function getPostDetaille($id)
    {
        $id_p = $id;
        $stmt = DB::connect()->prepare('SELECT * FROM poste,utilisateur where poste.id_p=:id and utilisateur.id_utilisateur=poste.id_utilisateur order by published_at DESC ');
        $stmt->execute(["id" => $id_p]);
        $post = $stmt->fetch(PDO::FETCH_OBJ);

        return $post;
    }
    static public function getPostComment($id)
    {
        $id_p = $id;
        $stmt = DB::connect()->prepare('SELECT * FROM poste,commantaire,utilisateur where poste.id_p=:id and commantaire.id_p=:id and commantaire.id_utilisateur=utilisateur.id_utilisateur order by published_at DESC ');
        $stmt->execute(["id" => $id_p]);
        $comment = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $comment;
    }
    static public function addComment($data)
    {
        // var_dump($data);
        $stmt = DB::connect()->prepare('insert into commantaire(message,id_p,id_utilisateur) values(:message,:id_p,:id_u)');
        $result = $stmt->execute(["message" => $data['message'], "id_p" => $data['id_p'], "id_u" => $data['id_u']]);
        if ($result) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->closeCursor();
    }
}
