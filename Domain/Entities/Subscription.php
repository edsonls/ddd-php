<?php


namespace Domain\Entities;


use DateTime;

class Subscription extends Entity
{

  private DateTime $CreateDate;
  private DateTime $LastUpdateDate;
  private ?DateTime $ExpireDate;
  private bool $Active;
  /**
   * @var Payment[]
   */
  private array $Payments;
}