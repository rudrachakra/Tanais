<?php

namespace Classes;

class ViewMaker
{

  public static function makeFormView(): void
  {
    echo 
    <<<FORM
      <form method="POST">
        <p>
          <b>Ваш никнэйм</b><br />
          <input type='text' name='comment[nickname]' />
        </p>
        <p>
          <b>Комментарий</b><br />
          <textarea name='comment[message]'></textarea>
        </p>
        <p>
          <input type='submit' value='Отправить' />
        </p>
      </form>
    FORM;
  }

  public static function makeListView(array $comments): void
  {
    foreach($comments as $comment){
      echo "<p><b>{$comment->nickname}</b></p>";
      echo "<p>{$comment->message}</p>";
    }
  }

  public static function makePaginationView(int $count): void 
  {
    $pages_nums = (int)($count / PER_PAGE);
    $pages_nums = ($count % PER_PAGE > 0) ? (int)($count / PER_PAGE) + 1 : $count / PER_PAGE; 

    for($i = 1; $i <= $pages_nums; $i++){
      echo "<a href='/?page={$i}'>{$i}</a> ";
    }

  }
}