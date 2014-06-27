<?php

namespace Cubalider\Bundle\MoneyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Cubalider\Bundle\MobileBundle\DependencyInjection\Compiler\DoctrineMappingPass;

/**
 * @author Nabel Hernandez <nabelhm@cubalider.com>
 */
class CubaliderMoneyBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new DoctrineMappingPass());
    }
}
