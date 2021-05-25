
<?php

require "auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Income Tax Calculator</title>
</head>
<body>
<div class="grid-container">

<div class="grid-item" >
   
        <form method="POST"  action=""> 
        <label for="salary">salary</label>
                <input type="number" name="salary"
                
                placeholder="Salary in USD" required>
                <br>
                <label for="salary">tax Allowance</label>

            
                <input type="number"
               

                name="taxFreeAllowance" 
                placeholder="Tax Free Allowance in USD"
                 required> 
            
                
                    <input type="radio"

                    <?php if(isset($_POST['calculate'])) if($_POST['time'] == "monthly") echo "checked"; ?>
                    name="time" value="monthly" required> Monthly
                </label>
                <label> 
                    <input type="radio"
                    <?php if(isset($_POST['calculate'])) if($_POST['time'] == "yearly") echo "checked"; ?>
                    name="time" value="yearly"> Yearly
                </label>
          
               <input type="submit" name="calculate" value="calculate"/>
            
        </form>
</div>

        <?php 
            if(isset($_POST['calculate'])) {
                {    
                    $salary = ($_POST['salary']);
                    $time = $_POST['time'];
                    $taxFreeAllowance = $_POST['taxFreeAllowance']; 
                    $salaryCalc = $salary;
                    $taxFreeAllowanceCalc = $taxFreeAllowance;
                    if($time == "monthly") {
                        $salaryCalc *= 12;
                        $taxFreeAllowance *= 12;
                    }

                    $totalSalaryMonthly = $salaryCalc / 12;
                    $totalSalaryYearly = $salaryCalc;

                    if($salaryCalc < 10000) {
                        $taxAmountMonthly = 0;
                        $taxAmountYearly = 0;
                    }
                    else if($salaryCalc < 25000){
                        $taxAmountMonthly = $totalSalaryMonthly * 0.11;
                        $taxAmountYearly = $totalSalaryYearly * 0.11;
                    }
                    else if($salaryCalc < 50000){
                        $taxAmountMonthly = $totalSalaryMonthly * 0.3;
                        $taxAmountYearly = $totalSalaryYearly * 0.3;
                    }
                    else {
                        $taxAmountMonthly = $totalSalaryMonthly * 0.45;
                        $taxAmountYearly = $totalSalaryYearly * 0.45;
                    }
                    if($salaryCalc > 10000) {
                        $socialSecurityMonthly = $totalSalaryMonthly * 0.04;
                        $socialSecurityYearly = $totalSalaryYearly * 0.04;
                    }
                    else {
                        $socialSecurityMonthly = 0;
                        $socialSecurityYearly = 0;
                    }

                    $salaryAfterTaxMonthly = $totalSalaryMonthly - $taxAmountMonthly - $socialSecurityMonthly + ($taxFreeAllowanceCalc / 12);
                    $salaryAfterTaxYearly = $totalSalaryYearly - $taxAmountYearly - $socialSecurityYearly + ($taxFreeAllowanceCalc);
                    


                    echo 
                    "<div class='grid-item' >
                    <label >table of salary</label>
                    <br>
                    <br>
                    <br>

                    <table style='width: 100%; text-align: center;'  border = '1'>
                        <tr>
                            <th> </th>
                            <th>Monthly</th>
                            <th>Yearly</th>
                        </tr>

                        <tr>
                            <td>Total Salary</td>
                            <td>$totalSalaryMonthly$</td>
                            <td>$totalSalaryYearly$</td>
                        </tr>

                        <tr>
                            <td>Tax amount</td>
                            <td>$taxAmountMonthly$</td>
                            <td>$taxAmountYearly$</td>
                        </tr>

                        <tr>
                            <td>Social security fee</td>
                            <td>$socialSecurityMonthly$</td>
                            <td>$socialSecurityYearly$</td>
                        </tr>
                        
                        <tr>
                            <td>Salary after tax</td>
                            <td>$salaryAfterTaxMonthly$</td>
                            <td>$salaryAfterTaxYearly$</td>
                        </tr>
                    </table> 
                    </div>
                    </div>

                    ";
                }
            }
        ?>
    
</body>
</html>