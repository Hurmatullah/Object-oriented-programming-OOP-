<?php


class UserController extends DB
{
    public function insertData()
    {

        $sql = "Insert into mvc.users (id , firstname, lastname, dob) values ('', 'Zainudin', 'Majidi', 2022-07-11)";
        $insert = $this->connect()->prepare($sql);
        $result1 =  $insert->execute();
    }
}
