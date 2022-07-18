<?php


class User extends DB
{
    protected function getUser()
    {

        $sql = "Select * from mvc.users";
        $stmd = $this->connect()->prepare($sql);
        $stmd->execute();

        $result = $stmd->fetchAll();
        return $result;
    }
}
