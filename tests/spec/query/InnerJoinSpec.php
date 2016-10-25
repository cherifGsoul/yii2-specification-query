<?php

namespace spec\cherif\specification\query;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use yii\db\Query;

class InnerJoinSpec extends ObjectBehavior
{
    function let()
    {
      $this->beConstructedWith('a','a.x = b.y',[]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('cherif\specification\query\InnerJoin');
    }

    function it_implements_query_visitor_interface()
    {
      $this->shouldImplement('cherif\specification\query\QueryVisitorInterface');
    }

    function it_modifies_the_query_instance(Query $query)
    {
      $query->innerJoin('a','a.x = b.y',[])->shouldBeCalled();
      $this->visit($query);
    }
}
