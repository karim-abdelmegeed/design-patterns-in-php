<?php 

class Book implements BookReader
{

    public function open()
    {
        echo "open book\n";
    }

    public function nextPage()
    {
        echo "Next Page \n";
    }
}
