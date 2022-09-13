<?php

class Student extends Person
{
    private $education;
    private $subjects;

    function __construct(string $name, int $age, string $education)
    {
        parent::__construct($name, $age);
        $this->education=$education;
        $this->subjects=[];
    }

    /**
     * @param array $subjects
     */
    public function setSubject(subject $subjects)
    {
        $this->subjects []= $subjects;
    }

    /**
     * @return array
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }

    /**
     * @return string
     */
    public function getEducation(): string
    {
        return $this->education;
    }
}
