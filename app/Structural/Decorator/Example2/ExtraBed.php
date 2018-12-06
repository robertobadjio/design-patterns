<?php

namespace DesignPatterns\Structural\Decorator\Example2;

/**
 * Class ExtraBed
 * @package DesignPatterns\Structural\Decorator\Example2
 */
class ExtraBed extends BookingDecorator
{
    private const PRICE = 30;

    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}