<?php

namespace Classes;

class Requests
{
  public function getPageNum(): int
  {
    return ($_GET == [] || empty($_GET['page'])) ? 1 : (int)$_GET['page'];
  }
  public function getParsedBody(): ?array
  {
    return $_POST ?: null;
  } 
}