<?php

namespace cherif\specification\query;
use yii\db\QueryInterface;

class LeftJoin extends BaseJoin
{
  protected function getJoinType()
  {
    return 'leftJoin';
  }
}
