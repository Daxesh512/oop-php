<?php

require_once '../database/database.php';
class Register{
public $db;

public function __construct(){
    $this->db = new Database();
}
public function addRegister($data,$file){
    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];


    $permited = array('jpg','jpeg','png','gif');
    $file_name = $file['photo']['name'];
    $file_size = $file['photo']['size'];
    $file_temp = $file['photo']['tmp'];


    $div = explode('.',$file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()),0,10) . '.' . $file_ext;
    $upload_image = 'upload/' . $unique_image;
}

}

?>