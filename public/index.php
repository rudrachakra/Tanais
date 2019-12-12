<?php

use Classes\CommentsList;
use Classes\Request;

require 'vendor/autoload.php';

define("PER_PAGE", 5); //количество комментариев не страницу

$comments = new CommentsList(
  simplexml_load_file(realpath("XML/comments.xml"))
);

print_r(
  $comments->getCurrentComments(2)
);