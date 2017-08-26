<?php

namespace Bolt\Extension\Compat\MariaDb;

use Bolt\Storage\Database\Schema\Comparison\IgnoredChange;
use Bolt\Storage\Database\Schema\Comparison\MySql;

/**
 * Comparison handling for MariaDB 10.2 only.
 *
 * @author Gawain Lynch <gawain.lynch@gmail.com>
 */
class MariaDb extends MySql
{
    /**
     * {@inheritdoc}
     */
    protected function setIgnoredChanges()
    {
        parent::setIgnoredChanges();

        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'default', 'date', 'date');
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'default', 'datetime', 'datetime');
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'default', 'decimal', 'decimal');
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'default', 'float', 'float');
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'default', 'integer', 'integer');
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'default', 'json', 'json');
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'default', 'string', 'string');
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'default', 'text', 'text');
    }
}
