<?php

namespace Admin\Hw2\Users;

use Admin\Hw2\WebApp\Post;
use JetBrains\PhpStorm\NoReturn;

class Comment
{
    private static int $number = 1;

    #[NoReturn] public function __construct($post, $comment, $User)
    {
        echo $post . PHP_EOL;
        $id = self::$number++;
        $Comment = $comment;
        $USERComment = compact("Comment");
        $Comments = json_decode(file_get_contents("Storage/Post.json"), true);
        $Comments[$post]["Comments"][$id . "_" . $User] = $USERComment;
        file_put_contents("Storage/Post.json", json_encode($Comments));
    }
}