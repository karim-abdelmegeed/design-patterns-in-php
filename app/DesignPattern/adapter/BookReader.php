<?php

interface BookReader
{
    public function open();

    public function nextPage();
}
