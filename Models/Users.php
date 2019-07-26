<?php

namespace Check24\Models;

use Check24\Database;

class Users extends Database
{

    public function getFullName($id = null)
    {
        return $this->query('SELECT * FROM users where id = ?', $id)->fetchArray()['full_name'];
    }

}