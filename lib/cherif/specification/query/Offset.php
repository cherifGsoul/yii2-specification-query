<?php

namespace cherif\specification\query;
use yii\db\QueryInterface;

class Limit implements QueryVisitorInterface
{
  private $offset;

  /**
   *
   */
  public function __construct($offset)
  {
    $this->offset = $offset;
  }

  /**
   *
   */
  public function visit(QueryInterface $query)
  {
    $query->addGroupBy($this->offset);
  }
}
