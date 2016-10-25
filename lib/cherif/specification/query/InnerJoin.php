<?php

namespace cherif\specification\query;

class InnerJoin extends BaseJoin
{
  protected function getJoinType()
  {
    return 'innerJoin';
  }
}
