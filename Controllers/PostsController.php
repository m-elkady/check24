<?php

namespace Check24\Controllers;

use Check24\Models\Posts;
use Check24\Template;

class PostsController
{
    private $model;

    public function __construct()
    {
        $this->model = new Posts();
    }

    public function show()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            redirect('index.php');
        }

        $post = $this->model->find($id);
        $comments = $this->model->getComments($id);
        Template::view('posts/view', compact('post', 'comments'));
    }

    public function add()
    {
        Template::view('posts/add');
    }

    public function create()
    {
        $insertedId = $this->model->insert($_POST);
        if ($insertedId) {
            redirect('index.php?controller=PostsController&action=show&id=' . $insertedId);
        }

    }

    public function addComment()
    {
        $params = $_POST;
        $postId = $_GET['post_id'];
        $params['url'] = $params['url'] ?: '#';

        $insertedId = $this->model->addComment($params, $postId);
        if ($insertedId) {
            back();
        }

    }


    public function edit()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            redirect('index.php');
        }

        $post = $this->model->find($id);
        Template::view('posts/edit', compact('post'));
    }


}