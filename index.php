<!--
    Joaquín Fernando Ortega Silva
    24/01/2024
    
    Sample solution
    https://www.wa4e.com/solutions/rps/

    Specification
    https://www.wa4e.com/assn/rps/

    Broken sample
    https://www.wa4e.com/code/rps/

    Terminology:

    > bootstrap: popular CSS framework
    > salt:
    > rainbow table:

-->
<!DOCTYPE html>
<html>
<head>
    <title>Joaquín Fernando Ortega Silva -  Rock Paper Scissors 23d74442</title>
    <?php 
        require_once "bootstrap.php";
        //require_once "game.php" 
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index-style.css"/>
</head>
<body>
    <div class="container">
    <h1> <span style="color: brown;"> Welcome to Rock Paper Scissors </span></h1>
    <p><strong>Note:</strong> This sample code is only
    partially done and serves only as a starting point for the assignment.
    </p>
    <a href="game.php">
        <img src="img/rps.png" class="center" 
        width="250" height="250"
        alt="Click here to enter the game">    
    </a>

    <p>
    <a href="login.php">Please Log In</a>
    </p>
    <p>
    Attempt to go to 
    <a href="game.php">game.php</a> without logging in - it should fail with an error message.
    <p>
    <a href="http://www.wa4e.com/code/rps.zip"
    target="_blank">Source Code for this Application</a>
    </p>

    <h1>Testing % operator in php </h1>
    <pre>
        <p>
            <?php
            /* 
                $mod_a = array(0,1,2);
                $mod_b = array(0,1,2);
                $dividend = 0;
                $divisor = 0;
                $remainder = 0;
                
                for ($i = 0; $i < count($mod_a);$i++)
                {   // a / b
                    // dividend / divisor = quotient, remainder
                    $dividend = $mod_a[$i];
                    $str_val_a = strval($mod_a[$i]);                
                    //echo "\nmod_a : Value[".$i."] = ".$str_val_a."\n";
                    for ($j = 0; $j < count($mod_b); $j++)
                    {
                        $divisor = $mod_b[$j];
                        $str_val_b = strval($mod_b[$i]);
                        //echo "\n\tmod_b : Value[".$i."] = ".$str_val_b."\n";
                        try
                        {   // Set up exception
                            if ($divisor == 0)
                            {
                                throw new Exception("Division by 0 is not defined, however we know it's rock");
                            }

                            // Using module operation
                            $mod_result = $dividend % $divisor;
                            // Check if its a Tie
                            if ($dividend == $divisor)
                            {
                                echo "<strong> Tie </strong>";
                            }
                            // Check if human wins
                            else if ($mod_result == 1)
                            {
                                echo "<strong>You win</strong>";

                            }
                            // Check if human looses
                            else
                            {

                            }


                        }
                        catch (Exception $e)
                        {
                            echo "<span style=color:red>".$e->getMessage()."</span>";
                        }

                        
                        if ($divisor == 0)
                        {
                            echo "Computer plays rock (0)";
                            // check($computer,$human)
                            $result = check()
                            echo $result
                        }
                        //echo "<strong>Result = ". strval($mod_a[$i] % $mod_b[$j])."</strong>";
                        
                    }
                }
                */
            ?> 
        </p>
    </pre> 
</div>
</body>

