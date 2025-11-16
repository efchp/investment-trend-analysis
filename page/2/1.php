<?php



?>



<style>
    
</style>


<table>
    <tr>
        <th>id</th>
        <th>日期</th>
        <th>开始</th>
        <th>结束</th>
        <th>最底</th>
        <th>最高</th>
        <th>日涨幅</th>
        <th>最大涨幅</th>
        <th>最底涨幅</th>
    </tr>
    
    <?php
    for ($i = 0;$i < $priceCount;$i++) {
    
    $id = $price[$i]['id'];
    $date = $price[$i]['date'];
    $start = $price[$i]['start'];
    $end = $price[$i]['end'];
    $min = $price[$i]['min'];
    $max = $price[$i]['max'];
    $dayRate = rate($start,$end);
    $maxRate = rate($start,$max);
    $minRate = rate($start,$min);
    
    
    
    
    
    
    
    
    ?>
    
    
    <tr>
        <td><?php echo($id);?></td>
        <td><?php echo($date);?></td>
        <td><?php echo($start);?></td>
        <td><?php echo($end);?></td>
        <td><?php echo($min);?></td>
        <td><?php echo($max);?></td>
        <td><?php echo(percent($dayRate));?></td>
        <td><?php echo(percent($maxRate));?></td>
        <td><?php echo(percent($minRate));?></td>
    </tr>
    
    
    <?php }?>
</table>