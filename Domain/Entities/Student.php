<?php


namespace Domain\Entities;


class Student extends Entity
{
  private string $FirstName;
  private string $LastName;
  private string $Document;
  private string $Email;
  private string $Address;
  /**
   * @var Subscription[]
   */
  private array $Subscriptions;

  /**
   * Students constructor.
   * @param string $FirstName
   * @param string $LastName
   * @param string $Document
   * @param string $Email
   */
  public function __construct(string $FirstName, string $LastName, string $Document, string $Email)
  {
    $this->FirstName = $FirstName;
    $this->LastName = $LastName;
    $this->Document = $Document;
    $this->Email = $Email;
  }
}