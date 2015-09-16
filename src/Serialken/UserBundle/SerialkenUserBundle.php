<?php

namespace Serialken\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SerialkenUserBundle extends Bundle
{
     /**
     * Returns the bundle parent name.
     *
     * @return string The Bundle parent name it overrides or null if no parent
     *
     * @api
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
