<?php
/**
 * Created by PhpStorm.
 * User: sun rise
 * Date: 11/26/2016
 * Time: 11:39 AM
 */

class User_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    
    public function getRole($email)
    {
        $row=$this->db->query('SELECT * from users WHERE email='.$email)->result_array();
        $role=$row[0]['role'];
        return $role;
    }
}