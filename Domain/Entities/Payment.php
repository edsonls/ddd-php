<?php


namespace Domain\Entities;


use DateTime;

abstract class Payment extends Entity
{
  public string $Number;
  public DateTime $Date;
  public DateTime $ExpireDate;
  public float $Total;
  public float $TotalPaid;
  public string $Address;
  public string $Document;
  public string $Owner;
  public string $Email;
}

class BoletoPayment extends Payment
{
  private string $BarcCode;
  private string $BoletoNumber;
}

class CredCardPayment extends Payment
{
  private string $CardHolderName;
  private string $CardNumber;
  private string $LastTransactionNumber;
}

class PayPalPayment extends Payment
{
  private string $TransactionCode;
}