<?php

namespace Blog\Session;

class Session
{
    public function __construct(){}

    public function SesStart()
    {
        session_start();
    }

    public function SesID()
    {
        return session_id();
    }

    public function Destroy()
    {
        session_destroy();
    }
}