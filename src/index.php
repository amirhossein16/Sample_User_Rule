<?php

require_once "../vendor/autoload.php";

/*************** Add User ***************/

$Golden = new \Admin\Hw2\Users\GoldenUser("Golden", "Golden@Golden.com", "Golden21");
$NewGolden = new \Admin\Hw2\Users\GoldenUser("NewGolden", "NewGolden@NewGolden.com", "NewGolden18");
$Normal = new \Admin\Hw2\Users\NormalUser("Normal", "Normal@Normal.com", "Normal24");
$Selver = new \Admin\Hw2\Users\SilverUser("Silver", "Silver@Silver.com", "Silver16");
//$Golden->addUser();
//$NewGolden->addUser();
//$Normal->addUser();
//$Selver->addUser();

/**************** Add Posts ***************/

$Post1 = new \Admin\Hw2\WebApp\Post("FirstPost");
$Post2 = new \Admin\Hw2\WebApp\Post("SecondPost");
//$Post1->CreatPost();
//$Post2->CreatPost();

/*************** Add Comment ***************/

$Golden->addComment($Post1->getPostname(), "My First New Comment :)");
$Golden->addComment($Post2->getPostname(), "SecondPost Comment from Golden ;(");
$Selver->addComment($Post1->getPostname(), "FirstPost Comment from Golden ;((((((");
$Selver->addComment($Post2->getPostname(), "SecondPost Comment from Golden ;))))))");
$Golden->addComment($Post1->getPostname(), "(()()))");
$Golden->addComment($Post2->getPostname(), "Last Comment");
$NewGolden->addComment($Post1->getPostname(),"NewGolden CCCCCCCCCCCCCC");
$NewGolden->addComment($Post2->getPostname(),"NewGolden 333");


/************** Add Like *****************/

$Selver->likePost($Post1->getPostname());
$Golden->likePost($Post2->getPostname());
$Golden->likePost($Post1->getPostname());
$NewGolden->likePost($Post1->getPostname());


/**************** Add Archive **************/

//$Golden->Archive($Post1->getPostname());
//$Golden->Archive($Post2->getPostname());


/**************** Log File **************/
$Post1->LogFile();

header("location: UI/Single.php");