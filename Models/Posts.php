<?php

namespace Check24\Models;

use Check24\Database;

class Posts extends Database
{
    /**
     * @param int $offset
     * @return array
     */
    public function getLatestThreePosts($offset = 0)
    {
        return $this->query("SELECT * FROM posts order by date desc limit {$offset}, 3")->fetchAll();
    }

    /**
     * @param null $id
     * @return array
     */
    public function find($id = null)
    {
        return $this->query('SELECT * FROM posts where id = ?', $id)->fetchArray();
    }

    /**
     * @param $params
     * @return mixed
     */
    public function insert($params)
    {
        $params['user_id'] = $_SESSION['user']['id'];
        $sqlParams = array_values($params);
        $query = "insert into posts (title, content, date, user_id) values (?,?,?,?)";

        if ($this->query($query, ...$sqlParams)->affectedRows()) {
            return $this->connection->insert_id;
        }
    }

    /**
     * @param $postId
     * @return array
     */
    public function getComments($postId)
    {
        return $this->query("SELECT * FROM comments where post_id = ?", $postId)->fetchAll();
    }


    /**
     * @param $params
     * @param $postId
     * @return array
     */
    public function addComment($params, $postId)
    {
        $params['date'] = date('Y-m-d H:i');
        $params['ip'] = $_SERVER['REMOTE_ADDR'];
        $params['post_id'] = $postId;
        $sqlParams = array_values($params);
        $query = "insert into comments(name, email, url , comment,date, ip, post_id) values(?,?,?,?,?,?,?)";
        if ($this->query($query, ...$sqlParams)->affectedRows()) {
            return $this->connection->insert_id;
        }
    }


}