<?php
namespace cherif\specification\query;

use yii\db\QueryInterface;

interface QueryVisitorInterface
{
  public function visit(QueryInterface $query);
}
