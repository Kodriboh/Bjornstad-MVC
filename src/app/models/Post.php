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
}