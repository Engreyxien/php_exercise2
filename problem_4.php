<?php
class BankAccount {
    public $accountNumber;
    public $balance;

    public function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return $amount;
        }
        return 0;
    }
}

$account = new BankAccount(1111222212344321);
$account->deposit(10000);
$withdrawnAmount = $account->withdraw(500);
?>

<!DOCTYPE html>
<html>
<body>
<h1>Bank Account Receipt</h1>

<?php
echo "<p>Account Number: " . $account->accountNumber . "<br> </p>";
echo "<p>Balance:Php" . $account->balance . "<br> </p>";
echo "Amount Withdrawn: Php" . $withdrawnAmount;
?>
<style >
body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;  
  height: 100vh;
  font-family: "Courier New", Courier, monospace;
}

</style>
</body>
</html>
