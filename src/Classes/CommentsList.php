<?php

namespace Classes;

class CommentsList
{
  public $comments;
  
  public function __construct(\SimpleXMLElement $xml)
  {
    $this->comments = $xml;
  }

  public function getCurrentComments(int $page_num): array
  {
    $comments_list = $this->getAllComments();
    $last_comment = PER_PAGE * $page_num;
    $first_comment = $last_comment - PER_PAGE;
    return array_slice($comments_list, $first_comment, PER_PAGE);
  }

  public function getAllComments()
  {
    $all_comments = (array)$this->comments;
    return $all_comments['comment'];
  }
}