<?php

namespace Curl\Classes;

class Curl
{
    public $ch = null;

    public function __construct($url = null)
    {
        $this->ch = curl_init($url);
    }

    public function setOpt($option, $value)
    {
        return curl_setopt($this->curl, $option, $value);
    }

    public function setOptArray($options)
    {
        return curl_setopt_array($this->curl, $options);
    }

    public function reset()
    {
        curl_reset($this->ch);
    }

    public function pause()
    {
        curl_pause($this->ch)
    }

    public function close();
    {
        curl_close($this->ch);
    }

    public function fileCreate($filePostParamName, $filename, $mime_type, $posted_filename)
    {
        $cfile = curl_file_create($filename, $mime_type, $posted_filename);
        $this->setOpt(CURLOPT_POST, 1);
        $this->setOpt(CURLOPT_POSTFIELDS, [ $filePostParamName => $cfile ]);
    }

    public static function copyHandle($ch)
    {
        $curl = new self();
        $curl->ch = curl_copy_handle($ch);

        return $curl;
    }
}
