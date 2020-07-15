<?php
$n1=$_POST["n1"];
$n2=$_POST["n2"];
if($n2<2){
	echo"There are no prime numbers in range",$n1," to ",$n2;
}
if($n1%2==0){
	$n1=$n1+1;
}
$count=0;
  if ( $n1 % 2 == 0)
    {
        $n1++;
    }
    for ($i = $n1; $i <= $n2; $i = $i + 2)
    {
        $f = 0;
        for ($j = 2; $j <= $i / 2; $j++)
        {
            if (($i % $j) == 0)
            {
                $f = 1;
                break;
            }
        }
        if ($f == 0)
        {
            $count=$count+1;
        }
    }
    echo "There are ",$count," prime numbers in range ",$n1," to ",$n2 ;
?>