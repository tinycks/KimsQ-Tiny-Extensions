<?php
if (isset($_themePage) && !$_HM['name']) $_HM['name'] = '레이아웃 추가 페이지';
$g['img_widget'] = $g['s'].'/widgets/'.$wdgvar['widget_id'].'/image';
?>
<?php if(($_HM['name'] || $_HP['name'] || $B['name']) && $mod != 'write' && $_GET['mod'] != 'mypage' && $_GET['mod'] != 'search' && $_GET['mod'] != 'main' && $_GET['mod'] != 'join' && $_GET['mod'] != 'login' && $_GET['mod'] != 'main_mobile' && !$system) {?>

<!-- 소셜 쉐어 버튼 -->
<div class="pagetitle_widget">
    <div class="share">
<a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;" title="페이스북 쉐어 버튼">
  <img src="<?php echo $g['img_widget']?>/share_f.png" alt="페이스북 쉐어 버튼" title="페이스북 쉐어 버튼">
</a>
<a href="#" 
  onclick="
    window.open(
      'https://twitter.com/share', 
      'twitter-share-dialog', 
      'width=626,height=436'); 
    return false;" title="트위터 쉐어 버튼">
  <img src="<?php echo $g['img_widget']?>/share_t.png" alt="트위터 쉐어 버튼" title="트위터 쉐어 버튼">
</a>
<a href="#" 
  onclick="
    window.open(
      'https://plus.google.com/share?url='+encodeURIComponent(location.href), 
      'twitter-share-dialog', 
      'width=600,height=600'); 
    return false;" title="구글+ 쉐어 버튼">
  <img src="<?php echo $g['img_widget']?>/share_g.png" alt="구글+ 쉐어 버튼" title="구글+ 쉐어 버튼">
</a>
</div>
            
    <div class="pagetitle clearfix">
    <h4><?php
    if ($_HM['name'])
        echo $_HM['name'];
    elseif ($_HP['name'])
        echo $_HP['name'];
    else
        echo $B['name'];
?></h4>
</div>
</div>
    
    <?php
    }
    ?>