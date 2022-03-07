<?php
class PostController
{
    public function getAllPost()
    {
        $posts = Post::getAll();
        return $posts;
    }
    public function getPost($id)
    {
        $post = Post::getPost($id);
        return $post;
    }
    public function detaille()
    {
        if (isset($_POST['id'])) {
            $result = Post::getPostDetaille($_POST['id']);
            return $result;
        }
    }
    public function addPost()
    {
        if (isset($_POST['ajouter'])) {
            // session_start();
            $data = array(
                'titre' => $_POST['titre'],
                'photo' => 'public/assets/img/' . $_POST['photo'],
                'description' => $_POST['description'],
                'id_utilisateur' => $_SESSION['id'],
            );

            $result = Post::addPost($data);
            if ($result == 'ok') {
                Redirect::to('./');
            } else {
                echo $result;
            }
        }
    }

    public function updatePost()
    {
        if (isset($_POST['update'])) {
            $data = array(
                'titre' => $_POST['titre'],
                'photo' => 'public/assets/img/' . $_POST['photo'],
                'description' => $_POST['description'],
                'id_p' => $_POST['id_p'],
            );

            $result = Post::UpdatePost($data);

            if ($result == 'ok') {

                Redirect::to('profail');
            } else {
                echo $result;
            }
        }
    }
}
