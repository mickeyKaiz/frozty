<?php

class api {
    function main() {
        include_once "blast".DS."api".DS."product".DS."read.php";
    }

    function read() {
        include_once "blast".DS."api".DS."product".DS."read.php";
    }

    function create() {
        include_once "blast".DS."api".DS."product".DS."create.php";
    }

    function readone() {
        include_once "blast".DS."api".DS."product".DS."read_one.php";
    }

    function update() {
        include_once "blast".DS."api".DS."product".DS."update.php";
    }

    function delete() {
        include_once "blast".DS."api".DS."product".DS."delete.php";
    }

    function search() {
        include_once "blast".DS."api".DS."product".DS."search.php";
    }


}