<?php

class Subject
{
    private $name;

    function __construct(string $name)
    {
        $this->name=$name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}