Simple library for serialize (encode, decode) JSON, YAML, XML data.
===============

Installation
------------

For using this library just execute the following command

```bash
$ composer create-project greeflas/default-project project-name
```

> NOTE: You can add `--no-dev` right after `create-project` flag if you don't want to install dev dependencies to your project

Usage
-----

For usage this library you need use 2 clases:

`SerializeJson` for JSON data

`SerializeYAML` for YAML data

both classes have 2 general methods:

`SerializeToFormat` and `UnserializeFromEncodedFormat` 

XML not implement yet.

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