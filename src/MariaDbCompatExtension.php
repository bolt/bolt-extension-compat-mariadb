<?php

namespace Bolt\Extension\Compat\MariaDb;

use Bolt\Extension\SimpleExtension;
use Silex\Application;

/**
 * MariaDB 10.2 compatibility extension.
 *
 * @author Gawain Lynch <gawain.lynch@gmail.com>
 */
class MariaDbCompatExtension extends SimpleExtension
{
    /**
     * {@inheritdoc}
     */
    protected function registerServices(Application $app)
    {
        $app['schema.comparator'] = $app::share(
            function ($app) {
                return new MariaDb(
                    $app['db'],
                    $app['schema.prefix'],
                    $app['logger.system']
                );
            }
        );
    }
}
