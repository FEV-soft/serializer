<?php

namespace FEV;

class SerializeJson extends AbstractSerialize
{
    public function SerializeToFormat($data)
    {
        return json_encode($data);
    }

    public function UnserializeFromEncodedFormat($json_str)
    {
        return json_decode($json_str);
    }

}