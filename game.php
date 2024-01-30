<?php
    // Demand a GET parameter
    if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) 
    {
        //die('<strong>Name parameter missing</strong>');
        die("<strong>Name parameter missing</strong><br>    
            <img src=img/fail-icon.png class='center'>");
    }
    // If the user requested logout go back to index.php
    if ( isset($_POST['logout']) )
    {
        header('Location: index.php');
        return;
    }

    // Set up the values for the game...
    // 0 is Rock, 1 is Paper, and 2 is Scissors
    $names = array('Rock', 'Paper', 'Scissors');
    $human = isset($_POST["human"]) ? $_POST['human']+0 : -1;

    // TODO: Make the computer be random
    $computer = rand(0,2);

    // This function takes as its input the computer and human play
    // and returns "Tie", "You Lose", "You Win" depending on play
    // where "You" is the human being addressed by the computer
    // $human can take only be -1,0,1,2,3
    // $human 0,1,2
    // #computer 1,2,3
    function check($computer,$human) 
    {
        // If the expression evaulates to True , the computer (player B) wins
        // 1: rock, 2: paper, 3: scissors
        // We have to offset by +1 for the math to work
        $human_play = $human + 1;
        $computer_play = $computer + 1;
        if (($human_play) == $computer_play)
        {
            return "Tie";
        }
        else if (($human_play + 1) % 3 == $computer_play % 3 )
         {
            return "You Lose";
         }
         else
         {
            return "You Win";
         }           
    }

    // Check to see how the play happenned
    $result = check($computer,$human);

?>
<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
<title>Joaquín F. Rock, Paper, Scissors Game 23d74442 </title>
<?php require_once "bootstrap.php"; ?>
</head>
<body>
    <div class="container">
    <h1><span style="color:brown">Rock Paper Scissors</span></h1>
        <?php
        if ( isset($_REQUEST['name']) ) {
            echo "<p>Welcome: ";
            echo htmlentities($_REQUEST['name']);
            echo "</p>\n";
        }
        ?>
    <form method="POST"> <!-- // post -->
        <select name="human">
            <option value="-1">Select</option>
            <!-- TODO: -->
            <option value="0">Rock</option>
            <option value="1">Paper</option>
            <option value="2">Scissors</option>
            <option value="3">Test</option>
            
        </select>
        <!--        button type, value and label of the button-->
        <input type="submit" value="Play">
        <input type="submit" name="logout"  value="Logout"> <!-- name="logout"-->
    </form>

    <pre>
        <?php
        if ( $human == -1 ) 
        {
            print "Please select a strategy and press Play.\n";
        } 
        else if ( $human == 3 ) 
        {   
            // Test. 'c' for computer, 'h' for  human
            for($c = 0;$c < 3; $c++) 
            {
                for($h = 0;$h < 3;$h++) 
                {
                    $r = check($c,$h);
                    print ("\n\tHuman=$names[$h]\tComputer=$names[$c]\t<strong>Result=$r</strong>\n");
                }
            }
        } else 
        {
            $your_play = $names[$human];
            $computer_play = $names[$computer];
            /*
            print "<span style=color:blue>\tYour Play=$your_play ($human)</span>
            <span style=color:green>\tComputer Play=$computer_play ($computer)</span> 
            <strong>\tResult=$result</span>\n";
            */            
            print "Your Play=$your_play Computer Play=$computer_play Result=$result \n";
            
        }
    ?>
    </pre>
    </div>
</body>
</html>
