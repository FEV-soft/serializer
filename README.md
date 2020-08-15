Simple library for serialize (encode, decode) JSON, YAML, XML data.
===============

Installation
------------

For using this library just execute the following command

```bash
$ composer require fev/serializer
```
Usage
-----

For usage this library you need use 2 clases:

`SerializeJson` for JSON data

`SerializeYAML` for YAML data

both classes have 2 general methods:

`SerializeToFormat` and `UnserializeFromEncodedFormat`

`SerializeToFormat($data)` - encode you data.

`UnserializeFromEncodedFormat($str)` - decode you data.  

XML not implement yet.

Extension
---------

For extended this library create new class from class `AbstractSerialize`
and define 2 general methods `SerializeToFormat` and `UnserializeFromEncodedFormat` for you type of data.

Tests
-----

You can run tests with next command

`$ php test-json.php` for JSON data.

`$ php test-yaml.php` for YAML data.

`$ php test-xml.php` for XML data (Not implement yet).

License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2020, FEV