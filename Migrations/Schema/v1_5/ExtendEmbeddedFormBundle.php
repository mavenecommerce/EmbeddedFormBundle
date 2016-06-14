<?php

namespace Maven\Bundle\EmbeddedFormBundle\Migrations\Schema\v1_5;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\EntityBundle\EntityConfig\DatagridScope;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

/**
 * @package Maven\Bundle\EmbeddedFormBundle\Migrations\Schema\v1_5
 */
class ExtendEmbeddedFormBundle implements Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $table = $schema->getTable('oro_embedded_form');
        $table->addColumn(
            'external_css',
            'text',
            [
                'oro_options' => [
                    'extend'   => ['owner' => ExtendScope::OWNER_CUSTOM],
                    'datagrid' => ['is_visible' => DatagridScope::IS_VISIBLE_FALSE],
                    'merge'    => ['display' => true],
                ],
            ]
        );
        $table->addColumn(
            'external_js',
            'text',
            [
                'oro_options' => [
                    'extend'   => ['owner' => ExtendScope::OWNER_CUSTOM],
                    'datagrid' => ['is_visible' => DatagridScope::IS_VISIBLE_FALSE],
                    'merge'    => ['display' => true],
                ],
            ]
        );
    }
}
