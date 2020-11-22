<?php 
/**
 * Post
 * 
 * Example for building models using Bjornstad-MVC
 */
class Post 
{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    /**
     * Retrieves all posts from the Database
     *
     * @return array[Object]
     */
    public function getPosts() 
    {
        $this->db->query('SELECT * FROM posts');

        return $this->db->resultSet();
    }
}