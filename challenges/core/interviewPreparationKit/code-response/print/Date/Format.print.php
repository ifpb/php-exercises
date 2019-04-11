<?php
require __DIR__ . '/../../vendor/autoload.php';

use \Date\Format;

// Format Date

// long format of 22/04/1983
var_dump(Format::long("22/04/1983"));
var_dump("22 de abril de 1983");
