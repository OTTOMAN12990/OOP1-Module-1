<?php


class BankAccount

{

    
    public $balance;
    public $accountNumber;
 
 
    public function __construct(
         $accountNumber,
         $balance = 0.0
    ) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
 
 
    public function getBalance()
    {
        return "<br> Uw huidige saldo is " . $this->setBalance() ."";
    }
 
    public function setBalance()
    {
        return number_format($this->balance, decimals:2);
    }
 
 
    public function getAccountNumber()
    {
        return 'Uw banknummer is ' . $this->accountNumber;
    }
 
 
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return '<br>Uw banknummer is gewijziged naar ' . $this->accountNumber;
    }
 
 
    public function deposit($amount)
    {
        $this->balance += $amount;
        return '<br>U heeft ' . $amount . ' op de bank gezet en uw huidige saldo is ' . $this->setBalance() ."";
    }
 
 
    public function withdraw($amount)
    {
        if ($amount <= 0) {
            echo 'Withdrawal amount moet positief zijn.';
            return;
        }
        if ($amount > $this->balance) {
            return '<br>U heeft onlvoldoende balans om ' .$amount. ' op te nemen.';
        }
        if ($amount < $this->balance) {
            $this->balance -= $amount;
            return '<br>U heeft ' .$amount.' opgenomen en uw huidige saldo is nu: ' . $this->setBalance() ."";
        }
    }
}


$account = new BankAccount(accountNumber: '123456', balance: 50.0);
 
echo $account->getAccountNumber();
echo $account->getBalance();
echo $account->withdraw(15.0);
echo $account->deposit(20);
echo $account->withdraw(100.0);
echo $account->setAccountNumber('987654');



?>