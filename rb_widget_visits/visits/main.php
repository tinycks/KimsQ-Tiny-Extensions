
<div class="widget_visits">
	<?php if(!$wdgvar['notuse']):?>
	<div class="tt"><?php echo $wdgvar['title']?></div>
	<?php endif?>
<ul>
<?php
if(!$wdgvar['visits1']) {
$_VISITS = getDbData($table['s_numinfo'],"date='".$date['today']."' and site=".$s,'visit');
?>
    <li><span><?php echo number_format($_VISITS['visit'])?></span>오늘 방문</li>
<?php
} if(!$wdgvar['visits2']) {
$_VISITS_day = date('Ymd',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-1,substr($date['today'],0,4)));    
$_VISITS = getDbData($table['s_numinfo'],"date='".$_VISITS_day."' and site=".$s,'visit');
?>
    <li><span><?php echo number_format($_VISITS['visit'])?></span>어제 방문</li>
<?php
} if(!$wdgvar['views1']) {
$_VISITS = getDbData($table['s_counter'],"date='".$date['today']."' and site=".$s,'page');
?>
    <li><span><?php echo number_format($_VISITS['page'])?></span>오늘 페이지뷰</li>
<?php
} if(!$wdgvar['views2']) {
$_VISITS_day = date('Ymd',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-1,substr($date['today'],0,4)));    
$_VISITS = getDbData($table['s_counter'],"date='".$_VISITS_day."' and site=".$s,'page');
?>
    <li><span><?php echo number_format($_VISITS['page'])?></span>어제 페이지뷰</li>
<?php
} if(!$wdgvar['month1']) {
$_VISITS_day = substr($date['today'],0,4).substr($date['today'],4,2);    
$_VISITS = getDbData($table['s_numinfo'],"LEFT(date,6)='".$_VISITS_day."' and site=".$s,'SUM(visit) as visit');
?>
    <li><span><?php echo number_format($_VISITS['visit'])?></span>이번 달 방문</li>
<?php
} if(!$wdgvar['month2']) {
$_VISITS_day = date('Ym',mktime(0,0,0,substr($date['today'],4,2)-1,1,substr($date['today'],0,4)));
$_VISITS = getDbData($table['s_numinfo'],"LEFT(date,6)='".$_VISITS_day."' and site=".$s,'SUM(visit) as visit');
?>
    <li><span><?php echo number_format($_VISITS['visit'])?></span>지난 달 방문</li>
<?php
} if(!$wdgvar['join']) {
$_VISITS = getDbData($table['s_numinfo'],"date='".$date['today']."' and site=".$s,'mbrjoin');
?>
    <li><span><?php echo number_format($_VISITS['mbrjoin'])?></span>오늘 회원가입</li>
<?php
}
?>
</ul>
</div>