<?php

namespace Ludal\QueryBuilder\Tests;

use Error;
use Ludal\QueryBuilder\Clause;
use PHPUnit\Framework\TestCase;

final class ClauseTest extends TestCase
{
    public function testClauseCannotBeInstantiated()
    {
        $this->expectException(Error::class);
        new Clause();
    }
}
