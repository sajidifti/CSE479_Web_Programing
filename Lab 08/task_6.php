<?php

echo "<h1>CSE479 - Lab 8</h1><br><br>
<a href=\"task_1.php\" target=\"blank\">Task 1</a>
<a href=\"task_2.php\" target=\"blank\">Task 2</a>
<a href=\"task_3.php\" target=\"blank\">Task 3</a>
<a href=\"task_4.php\" target=\"blank\">Task 4</a>
<a href=\"task_5.php\" target=\"blank\">Task 5</a>
<a href=\"task_6.php\" target=\"blank\">Task 6</a>";

echo "<h1>Task 6</h1><br><br>";

class Account
{
    private $accountID;
    private $accountBalance;
    private static $count = 0;

    public function __construct($accountID, $initialBalance)
    {
        $this->accountID = $accountID;
        $this->accountBalance = $initialBalance;
        self::$count++;
    }

    public function showInformation()
    {
        echo "Account ID: {$this->accountID}<br>";
        echo "Account Balance: {$this->accountBalance}<br><br>";
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->accountBalance += $amount;
            echo "Deposited: {$amount}<br><br>";
        } else {
            echo "Invalid deposit amount<br><br>";
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->accountBalance) {
            $this->accountBalance -= $amount;
            echo "Withdrawn: {$amount}<br><br>";
        } else {
            echo "Invalid withdrawal amount<br><br>";
        }
    }

    public function showAccountInfo()
    {
        echo "<h4>Account Information:</h4>";
        $this->showInformation();
    }

    public function transferMoney(Account $otherAccount, $amount)
    {
        if ($amount > 0 && $amount <= $this->accountBalance) {
            $this->accountBalance -= $amount;
            $otherAccount->accountBalance += $amount;
            echo "Transferred: {$amount} to Account ID: {$otherAccount->accountID}<br><br>";
        } else {
            echo "Invalid transfer amount<br><br>";
        }
    }

    public static function getCount()
    {
        return self::$count;
    }
}


$account1 = new Account(101, 1000);
$account2 = new Account(102, 1500);

$account1->showAccountInfo();
$account2->showAccountInfo();

$account1->deposit(500);
$account1->withdraw(200);

$account2->deposit(100);
$account2->withdraw(300);

$account1->showAccountInfo();
$account2->showAccountInfo();

$account1->transferMoney($account2, 300);

$account1->showAccountInfo();
$account2->showAccountInfo();

echo "<br><h3>Total Accounts Created: " . Account::getCount() . "</h3><br>";


?>