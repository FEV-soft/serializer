<?php

namespace FEV;

abstract class AbstractSerialize
{
    abstract function SerializeToFormat($data);

    abstract function UnserializeFromEncodedFormat($str);

}