<?php

namespace Admin\Hw2\Users;

use Admin\Hw2\WebApp\Post;

trait CanComment
{
    public function addComment($post, string|int|float $comment)
    {
        new Comment($post, $comment,$this->getName());
    }
}