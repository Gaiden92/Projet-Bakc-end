<?php

class CommentUtils {

    public static function createComment()
    {
        $comment=array();
        $comment['membre_id']=$_POST['membre_id'];
        $comment['motcles']=$_POST["comment"];

        return $comment;
    }
}
?>