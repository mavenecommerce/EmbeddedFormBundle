<?php

namespace Maven\Bundle\EmbeddedFormBundle\Twig;

/**
 * @package Maven\Bundle\EmbeddedFormBundle\Twig
 */
class ResourceExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('explodeLinks', [$this, 'explodeLinks']),
        ];
    }

    /**
     * @param string $links
     *
     * @return array
     */
    public function explodeLinks($links)
    {
        if (!$links) {
            return [];
        }

        $pattern = "/[,\n]+/";

        return preg_split($pattern, $links);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'resource_extension';
    }
}
