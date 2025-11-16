<?php
switch ($paths[1]) {
    case '宏观趋势':
        $page = "2";
        break;
    case '止盈止损':
        $page = "3";
        break;
    case '顺势回调':
        $page = "4";
        break;
    default:
        $page = "1";
        break;
}


?>


<style>
    .menu a {
        text-decoration: none;
        color: grey;
        line-height: 50px;
        font-size: 20px;
        margin: 0 3px;
    }
</style>



<div class="menu" style="height: 50px;width: 100%;background: lightgrey;">
    <a href="/数据统计/真实数据">
        真实数据
    </a>
    <a href="/数据统计/宏观趋势">
        宏观趋势
    </a>
    <a href="/数据统计/止盈止损">
        止盈止损
    </a>
    <a href="/数据统计/顺势回调">
        顺势回调
    </a>
</div>



<?php require($page . ".php");?>