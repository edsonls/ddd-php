<?php


namespace Test\Entities;


use Domain\Entities\Student;
use PHPUnit\Framework\TestCase;

class StudentTests extends TestCase
{
  public function TestMethod1(): void
  {
    $student = new Student("Edson", 'Lima', 'asdasd', 'edson@oi.com');
  }
}