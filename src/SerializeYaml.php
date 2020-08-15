<?php

namespace FEV;
use Symfony\Component\Yaml\Yaml;

class SerializeYaml extends AbstractSerialize
{
    public function SerializeToFormat($data)
    {
        if (is_array($data)) { return (Yaml::dump($data)); }

        if (is_object($data)) { return Yaml::dump($data, 2, 4, Yaml::DUMP_OBJECT); }

        return null;
    }

    public function UnserializeFromEncodedFormat($yaml_str)
    {

        if ( preg_match("/^!php\/object/",$yaml_str) )
        {
            return Yaml::parse($yaml_str, Yaml::PARSE_OBJECT);
         } else {
            return Yaml::parse($yaml_str);
         }
    }

}