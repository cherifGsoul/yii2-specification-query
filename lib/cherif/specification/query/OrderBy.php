<?php

namespace cherif\specification\query;

use yii\db\QueryInterface;

class OrderBy implements QueryVisitorInterface
{
  private $order;

  /**
   *
   */
  public function __construct($order)
  {
    $this->order = $order;
  }


  /**
   *
   */
  public function visit(QueryInterface $query)
  {
    $query->addOrderBy($this->order);
  }
}
