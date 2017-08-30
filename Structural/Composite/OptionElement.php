<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Class OptionElement
 * @package DesignPatterns\Structural\Composite
 */
class OptionElement implements RenderInterface
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $text;

    /**
     * OptionElement constructor.
     * @param string $value
     * @param string $text
     */
    public function __construct($value, $text)
    {
        $this->value = $value;
        $this->text = $text;
    }

    public function render(): string
    {
        return '<option value="' . $this->value . '">' . $this->text . '</option>';
    }
}
