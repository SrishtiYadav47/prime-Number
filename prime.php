 <!-- if a number have two factor is called prime number.it means divide by itself and 1 and not any other number.2 2 is prime number -->
<?php
$n=11;
$flag=0;
for($i=2; $i<$n; $i++){
    if($n%$i==0){
        $flag=1;
        break;
    }
}
if($flag==1){
    echo "not prime number";
}
else{
    echo " this is prime number";
}
?>