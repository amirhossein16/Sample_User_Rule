<?php

namespace Admin\Hw2\Users;

trait CanLike
{
    public function likePost($PostName)
    {
        $likeCount = json_decode(file_get_contents("Storage/Post.json"), true);
        if ($likeCount[$PostName]["LikeUser"][parent::getName()] != true) {
            $likeCount[$PostName]["LikeCount"] += 1;
            $likeCount[$PostName]["LikeUser"][parent::getName()] = true;
        }
        file_put_contents("Storage/Post.json", json_encode($likeCount));
    }
}


