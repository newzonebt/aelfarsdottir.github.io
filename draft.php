<?php

$hi = gent5sline();

echo $hi;

function gent5sline()
{
    // Get random int and store inside variable
    // $randomint = rand(1, 15);
    $randomint = 1;
    $line = 0;
    
    if ($randomint = 1)
    {
        // Call function 5.1
        $line = option5_1();
    }    
    
    else if ($randomint = 2)
    {
        // Call function 5.2
        $line = option5_2();
    }    
    
    else if ($randomint = 3)
    {
        // Call function 5.3
        $line = option5_3();
    }    
    
    else if ($randomint = 4)
    {
        // Call function 5.4
        $line = option5_4();
    }    
    
    else if ($randomint = 5)
    {
        // Call function 5.5
        $line = option5_5();
    }    
    
    else if ($randomint = 6)
    {
        // Call function 5.6
        $line = option5_6();
    }    
    
    else if ($randomint = 7)
    {
        // Call function 5.7
        $line = option5_7();
    }    
    
    else if ($randomint = 8)
    {
        // Call function 5.8
        $line = option5_8();
    }    
    
    else if ($randomint = 9)
    {
        // Call function 5.9
        $line = option5_9();
    }    
    
    else if ($randomint = 10)
    {
        // Call function 5.10
        $line = option5_10();
    }    
    
    else if ($randomint = 11)
    {
        // Call function 5.11
        $line = option5_11();
    }    
    
    else if ($randomint = 12)
    {
        // Call function 5.12
        $line = option5_12();
    }    
    
    else if ($randomint = 13)
    {
        // Call function 5.13
        $line = option5_13();
    }    
    
    else if ($randomint = 14)
    {
        // Call function 5.14
        $line = option5_14();
    }    
    
    else if ($randomint = 15)
    {
        // Call function 5.15
        $line = option5_15();
    }    
    
    return $line;
}

// Example of option function
function option5_1()
{
    // Define $line to store line
    $phrase = 0;
    
    $word1_1 = RandomLine("./wordbank/j2.txt");
    $word1 = rtrim($word1_1);
    $word2_2 = RandomLine("./wordbank/j2.txt");
    $word2 = rtrim($word2_2);
    $word3_3 = RandomLine("./wordbank/n1.txt");
    $word3 = rtrim($word3_3);
    
    // Concatenate words into $line
    $phrase = $word1 . " " . $word2 . " " . $word3 . "\n";
    
    return $phrase;
}

function RandomLine($fileinput) 
{

    if (file_exists($fileinput))
    {
        $sites = file($fileinput);
        // $string = array_rand($sites, 1);
        $string = $sites[array_rand($sites, 1)];
    }
        
    else 
    {
        $string = "Error";
    }
    
    return $string;
}    

?>
