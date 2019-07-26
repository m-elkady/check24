<?php

namespace Check24\Controllers;

use Check24\Models\Posts;
use Check24\Template;

class HomeController
{

    public function index()
    {
        $page = $_GET['page'] ?? 1;
        $offset = $page - 1;
        $latestPosts = (new Posts())->getLatestThreePosts($offset);
        Template::view('home/index', compact('latestPosts'));
    }


}