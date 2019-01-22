<?php

/*
** FROZTY MINI FRAMEWORK
** by DevFrost Developers!
** https://devfrost.mickfrost.xyz/frozty/mini
*/

//Package - Users.php

class Users {
    function main(){
        echo 'Users Main';
    }
    function recent(){
        echo 'recent usersd';
    }
    function lists(){
        $model = frozty::getModel('usermodel');
        $model->getUsers();
        frozty::render('userlist');
    }

}