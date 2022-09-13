<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    // echo "<h1 style=color:blue>hello</h1>" ."<br>";


    // echo "hello world <br>";
    // echo "hello world <br>";
    // //numeric
    // $x = 5985;
    // var_dump(is_numeric($x));
    // echo "<br>";
    // var_dump(is_string($x));
    // echo "<br>";

    // //math
    // echo("square root=".sqrt(60));
    // echo "<br>";
    // echo("minimum value=".min(13,89,5,90,1));
    // echo "<br>";
    // echo("maximum value=".max(13,89,5,90,9));
    // echo "<br>";
    // echo ("Random number=".rand(1000,9999))."<br>";
    // //arrays
    // $fruit=array("Apple","Mango","orange");
    // echo "Fruit =" .$fruit[1] ."<br>";
    // //operators
    // $x=5;
    // $y=6;
    // var_dump($x);
    // echo "add=".$x+$y ."<br>";
    // echo "mul=".$x*$y ."<br>";
    // echo "<br>";
    // echo "<br>";
    // //if statement
    // function myfun($age)
    // {
    //     if($age>=18)
    //     {
    //         echo "Eligible" ."<br>";
    //     }
    //     else{
    //         echo " not Eligible";
    //     }
    // }
    // myfun(20);

    // //class
    // class student
    // {
    //     public $id;
    //     public $name;

    //     function myfun1($id,$name)
    //     {
    //       $this->id=$id;
    //       $this->name=$name;

    //    }

    // }

    // //object
    // $obj=new student();
    // $obj->myfun1(101,"dhanu");
    // echo "<br>name=".$obj->name ." <br>" ."id=" .$obj->id ."<br>";

    // for($i=0;$i<=5;$i++)
    // {
    //     for($j=5-$i;$j>=1;$j--)
    //     {
    //         echo  "*";
    //     }
    //     echo "<br>";
    // }

    // //string
    // echo strlen("hello ")."<br>";
    // echo strrev(" hello world")."<br>";
    // $str="madam";
    // $pal="madam";
    // //echo $pal;
    // if($str==strrev($pal))
    // {
    //     echo "palindrome "."<br>".$pal ."<br>";
    // }
    // else
    // {
    //     echo "not palindrome" ;
    // }


    //greatest numbers
    //  $a=1;
    //  $b=4;
    //  $c=2;

    // if($a>$b && $a>$c)
    // {
    //     echo "a is greatest";

    // }
    // else if($b>$c )
    // {
    //     echo "b is greatest";

    // }

    //  else{
    //     echo "c is  greatest number";

    //  }
    // //  echo "<br>";
    //  $sort=array(9,33,2,78,40,1);
    //  //echo $sort;
    //  //sort($sort);
    //  $slen=count($sort);
    //  echo"<pre>";
    //  print_r($sort);
    //  for($x=0;$x<$slen;$x++)
    //  {
    //      for($y=$x+1;$y<$slen;$y++)
    //      {
    //          if($sort[$x]>$sort[$y])
    //          {
    //              $temp=$sort[$x];
    //              $sort[$x]=$sort[$y];
    //              $sort[$y]=$temp;

    //          }
    //      }

    //  }
    //  echo "Sorted array=";
    //      print_r($sort);


    // //switch
    // $day=2;
    // switch($day)
    // {
    //     case 1:echo "Monday";
    //     break;
    //     case 2:echo "Tuesday";
    //     break;
    //     case 3:echo "wednesday";
    //     break;
    //     case 4:echo "thursday";
    //     break;
    //     case 5:echo "Friday";
    //     break;
    //     case 6:echo "Saturday";
    //     break;
    //     case 7:echo "Sunday";
    //     break;
    //      default:echo "undefined";
    //     break;
    // }


    //"Version and configuration"
    //echo (phpinfo());

    //filename
    echo (basename(__FILE__, '.php'));
    echo "<br>";
    //swap 2 numbers
    $a = 1;
    $b = 2;
    echo "<h2>swapping numbers</h2>";
    echo "Before Swapping :<br>" . "a=" . $a . "<br>" . "b=" . $b;
    echo "<br>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "After Swapping :<br>" . "a=" . $a . "<br>" . "b=" . $b;
    echo "<br>";
    //without temp
    $x = 2;
    $y = 1;
    echo "before Swapping :<br>" . "x=" . $x . ", " . "y=" . $y;
    echo "<br>";
    $x = $x + $y;
    $y = $x - $y;
    $x = $x - $y;
    echo "After Swapping :<br>" . "x=" . $x . ", " . "y=" . $y;
    echo "<br>";
    //2nd method for swap
    $m = 10;
    $n = 30;
    echo " Before swapping:  " . $m . ',' . $n;
    echo "<br>";
    //3rd method for swap
    list($m, $n) = array($n, $m);
    echo "After swapping:  " . $m . ',' . $n . "\n";
    echo "<br>";

    // removing duplicates from a sorted list 
    echo "<h2>Remove duplicates from a sorted list</h2>";
    function remove_dup($list1)
    {
        $nums_unique = array_values(array_unique($list1));
        return $nums_unique;
    }
    $sort = array(9, 9, 1, 1, 2, 2, 3, 4, 5, 5);
    echo "<pre>";

    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<div class='col-3'>";
    print_r($sort);
    echo "</div>";



    //echo

    //   print_r($sort);//

    //sort($sort);
    $slen = count($sort);
    for ($x = 0; $x < $slen; $x++) {
        $sort[$x];
        //echo "<br>";
    }
    echo "<div class='col-3'>";
    echo "</div>";
    echo "<div class='col-3'>";
    //echo "<pre>";
    print_r(array_unique($sort));
    echo "</div>";
    echo "</div>";
    echo "</div>";
    //

    //prime numbers 1-100
    function prime_numbers($num)
    {
        if ($num == 1)
            return 0;
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                return 0;
            }
        }
        return 1;
    }
    echo "<h2>Prime numbers between 1 -100</h2>";
    for ($num = 1; $num <= 100; $num++) {
        $flag = prime_numbers($num);
        if ($flag == 1) {
            echo $num . " ";
        }
    }

    echo "<br>";

    //email valid
    echo "<h2>Valid email address</h2>";
    function checkemail($str)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    $str = "Dhanu@gmail.com";
    if (!checkemail($str)) {

        echo "Invalid email address:" . $str;
    } else {
        echo "Valid email address:" . $str;
    }
    echo "<br>";
    //email valid
    echo "<h2>first non-repeated character in a given string</h2>";
    //first non-repeated character in a given string.
    function non_repeat($str)
    {

        for ($i = 0; $i <= strlen($str); $i++) {
            if (substr_count($str, substr($str, $i, 1)) == 1) {
                return substr($str, $i, 1);
            }
        }
    }
    echo non_repeat("green") . "\n";
    echo non_repeat("abcdea") . "\n";
    echo "<br>";


    //sum of the digits of a number
    echo "<h2>the sum of the digits of a number.</h2>";

    $rem = 0; //global
    function sum_digits($num)
    {
        $sum = 0;
        for ($i = 0; $i < strlen($num); $i++) {
            $rem = $num % 10;
            $sum = $sum + $rem;
            $num = $num / 10;
        }

        echo "Sum of digits 123 is $sum";
        echo "<br>";
        echo "rem=" . $rem;
    }
    echo "<br>";

    $num = 654;
    sum_digits($num);

    //3 largest numbers
    echo "<h2>3 largest numbers</h2>";
    $arr = array(9, 2, 8, 3, 1, 4, 4, 5);
    $num = array_unique($arr);
    sort($num);
    print_r($num);
    $len = count($num);
    for ($i = 0; $i < $len; $i++) {
        $k = $len - ($i + 1);
        if ($i < 3 && isset($num[$k])) {
            echo $num[$k] . '<br>';
        } else {

            break;
        }
    }

    echo "<h2>Bubble Sort</h2>";
    function Bubblesort(&$arr)
    {
        $n = sizeof($arr);
        // Traverse through all array elements
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++)
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            print_r($arr);
        }
        print_r($arr);
    }
    $arr = array(8, 7, 6, 44, 4, 3, 2, 1);
    $len = sizeof($arr);
    Bubblesort($arr);
    echo "Sorted array : \n";

    for ($i = 0; $i < $len; $i++)
        echo $arr[$i] . " ";

    echo "<h2>Binary Sort</h2>";
    function BinarySort($arr, $l, $r, $x)
    {
    }
    ?>
    <!-- //php_check_syntax -->
  
        <!-- $con = mysqli_connect("localhost","root","","sampledb");
        $result = mysqli_query($con,"select * from emptb");
        echo "<table class='table'>";
        echo "<tr><td>name</td><td>password</td><td>email</td>
        <td>Gender</td>
        <td>language</td>
        <td>Address</td>
        <td>Edit</td><td>Delete</td></tr>";
    
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr><td>".$row["name"]."</td><td>".$row["password"]."</td><td>".$row["email"];
            echo "</td><td><a href="."show.php?edit=1&id=".$row['id']."><button class='btn btn-primary'>edit</button></a></td>";
            echo "<td><a href="."show.php?delete=1&id=".$row['id']."><button class='btn btn-success'>DELETE</button></a></td></tr>";
        }
        echo "</table>";
        -->