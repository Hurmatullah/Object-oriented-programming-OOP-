<?php


class User extends DB
{
    protected function getUser()
    {

        $sql = "Select * from users";
        $stmd = $this->connect()->prepare($sql);
        $stmd->execute();

        $result = $stmd->fetchAll();
        return $result;
    }
}
