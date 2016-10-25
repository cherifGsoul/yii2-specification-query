<?php

namespace cherif\specification\query;
use yii\db\QueryInterface;

class Limit implements QueryVisitorInterface
{
  private $limit;

  /**
   *
   */
  public function __construct($limit)
  {
    $this->limit = $limit;
  }


  /**
   *
   */
  public function visit(QueryInterface $query)
  {
    $query->addGroupBy($this->limit);
  }
}
