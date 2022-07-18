<?php

class UserView extends User
{

    public function showUser()
    {
        $getData = $this->getUser();
        foreach ($getData as $res) {

            echo $res['firstname'] . "<br>";
        }
    }
}
