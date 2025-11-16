<?php

//用百分比直接计算差值是绝对不正确的，但结果相似，以后再改


function shun_zhang($rate) {
    global $priceCount,$price;
    $result = 1;
    for ($i = 0;$i < $priceCount;$i++) {
        $dayRate = rate($price[$i]['start'],$price[$i]['end']);
        $minRate = rate($price[$i]['start'],$price[$i]['min']);
        $maxRate = rate($price[$i]['start'],$price[$i]['max']);
        
        
        if ($rate < $maxRate) {
            $tempRate = $dayRate - $rate;
        } else {
            $tempRate = 0;
        }
        
        $result *= 1 + $tempRate;
        
        
        
    }
    
    
    return $result;
}





function shun_die($rate) {
    global $priceCount,$price;
    $result = 1;
    for ($i = 0;$i < $priceCount;$i++) {
        $dayRate = rate($price[$i]['start'],$price[$i]['end']);
        $minRate = rate($price[$i]['start'],$price[$i]['min']);
        $maxRate = rate($price[$i]['start'],$price[$i]['max']);
        
        
        if ($rate > $minRate) {
            $tempRate = -($dayRate - $rate);
        } else {
            $tempRate = 0;
        }
        
        $result *= 1 + $tempRate;
        
        
        
    }
    
    
    return $result;
}



function ni_zhang($rate) {
    global $priceCount,$price;
    $result = 1;
    for ($i = 0;$i < $priceCount;$i++) {
        $dayRate = rate($price[$i]['start'],$price[$i]['end']);
        $minRate = rate($price[$i]['start'],$price[$i]['min']);
        $maxRate = rate($price[$i]['start'],$price[$i]['max']);
        
        
        if ($rate < $maxRate) {
            $tempRate = $dayRate - $rate;
        } else {
            $tempRate = 0;
        }
        
        $result *= 1 - $tempRate;
        
        
        
    }
    
    
    return $result;
}





function ni_die($rate) {
    global $priceCount,$price;
    $result = 1;
    for ($i = 0;$i < $priceCount;$i++) {
        $dayRate = rate($price[$i]['start'],$price[$i]['end']);
        $minRate = rate($price[$i]['start'],$price[$i]['min']);
        $maxRate = rate($price[$i]['start'],$price[$i]['max']);
        
        
        if ($rate > $minRate) {
            $tempRate = -($dayRate - $rate);
        } else {
            $tempRate = 0;
        }
        
        $result *= 1 - $tempRate;
        
        
        
    }
    
    
    return $result;
}

?>










<style>
    .content {
        display: flex;
    }
</style>


<div>
    <div>
        <div class="title1">
            顺势
        </div>
        <div class="content">
            <div>
                <div class="title2">涨</div>
                <div>涨1%：<?php echo(shun_zhang(0.01));?></div>
                <div>涨2%：<?php echo(shun_zhang(0.02));?></div>
                <div>涨3%：<?php echo(shun_zhang(0.03));?></div>
                <div>涨4%：<?php echo(shun_zhang(0.04));?></div>
                <div>涨5%：<?php echo(shun_zhang(0.05));?></div>
                <div>涨6%：<?php echo(shun_zhang(0.06));?></div>
                <div>涨7%：<?php echo(shun_zhang(0.07));?></div>
                <div>涨8%：<?php echo(shun_zhang(0.08));?></div>
                <div>涨9%：<?php echo(shun_zhang(0.09));?></div>
                <div>涨10%：<?php echo(shun_zhang(0.1));?></div>
            </div>
            <div>
                <div class="title2">跌</div>
                <div>跌1%：<?php echo(shun_die(-0.01));?></div>
                <div>跌2%：<?php echo(shun_die(-0.02));?></div>
                <div>跌3%：<?php echo(shun_die(-0.03));?></div>
                <div>跌4%：<?php echo(shun_die(-0.04));?></div>
                <div>跌5%：<?php echo(shun_die(-0.05));?></div>
                <div>跌6%：<?php echo(shun_die(-0.06));?></div>
                <div>跌7%：<?php echo(shun_die(-0.07));?></div>
                <div>跌8%：<?php echo(shun_die(-0.08));?></div>
                <div>跌9%：<?php echo(shun_die(-0.09));?></div>
                <div>跌10%：<?php echo(shun_die(-0.1));?></div>
            </div>
        </div>
    </div>
    <div>
        <div class="title1">
            回调
        </div>
        <div class="content">
            <div>
                <div class="title2">涨</div>
                <div>涨1%：<?php echo(ni_zhang(0.01));?></div>
                <div>涨2%：<?php echo(ni_zhang(0.02));?></div>
                <div>涨3%：<?php echo(ni_zhang(0.03));?></div>
                <div>涨4%：<?php echo(ni_zhang(0.04));?></div>
                <div>涨5%：<?php echo(ni_zhang(0.05));?></div>
                <div>涨6%：<?php echo(ni_zhang(0.06));?></div>
                <div>涨7%：<?php echo(ni_zhang(0.07));?></div>
                <div>涨8%：<?php echo(ni_zhang(0.08));?></div>
                <div>涨9%：<?php echo(ni_zhang(0.09));?></div>
                <div>涨10%：<?php echo(ni_zhang(0.1));?></div>
            </div>
            <div>
                <div class="title2">跌</div>
                <div>跌1%：<?php echo(ni_die(-0.01));?></div>
                <div>跌2%：<?php echo(ni_die(-0.02));?></div>
                <div>跌3%：<?php echo(ni_die(-0.03));?></div>
                <div>跌4%：<?php echo(ni_die(-0.04));?></div>
                <div>跌5%：<?php echo(ni_die(-0.05));?></div>
                <div>跌6%：<?php echo(ni_die(-0.06));?></div>
                <div>跌7%：<?php echo(ni_die(-0.07));?></div>
                <div>跌8%：<?php echo(ni_die(-0.08));?></div>
                <div>跌9%：<?php echo(ni_die(-0.09));?></div>
                <div>跌10%：<?php echo(ni_die(-0.1));?></div>
            </div>
        </div>
    </div>
</div>