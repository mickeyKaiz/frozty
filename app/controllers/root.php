<?php

/*
** FROZTY MINI FRAMEWORK
** by DevFrost Developers!
** https://devfrost.mickfrost.xyz/frozty/mini
*/

//Package - Controller.php

class Root {
    function main() {
        frozty::render('root');
    }

    function about() {
        frozty::render('about');
    }

    function contact() {
        frozty::render('contact');
    }

}