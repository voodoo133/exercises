<?php 

namespace Buffer\Classes;

class BufferSettings
{
    public function implicitFlush($flag = 1)
    {
        ob_implicit_flush($flag);
    }

    public function getGZHandler()
    {
        return "ob_gzhandler";
    }
}

?>