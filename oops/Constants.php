<?php

class Goodbye
{
    public const LEAVING_MESSAGE = "Thank you for visiting My Website";
    public function byebye()
    {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();
