<?php

require_once './vendor/autoload.php';

use app\classes\Calculator;
use app\classes\Series;
use app\classes\WordCount;
use app\classes\AlphabetCount;
use app\classes\Blog;
use app\classes\Home;


if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $card = new Home();
        $cards = $card->allCards();
        $post = new Home();
        $posts = $post->allPosts();
        $info = new Home();
        $infos = $info->allInfos();
        include "pages/home.php";
    } elseif ($_GET['page'] == 'cardDetails')
    {
        $card = new Home();
        $cardDetails = $card->getCardDetails($_GET['id']);
        include 'pages/cardDetails.php';
    }elseif ($_GET['page'] == 'postDetails')
    {
        $post = new Home();
        $postDetails = $post->getPostDetails($_GET['id']);
        include 'pages/postDetails.php';
    }elseif ($_GET['page'] == 'moreDetails')
    {
        $info = new Home();
        $moreDetails = $info->getInfoDetails($_GET['id']);
        include 'pages/moreDetails.php';
    }
    elseif ($_GET['page'] == 'calculator')
    {
        include "pages/calculator.php";
    }elseif ($_GET['page'] == 'series')
    {
        include "pages/series.php";
    }elseif($_GET['page'] == 'alphabetcount')
    {
        include "pages/alphabetcount.php";
    }elseif($_GET['page'] == 'wordcount')
    {
        include "pages/wordcount.php";
    }
    elseif ($_GET['page'] == 'all-blogs')
    {
        $blog = new Blog();
        $blogs = $blog->allBlogs();
        include "pages/blogs.php";
    } elseif ($_GET['page'] == 'details')
    {
        $blog = new Blog();
        $details = $blog->getBlogDetails($_GET['id']);
        include 'pages/details.php';
    }
}elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();
    include "pages/calculator.php";
}elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->getSeries();
    include "pages/series.php";
}elseif (isset($_POST['alphabetcount_btn']))
{
    $alphabetcount = new AlphabetCount($_POST);
    $result = $alphabetcount->getAlphabetCount();
    include "pages/alphabetcount.php";
}elseif (isset($_POST['wordcount_btn']))
{
    $wordcount = new WordCount($_POST);
    $result = $wordcount->getWordCount();
    include "pages/wordcount.php";
}


