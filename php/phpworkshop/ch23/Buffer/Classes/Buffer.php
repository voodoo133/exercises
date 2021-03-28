<?php 

namespace Buffer\Classes;

class Buffer
{
    public function __construct(callable $callback = null, $chunk_size = 0, $flags = PHP_OUTPUT_HANDLER_STDFLAGS)
    {
        ob_start($callback, $chunk_size, $flags);
    }

    public function __deconstruct()
    {
        ob_end_clean();
    }

    public function get()
    {
        return ob_get_contents();
    }

    public function getAndClean()
    {
        return ob_get_clean();
    }

    public function flush()
    {
        ob_flush();
    }

    public function getAndFlush()
    {
        return ob_get_flush();
    }

    public function endAndFlush()
    {
        ob_end_flush();
    }

    public function endAndClean()
    {
        ob_end_clean();
    }

    public function clean()
    {
        ob_clean();
    }
}

?>