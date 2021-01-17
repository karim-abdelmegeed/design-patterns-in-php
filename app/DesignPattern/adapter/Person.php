<?php 

require "../vendor/autoload.php";

class Person
{
    public function read(BookReader $book)
    {
        $book->open();
        $book->nextPage();
    }
}
