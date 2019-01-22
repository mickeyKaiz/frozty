<?php

/*
** FROZTY MINI FRAMEWORK
** by DevFrost Developers!
** https://devfrost.mickfrost.xyz/frozty/mini
*/

//Package - Math.php

class math {
    function main(){
        echo 'Math Root';
    }
    function add(){
        $node = FROZTY::getInstance('node');
        $a=$b=0;
        if ($node->get('gamma') != null)
            $a = $node->get('gamma');

        if ($node->get('delta') != null) 
            $b = $node->get('delta');

        $c = $a + $b;

        $basket = frozty::getInstance('basket');
        $basket->set('a',$a);
        $basket->set('b',$b);
        $basket->set('c',$c);
        frozty::render("add");
    }
    function substract(){
        echo 'substract';
    }
    function multiply(){
        echo 'multiply';
    }

}