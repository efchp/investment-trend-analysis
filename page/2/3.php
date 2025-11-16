<?php

function ying($rate) {
    global $priceCount,$price;
    $result = 1;
    for ($i = 0;$i < $priceCount;$i++) {
        $maxRate = rate($price[$i]['start'],$price[$i]['max']);
        $dayRate = rate($price[$i]['start'],$price[$i]['end']);
        
        
        if ($rate < $maxRate) {
            $tempRate = $rate;
        } else {
            $tempRate = $dayRate;
        }
        
        
        $result *= 1 + $tempRate;
    }
    return $result;
}





function sun($rate) {
    global $priceCount,$price;
    $result = 1;
    for ($i = 0;$i < $priceCount;$i++) {
        $minRate = rate($price[$i]['start'],$price[$i]['min']);
        $dayRate = rate($price[$i]['start'],$price[$i]['end']);
        
        
        if ($rate > $minRate) {
            $tempRate = $rate;
        } else {
            $tempRate = $dayRate;
        }
        
        
        $result *= 1 + $tempRate;
    }
    return $result;
}



?>














<style>
    .content {
        display: flex;
    }
</style>

<div class="content">
    <div>
        <div class="title1">
            止盈
        </div>
        <div>
            <div>止盈1%：<?php echo(ying(0.01));?></div>
            <div>止盈2%：<?php echo(ying(0.02));?></div>
            <div>止盈3%：<?php echo(ying(0.03));?></div>
            <div>止盈4%：<?php echo(ying(0.04));?></div>
            <div>止盈5%：<?php echo(ying(0.05));?></div>
            <div>止盈6%：<?php echo(ying(0.06));?></div>
            <div>止盈7%：<?php echo(ying(0.07));?></div>
            <div>止盈8%：<?php echo(ying(0.08));?></div>
            <div>止盈9%：<?php echo(ying(0.09));?></div>
            <div>止盈10%：<?php echo(ying(0.1));?></div>
        </div>
    </div>
    <div>
        <div class="title1">
            止损
        </div>
        <div>
            <div>止损1%：<?php echo(sun(-0.01));?></div>
            <div>止损2%：<?php echo(sun(-0.02));?></div>
            <div>止损3%：<?php echo(sun(-0.03));?></div>
            <div>止损4%：<?php echo(sun(-0.04));?></div>
            <div>止损5%：<?php echo(sun(-0.05));?></div>
            <div>止损6%：<?php echo(sun(-0.06));?></div>
            <div>止损7%：<?php echo(sun(-0.07));?></div>
            <div>止损8%：<?php echo(sun(-0.08));?></div>
            <div>止损9%：<?php echo(sun(-0.09));?></div>
            <div>止损10%：<?php echo(sun(-0.1));?></div>
        </div>
    </div>
</div>