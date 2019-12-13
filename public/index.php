<?php

require 'vendor/autoload.php';

use Classes\Builder;

define("PER_PAGE", 5); //количество комментариев не страницу
define("XML_PATH", realpath("XML/comments.xml"));

$builder = new Builder();



