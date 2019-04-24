<?php

class BankAccount
{
    /**
     * @var int
     */
    private $number;
    /**
     * @var float
     */
    private $balance;
    /**
     * BankAccount constructor.
     *
     * @param int $number
     * @param float $balance
     */
    public function __construct(int $number, float $balance = 0)
    {
        $this->setNumber($number);
        $this->balance = 0;
    }
    /**
     * @param float $amount
     * @throws Exception
     */
    public function increase(float $amount)
    {
        if ($amount <= 0) {
            throw new Exception('amount has to be > 0');
        }
        $this->balance += $amount;
    }
    /**
     * @param float $amount
     * @return float
     * @throws Exception
     */
    public function decrease(float $amount)
    {
        if ($amount <= 0) {
            throw new Exception('amount has to be > 0');
        }
        return $this->balance -= $amount;
    }
    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }
    /**
     * @param int $number
     * @return BankAccount
     */
    public function setNumber(int $number): BankAccount
    {
        $this->number = $number;
        return $this;
    }
}