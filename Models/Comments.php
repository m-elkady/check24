<?php

namespace Check24\Models;

use Check24\Database;

class Comments extends Database
{

    public function getTotalCommentsByPostId($postId = null)
    {
        return $this->query('SELECT * FROM comments where post_id = ?', $postId)->numRows();
    }

}