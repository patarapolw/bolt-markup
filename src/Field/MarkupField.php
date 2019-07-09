<?php
// File is in src/Field/ColourPickField.php
namespace Bundle\Site\Field;

use Bolt\Storage\Field\Type\TextAreaType;
use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;

class MarkupField extends TextAreaType
{
    public function getName()
    {
        return 'markdown';
    }

    public function getTemplate()
    {
        return '@bolt/_markup.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return ['default' => ''];
    }
}