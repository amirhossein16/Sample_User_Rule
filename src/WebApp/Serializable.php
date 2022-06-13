<?php

namespace Admin\Hw2\WebApp;

trait Serializable
{
    public function LogFile()
    {
        $Details = json_decode(file_get_contents("Storage/Post.json"), true);
        foreach ($Details as $detail) {
            $comment = count($detail["Comments"]);
            var_dump($comment);
            $log =
                "POST Name: " . $detail["Title"] . ' - ' . PHP_EOL .
                "POST Comments: " . $comment . ' - ' . PHP_EOL .
                "POST LikeCount: " . $detail["LikeCount"] . ' - ' . PHP_EOL
                . date("F j, Y, g:i a") . PHP_EOL .
                "-------------------------" . PHP_EOL;
            file_put_contents('./log_' . date("j.n.Y") . '.log', $log, FILE_APPEND);
        }
    }
}