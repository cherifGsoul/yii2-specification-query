<?php

namespace cherif\specification\query;

class RightJoin extends BaseJoin
{
  protected function getJoinType()
  {
    return 'rightJoin';
  }
}
