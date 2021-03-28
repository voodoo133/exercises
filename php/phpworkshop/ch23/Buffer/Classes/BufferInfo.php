<?php  

namespace Buffer\Classes;

class BufferInfo
{
    public function getStatus($fullStatus = false)
    {
        return ob_get_status($fullStatus);
    }

    public function getLevel()
    {
        return ob_get_level();
    }

    public function getLength()
    {
        return ob_get_length();
    }

    public function getHandlers()
    {
        return ob_list_handlers();
    }
}

?>