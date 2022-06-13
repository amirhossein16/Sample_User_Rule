<?php

namespace Admin\Hw2\Users;

use Admin\Hw2\WebApp\Post;

trait CanArchive
{
    private static int $number = 1;

    public function Archive($post)
    {
        $id = self::$number++;
        $Comments = json_decode(file_get_contents(parent::getName() . ".json"), true);
        $Comments["$id"] = $post;
        file_put_contents(parent::getName() . ".json", json_encode($Comments));
    }
}
