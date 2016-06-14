<?php

namespace Maven\Bundle\EmbeddedFormBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @package Maven\Bundle\EmbeddedFormBundle
 */
class MavenEmbeddedFormBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'OroEmbeddedFormBundle';
    }
}
