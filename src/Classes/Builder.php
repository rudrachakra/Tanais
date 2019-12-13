<?php

namespace Classes;
use Classes\ViewMaker;
use Classes\CommentsList;
use Classes\Requests;

class Builder
{

  public function __construct()
  {

    $requests = new Requests;
    $all_comments = new CommentsList();
    
    if($requests->getParsedBody() !== null){
      $all_comments->addComment($requests->getParsedBody()['comment']);
    }

    $current_comments = $all_comments->getCurrentComments($requests->getPageNum());

    ViewMaker::makeFormView(); // публикация формы
    ViewMaker::makeListView($current_comments); // публикация комментариев
    ViewMaker::makePaginationView(count($all_comments->getAllComments())); // вывод пагинации
    
  }
}

