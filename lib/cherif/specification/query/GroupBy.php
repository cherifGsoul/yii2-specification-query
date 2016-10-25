<?php

namespace cherif\specification\query;

class OrderBy implements QueryVisitorInterface
{
  private $groupBy;

  /**
   *
   */
  public function __construct($groupBy)
  {
    $this->groupBy = $groupBy;
  }


  /**
   *
   */
  public function visit(QueryInterface $query)
  {
    $query->addGroupBy($this->groupBy);
  }
}
