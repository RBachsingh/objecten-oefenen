<?php

class Car
{
    private $brand;
    private $model;
    private $build;

    function __construct(string $brand, string $model, int $build)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->build = $build;

    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getBuild(): int
    {
        return $this->build;
    }
}