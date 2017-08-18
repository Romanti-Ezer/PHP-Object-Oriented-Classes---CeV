<?php

class BankAccount {
    public $accNumber;
    protected $type;
    private $owner;
    private $balance;
    private $status;
    private $taxValue;
    
    function __construct() {
        $this->setStatus(false);
        $this->setBalance(0);
    }
    
    function getAccNumber() {
        return $this->accNumber;
    }

    function getType() {
        return $this->type;
    }

    function getOwner() {
        return $this->owner;
    }

    function getBalance() {
        return $this->balance;
    }

    function getStatus() {
        return $this->status;
    }

    function setAccNumber(int $accNumber) {
        $this->accNumber = $accNumber;
    }

    function setType(string $type) {
        $this->type = strtolower($type);
    }

    function setOwner(string $owner) {
        $this->owner = ucfirst(trim($owner));
    }

    function setBalance(float $balance) {
        $this->balance = $balance;
    }

    function setStatus(bool $status) {
        $this->status = $status;
    }

    //////////////////////////////////////////
    
    function openAccount($type){
        if ($this->getStatus()){
            echo "<p>Error opening account: account is already open</p>";
        } else{
            $this->setType($type);
            if($this->getType() == "cc"){
                $this->setStatus(true);
                $this->setBalance(50.00);
                echo "<p>Account has been successfully open!</p>";
            } elseif ($this->getType() == "cp"){
                $this->setStatus(true);
                $this->setBalance(150.00);
                echo "<p>Account has been successfully open!</p>";
            } else{
                echo "<p>Inform the account type to open it</p>";
            }
        }
    }
    
    function closeAccount(){
        if ($this->getStatus()){
            if ($this->getBalance() == 0){
                $this->setStatus(false);
                echo "<p>{$this->getOwner()}'s account was successfully closed.</p>";
            } elseif ($this->getBalance() > 0){
                echo "<p>Error closing {$this->getOwner()}'s account: the balance is positive. Value: $ {$this->getBalance()}</p>";
            } else{
                echo "<p>Error closing {$this->getOwner()}'s account: the balance is negative. Value: $ {$this->getBalance()}</p>";
            }
        } else{
            echo "<p>Error closing {$this->getOwner()}'s account: it's already closed</p>";
        }
    }
    
    function deposit(float $value){
        if ($this->getStatus()){
            $this->setBalance($this->getBalance() + $value);
            echo "<p>Deposit of $ $value in {$this->getOwner()}'s account authorized. Current balance: $ {$this->getBalance()}</p>";
        } else{
            echo "<p>Depositing error: the account is closed</p>";
        }
    }
    
    function withdraw(float $value){
        if ($this->getStatus()){
            if ($this->getBalance() >= $value){
                $this->setBalance($this->getBalance() - $value);
                echo "<p>Withdraw of $ $value in {$this->getOwner()}'s account authorized. Current balance: $ {$this->getBalance()}</p>";
            } else{
                echo "<p>Withdraw of $ {$value} error: insufficient balance. Current balance: R$ {$this->getBalance()}</p>";
            }
        } else{
            echo "<p>Withdraw error: the account is closed</p>";
        }
    }
    
    function getTaxValue() {
        return $this->taxValue;
    }

    function setTaxValue(float $value) {
        $this->taxValue = $value;
    }

        
    function payMonthTax(){
        
        if ($this->getStatus()){
            if ($this->getType() == "cc"){
                $this->setTaxValue(12.00);
                $this->setBalance($this->getBalance() - $this->getTaxValue());
            } elseif ($this->getType() == "cp"){
                $this->setTaxValue(20.00);
                $this->setBalance($this->getBalance() - $this->getTaxValue());
            } else{
                echo "<p>Error while charging monthly tax: the account type is not specified</p>";
            }
        } else{
            echo "<p>Error while charging monthly tax: the account is closed</p>";
        }
    }
      
}
