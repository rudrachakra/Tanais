<?php

namespace Classes;

class CommentsList
{
  public $comments;
  public $XMLpath;
  
  public function __construct()
  {
    $this->comments = $this->getXML();
    $this->XMLpath = realpath("XML/comments.xml");
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

  public function addComment(array $comment): void
  {
    $xml = $this->comments;
    $new_comment = $xml->addChild('comment');
    $new_comment->addChild('nickname', $comment['nickname']);
    $new_comment->addChild('message', $comment['message']);
    file_put_contents(XML_PATH, $xml->asXML());
  }

  public function getXML()
  {
    return simplexml_load_file(XML_PATH);
  }
}