<?php


$shun_ri = 1;
for ($i = 0;$i < $priceCount;$i++) {
    $shun_ri *= 1 + rate($price[$i]['start'],$price[$i]['end']);
}








$shun_zhou = 1;
for ($i = 0;$i < $priceCount;$i++) {
    
    
    
    $evaluate = 0;
    for ($j = 0;$j < 7;$j++) {
        
        
        $start = $price[$i - $j]['start'];
        if ($start == 0) {
            $tempRate = 0;
        } else {
            $end = $price[$i - $j]['end'];
            $tempRate = rate($start,$end);
        }
        
        if ($tempRate > 0) {
            $evaluate++;
        } else if ($tempRate < 0) {
            $evaluate--;
        } else {
            $evaluate += 0;
        }
    }
    
    
    $dayRate = rate($price[$i]['start'],$price[$i]['end']);
    
    if ($dayRate > 0 && $evaluate > 0) {
        $shun_zhou *= 1 + abs($dayRate);
    } else if ($dayRate > 0 && $evaluate < 0) {
        $shun_zhou *= 1 - abs($dayRate);
    } else if ($dayRate < 0 && $evaluate > 0) {
        $shun_zhou *= 1 - abs($dayRate);
    } else if ($dayRate < 0 && $evaluate < 0) {
        $shun_zhou *= 1 + abs($dayRate);
    } else {
        $shun_zhou *= 1;
    }
    
}



$shun_yue = 1;
for ($i = 0;$i < $priceCount;$i++) {
    
    
    
    $evaluate = 0;
    for ($j = 0;$j < 30;$j++) {
        
        
        $start = $price[$i - $j]['start'];
        if ($start == 0) {
            $tempRate = 0;
        } else {
            $end = $price[$i - $j]['end'];
            $tempRate = rate($start,$end);
        }
        
        if ($tempRate > 0) {
            $evaluate++;
        } else if ($tempRate < 0) {
            $evaluate--;
        } else {
            $evaluate += 0;
        }
    }
    
    
    $dayRate = rate($price[$i]['start'],$price[$i]['end']);
    
    if ($dayRate > 0 && $evaluate > 0) {
        $shun_yue *= 1 + abs($dayRate);
    } else if ($dayRate > 0 && $evaluate < 0) {
        $shun_yue *= 1 - abs($dayRate);
    } else if ($dayRate < 0 && $evaluate > 0) {
        $shun_yue *= 1 - abs($dayRate);
    } else if ($dayRate < 0 && $evaluate < 0) {
        $shun_yue *= 1 + abs($dayRate);
    } else {
        $shun_yue *= 1;
    }
    
    
}






$ni_ri = 1;
for ($i = 0;$i < $priceCount;$i++) {
    $ni_ri *= 1 - rate($price[$i]['start'],$price[$i]['end']);
}








$ni_zhou = 1;
for ($i = 0;$i < $priceCount;$i++) {
    
    
    
    $evaluate = 0;
    for ($j = 0;$j < 7;$j++) {
        
        
        $start = $price[$i - $j]['start'];
        if ($start == 0) {
            $tempRate = 0;
        } else {
            $end = $price[$i - $j]['end'];
            $tempRate = rate($start,$end);
        }
        
        if ($tempRate > 0) {
            $evaluate++;
        } else if ($tempRate < 0) {
            $evaluate--;
        } else {
            $evaluate += 0;
        }
    }
    
    
    $dayRate = rate($price[$i]['start'],$price[$i]['end']);
    
    if ($dayRate > 0 && $evaluate > 0) {
        $ni_zhou *= 1 - abs($dayRate);
    } else if ($dayRate > 0 && $evaluate < 0) {
        $ni_zhou *= 1 + abs($dayRate);
    } else if ($dayRate < 0 && $evaluate > 0) {
        $ni_zhou *= 1 + abs($dayRate);
    } else if ($dayRate < 0 && $evaluate < 0) {
        $ni_zhou *= 1 - abs($dayRate);
    } else {
        $ni_zhou *= 1;
    }
    
}



$ni_yue = 1;
for ($i = 0;$i < $priceCount;$i++) {
    
    
    
    $evaluate = 0;
    for ($j = 0;$j < 30;$j++) {
        
        
        $start = $price[$i - $j]['start'];
        if ($start == 0) {
            $tempRate = 0;
        } else {
            $end = $price[$i - $j]['end'];
            $tempRate = rate($start,$end);
        }
        
        if ($tempRate > 0) {
            $evaluate++;
        } else if ($tempRate < 0) {
            $evaluate--;
        } else {
            $evaluate += 0;
        }
    }
    
    
    $dayRate = rate($price[$i]['start'],$price[$i]['end']);
    
    if ($dayRate > 0 && $evaluate > 0) {
        $ni_yue *= 1 - abs($dayRate);
    } else if ($dayRate > 0 && $evaluate < 0) {
        $ni_yue *= 1 + abs($dayRate);
    } else if ($dayRate < 0 && $evaluate > 0) {
        $ni_yue *= 1 + abs($dayRate);
    } else if ($dayRate < 0 && $evaluate < 0) {
        $ni_yue *= 1 - abs($dayRate);
    } else {
        $ni_yue *= 1;
    }
    
    
}








?>





<style>
    .content {
        display: flex;
    }
    
    .item {
         border: 1px solid grey;
    }
</style>


<div>
    <div>
        <div class="title1">
            顺势
        </div>
        <div class="content">
            <div class="item">
                <div class="title2">
                    日趋势
                </div>
                <div>
                    战绩：<?php echo($shun_ri);?>
                </div>
            </div>
            <div class="item">
                <div class="title2">
                    周趋势
                </div>
                <div>
                    战绩：<?php echo($shun_zhou);?>
                </div>
            </div>
            <div class="item">
                <div class="title2">
                    月趋势
                </div>
                <div>
                    战绩：<?php echo($shun_yue);?>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="title1">
            逆势
        </div>
        <div class="content">
            <div class="item">
                <div class="title2">
                    日趋势
                </div>
                <div>
                    战绩：<?php echo($ni_ri);?>
                </div>
            </div>
            <div class="item">
                <div class="title2">
                    周趋势
                </div>
                <div>
                    战绩：<?php echo($ni_zhou);?>
                </div>
            </div>
            <div class="item">
                <div class="title2">
                    月趋势
                </div>
                <div>
                    战绩：<?php echo($ni_yue);?>
                </div>
            </div>
        </div>
    </div>
</div>