<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        class Donation{
             protected $name ;
             protected $amount;
             public static $totalDonated = 0;
             public static $numberOfDonors = 0;
             
             public function __construct($name, $amount) {
             $this->name = $name;
             $this->amount = $amount;
             self::$totalDonated += $amount;
             self::$numberOfDonors++;}
             
             public function info() {
             $percentage = round($this->amount / self::$totalDonated * 100, 2);
              echo "$this->name donated $this->amount ($percentage%)<br>";}
    
           }
           $donors = array(
            new Donation("Nichola", 85.00),
            new Donation("Mitko", 50.00),
             new Donation("Emily", 90.00),
             new Donation("Iliana", 65.00));

           foreach ($donors as $donor) {
               $donor->info();
               
           }
           
           echo "Total Donations = " . Donation::$totalDonated . "<br>";
          echo "Number of Donors = " . Donation::$numberOfDonors . "<br>";
        ?>
    </body>
</html>
