<?php

namespace Chorume\Solid;

class MessageDataFile implements MessageData
{
    public function read($lang)
    {
        return file_get_contents("{$_SERVER['PWD']}/src/messages/{$lang}.txt");
    }
}
