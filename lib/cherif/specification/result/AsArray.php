<?php
namespace cherif\specification\result;

/**
 *
 */
class AsArray extends ResultVisitor
{
  /**
   *
   */
  public function visit(ActiveQueryInterface $query)
  {
    $query->asArray();
  }
  
}
