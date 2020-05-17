<?php


namespace Domain\Entities;


class Students extends Entity
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
}