<?php
class CommentController
{

    public function getComment()
    {
        if (isset($_POST['id'])) {
            $result = Comment::getPostComment($_POST['id']);
            return $result;
        }
    }
    public function addComment()
    {
        if (isset($_POST['envoyer'])) {
            $data = array(
                'id_p' => $_POST['id_p'],
                'id_u' => $_POST['id_u'],
                'message' => $_POST['commantaire'],
            );
            var_dump($data);
            $result = Comment::addComment($data);
            if ($result == 'ok') {
                Redirect::to('./');
            } else {
                echo $result;
            }
        }
    }
}
