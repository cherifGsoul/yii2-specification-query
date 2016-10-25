<?php

namespace spec\cherif\specification\query;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SelectSpec extends ObjectBehavior
{
    function let()
    {
      $this->beConstructedWith('*');
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('cherif\specification\query\Select');
    }
}
