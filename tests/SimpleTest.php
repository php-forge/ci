<?php

declare(strict_types=1);

namespace Forge\Ci\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor - error phpunit.
 */
final class SimpleTest extends TestCase
{
    public function testSimple(): void
    {
        $this->assertTrue(true);
    }
}
