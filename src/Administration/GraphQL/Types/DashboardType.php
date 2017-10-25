<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-10-23 19:56
 */
namespace Notadd\Foundation\Administration\GraphQL\Types;

use Notadd\Foundation\GraphQL\Types\Type;

/**
 * Class DashboardType.
 */
class DashboardType extends Type
{
    /**
     * @return array
     */
    public function fields()
    {
        // TODO: Implement fields() method.
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'dashboard';
    }
}
