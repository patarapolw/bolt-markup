<?php
namespace Bolt\Extensions\Bolt\Markup;

use Bolt\Extension\SimpleExtension;
use Bolt\Extensions\Bolt\Markup\Field\MarkupField;

class MarkupExtension extends SimpleExtension
{
    public function registerFields()
    {
        return [
            new Markupield(),
        ];
    }

    protected function registerTwigPaths()
    {
        return [
            'templates' => ['position' => 'prepend', 'namespace' => 'bolt']
        ];
    }
}