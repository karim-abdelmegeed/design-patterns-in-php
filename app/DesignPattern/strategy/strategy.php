<?php

interface Logger
{
    public function log($data);
}

class LogToFile implements Logger
{
    public function log($data)
    {
       echo "log to file";
    }
}

class LogToDatabase implements Logger
{
    public function log($data)
    {
        echo "log to database";

    }
}

class App{
    public function __construct($data,Logger $logger)
    {
        return $logger->log($data);
    }
}


new App("data",new LogToFile());