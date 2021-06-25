                    <!-- INTERN_ID: SH-IT-43139 -->
<?php
//The range function
function showRange($start, $end){
    $numbers= array();

        for($i=$start; $i<=$end; $i++){
            array_push($numbers, $i);
        }
        return $numbers;
}
//The sum function
function toSum($userInput){
    $sum= 0;

    foreach($userInput as $input){
        $sum+= $input;
    }
    echo 'Sum of numbers: '.$sum."<br>";
}

//Getting inputs from the form interface
if(isset($_POST['btn1'])){
    echo "<br>";
    print_r(showRange($_POST['start'],

    $_POST['end'])); //calling range function
}

if(isset($_POST['btn2'])){

    $values= str_replace(' ', '',$_POST['nums']);
    $numAnswer= explode(',', $values);
    echo(is_int($numAnswer));

    if(count($numAnswer) === count(array_filter($numAnswer,'is_numeric'))){
        echo '<br>';
        toSum($numAnswer); //calling toSum function
    }else{
        echo '<br>';
        echo "Sorry! this ain't a number";
    }
}
?>


<!-- Just a very basic form interface to collect inputs -->
<form action="rangeSum.php" method= "POST">

<section style="background-color:#f2f2f2; padding:28px;
 width:15%;">
<input type="number" name="start" placeholder="Start number"></input><br>
<input type="number" name="end" placeholder="End number"></input>
<button type="submit" name="btn1" >Show Range</button>
<br></br>

<input type="text" name="nums" placeholder="Example 1,2,3,4"></input><br>
<button type="submit" name="btn2" >Sum-Up</button>
</section>
</form>