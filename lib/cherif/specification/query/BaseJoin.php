<?php

namespace cherif\specification\query;
use yii\db\QueryInterface;

abstract class BaseJoin implements QueryVisitorInterface
{
    private $table;
    private $field;
    private $condition;

    public function __construct($table, $condition, $params = [])
    {
      $this->table = $table;
      $this->condition = $condition;
      $this->params = $params;
    }

    abstract protected function getJoinType();

    public function visit(QueryInterface $query)
    {
      $join = $this->getJoinType();
      $query->$join($this->table, $this->condition,$this->params);
    }
}
