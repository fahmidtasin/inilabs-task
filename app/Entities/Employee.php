<?php

namespace App\Entities;

class Employee
{
    private $name;
    private $salary;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): void
    {
        if ($salary < 0) {
            throw new \InvalidArgumentException("Salary cannot be negative.");
        }
        $this->salary = $salary;
    }

    public function increaseSalary(float $amount): void
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("Increase amount cannot be negative.");
        }
        $this->setSalary($this->salary + $amount);
    }
}
