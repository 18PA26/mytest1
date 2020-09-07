<html>
    <head>
        <h1>FUNCTION LIBRARY</h1>
</head>
<body>
    <?php
    require("library.php");
    $a=$_POST["s1"];
    if(isset($_POST["r1"]));
    {
        if($_POST["r1"]=='l')
        {
            $s=isevenodd($a);
            if($s==1)
            echo "$a is even number";
            else
            echo "$a is odd number";
        }
        if($_POST["r1"]=='r')
        
        {
            $s=areasquare($a);
        echo "the area of square is $s";
        }
        if($_POST["r1"]=='s')
        
        {
            $s=cube($a);
        echo "the cube of value is $s";
        }
        if($_POST["r1"]=='u')
        
        {
            if(isLeap($a)==1)
            
        echo "is leap year $a";
        else
        echo "is not leap year $a";
        }
        if($_POST["r1"]=='p')
        
        {
            $flag=primecheck($a);
            
            if ($flag == 1) 
            echo "Prime"; 
        else
            echo "Not Prime";
        }

    }
    ?>