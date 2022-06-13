<?php

namespace Admin\Hw2\WebApp;

class Post
{
    private string $Postname;

    public function __construct($name)
    {
        $this->Postname = $name;
    }


    public function CreatPost()
    {
        $Post = self::$Postname;
        $EmptyObject = compact("");
        $Posts = json_decode(file_get_contents("Storage/Post.json"), true);
        $Posts[$Post]["Title"] = $Post;
        $Posts[$Post]["Comments"] = $EmptyObject;
        $Posts[$Post]["LikeCount"] = 0;
        $Posts[$Post]["LikeUser"] = $EmptyObject;
        $Posts[$Post]["CreatedAt"] = date("Y/m/d");

        file_put_contents("Storage/Post.json", json_encode($Posts));
    }

    /**
     * @return string
     */
    public function getPostname(): string
    {
        return $this->Postname;
    }

    use Serializable;
}