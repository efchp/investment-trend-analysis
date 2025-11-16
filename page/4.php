<?php
$liancheng = $_POST['liancheng'];


$liancheng = explode("\r\n",$liancheng);
$result = 1;



for ($i = 0;$i < $priceCount;$i++) {
    if ($liancheng[$i] != "") {
        $rate = 1 + $liancheng[$i];
    } else {
        $rate = 1;
    }
    
    $result *= $rate;
}
?>


<div>
    <form action="" method="POST">
        <textarea type="text" name="liancheng" style="width: 100%;height: 100px;"></textarea>
        <input type="submit" style="width: 100%">
    </form>
    <div>
        战绩：<?php echo($result);?>
    </div>
</div>