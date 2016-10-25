<?php

namespace cherif\specification\query;

use yii\db\QueryInterface;

class Select implements QueryVisitorInterface
{
  private $select;

  /**
   *
   */
  public function __construct($select)
  {
    $this->select = $select;
  }


  /**
   *
   */
  public function visit(QueryInterface $query)
  {
    $query->addSelect($this->select);
  }
}
