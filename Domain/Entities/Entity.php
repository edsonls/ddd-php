<?php


namespace Domain\Entities;


abstract class Entity
{
  public function __get($name)
  {
    return $this->$name;
  }

  public function __set($name, $value)
  {
    $this->$name = $value;
  }

  public function __isset($name)
  {
    return isset($this->$name);
  }
}