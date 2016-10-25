<?php

namespace spec\cherif\specification\query;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use yii\db\Query;

class RightJoinSpec extends ObjectBehavior
{
    function let()
    {
      $this->beConstructedWith('a','a.x = b.y',[]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('cherif\specification\query\RightJoin');
    }

    function it_implements_query_visitor_interface()
    {
      $this->shouldImplement('cherif\specification\query\QueryVisitorInterface');
    }

    function it_modifies_the_query_instance(Query $query)
    {
      $query->rightJoin('a','a.x = b.y',[])->shouldBeCalled();
      $this->visit($query);
    }
}
