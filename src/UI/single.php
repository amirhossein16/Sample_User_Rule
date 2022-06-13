<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HW-2</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
<div class="page-baner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>عنوان صفحه</span>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="page-content single_content">
            <div class="col-md-3">
                <div class="search_box">
                    <form>
                        <input type="text" name="" placeholder="متن را وارد کنید ..">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="side_bx">
                    <span class="title">آخرین مطالب</span>
                    <ul>
                        <li><a href="#">چاپگرها و متون بلکه روزنامه</a></li>
                        <li><a href="#">فرهنگ پیشرو در زبان فارسی ایجاد کرد</a></li>
                        <li><a href="#">طراحی اساسا مورد استفاده قرار گیرد</a></li>
                        <li><a href="#">سطرآنچنان که لازم است</a></li>
                        <li><a href="#">نرم افزارها شناخت بیشتری را برای طراحا</a></li>
                    </ul>
                </div>
                <div class="side_bx">
                    <span class="title">به چه مطالبی علاقمندید</span>
                    <ul>
                        <li><a href="#">وردپرس</a></li>
                        <li><a href="#">اندروید</a></li>
                        <li><a href="#">سیستم عامل</a></li>
                        <li><a href="#">دانلود</a></li>
                        <li><a href="#">موبایل</a></li>
                    </ul>
                </div>
            </div>

            <?php
            $users = json_decode(file_get_contents("../Storage/Post.json"), true);
            foreach ($users

                     as $item) {
                ?>
                <div class="col-md-9">
                    <div class="content_bx">
                        <img src="img/custom_search-min.png" alt="">
                        <div class="meta">
                            <span><i class="fa fa-clock-o"></i>  <?php echo $item["CreatedAt"] ?></span>
                            <span><i class="fa fa-comment-o"></i> <?php
                                $cou = [];
                                foreach ($item["Comments"] as $items) {
                                    foreach ($items as $i) {
                                        $cou[] = $i;
                                    }
                                }
                                echo count($cou) ?> نظر </span>
                            <span><i class="fa fa-gratipay" aria-hidden="true"></i> <a
                                        href="#"><?php echo $item["LikeCount"] ?> لایک </a></span>
                        </div>
                        <h1><?php echo $item["Title"] ?></h1>
                        <hr>
                        <div class="p_text">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی مورد نیاز و کاربردهای</p>
                        </div>
                        <div class="post_tags">
                            <?php
                            $arr[] = $item["Comments"];
                            ksort($arr);
                            foreach ($item["Comments"] as $Key => $comment) {
                                ?>
                                <span><?php
                                    preg_match("/([A-Z])\w+/", $Key, $match);
                                    echo $match[0] ?> : </span>
                                <a href="#"><?php echo $comment["Comment"] ?></a>
                                <br>
                                <?php
                            } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<div class="footer_box">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="col-md-4">
                    <div class="footer-menu">
                        <span class="title">دسترسی سریع</span>
                        <ul>
                            <li><a href="#">خانه</a></li>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">حریم خصوصی</a></li>
                            <li><a href="#">مجلات</a></li>
                            <li><a href="#">بلاگ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu">
                        <span class="title">دسنه بندی موضوعی</span>
                        <ul>
                            <li><a href="#">وردپرس</a></li>
                            <li><a href="#">اندروید</a></li>
                            <li><a href="#">سیستم عامل</a></li>
                            <li><a href="#">دانلود</a></li>
                            <li><a href="#">موبایل</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu">
                        <span class="title">دسترسی سریع</span>
                        <ul>
                            <li><a href="#">خانه</a></li>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">حریم خصوصی</a></li>
                            <li><a href="#">مجلات</a></li>
                            <li><a href="#">بلاگ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="desc_footer footer-menu">
                    <span class="title">دسترسی سریع</span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                        زیادیلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                        است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                    </p>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="copy-r">
                        <span>
                            &copy; حقوق انتشار برای امیرحسین منصورسمائی محفوط است
                        </span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>