<?php
namespace cherif\specification;

interface SpecificationQuery
{
  public function match($specification,$resultVisitor);
  public function matchOne($specification,$resultVisitor);
}
