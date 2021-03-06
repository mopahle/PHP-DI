<?php

namespace DI\Definition\Dumper;

use DI\Definition\Definition;
use DI\Definition\FactoryDefinition;

/**
 * Dumps factory definitions.
 *
 * @since 4.1
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
class FactoryDefinitionDumper implements DefinitionDumper
{
    /**
     * {@inheritdoc}
     */
    public function dump(Definition $definition)
    {
        if (! $definition instanceof FactoryDefinition) {
            throw new \InvalidArgumentException(sprintf(
                'This definition dumper is only compatible with FactoryDefinition objects, %s given',
                get_class($definition)
            ));
        }

        return 'Factory';
    }
}
