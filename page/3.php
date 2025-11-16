<?php
$test = $_POST['test'];
$test = explode("\r\n",$test);


$result = 1;


for ($i = 0;$i < $priceCount;$i++) {
    $dayRate = rate($price[$i]['start'],$price[$i]['end']);
    
    if ($dayRate > 0 && $test[$i] == "买") {
        $result *= 1 + abs($dayRate);
    } else if ($dayRate > 0 && $test[$i] == "卖") {
        $result *= 1 - abs($dayRate);
    } else if ($dayRate < 0 && $test[$i] == "买") {
        $result *= 1 - abs($dayRate);
    } else if ($dayRate < 0 && $test[$i] == "卖") {
        $result *= 1 + abs($dayRate);
    } else {
        $result *= 1;
    }
}

?>




<div>
    <form action="" method="POST">
        <textarea type="text" name="test" style="width: 100%;height: 100px;"></textarea>
        <input type="submit" style="width: 100%">
    </form>
    <div>
        战绩：<?php echo($result);?>
    </div>
</div>