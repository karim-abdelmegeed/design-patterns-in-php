<?php


class Adapter implements BookReader
{

    private $kindle;

    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        return  $this->kindle->turnPage();
    }
    public function nextPage()
    {
        return $this->kindle->pressNextBtn();
    }
}
