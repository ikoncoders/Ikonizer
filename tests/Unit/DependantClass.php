<?php 
namespace Ikoncoders\Tests\Unit;

use Ikoncoders\Tests\Unit\DependencyClass;

class DependantClass
{
    public function __construct(private DependencyClass $dependency)
    {
    }

    public function getDependency(): DependencyClass
    {
        return $this->dependency;
    }
}
