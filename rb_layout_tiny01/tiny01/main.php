<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/top.php'?>
<div id="content">
	<div class="wrap">
	<?php if($d['layout']['_is_ownmain']) include $g['path_layout'].$d['layout']['dir'].'/_cross/_main.php'?>
	<?php if($d['layout']['_is_content']):?>
		<?php if($d['layout']['dsp_side']=='left'&&!$system):?>
		<div class="aside">
		<?php include $g['path_layout'].$d['layout']['dir'].'/_cross/side.php'?>	
		</div>
		<?php endif ?>
		<div id="rcontent" class="center<?php if($d['layout']['dsp_side']&&!$system):?> m_side<?php endif ?>">

<?php if(!$system && $d['layout']['dsp_breadcrumbs']) :?>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery.fn.jBreadCrumb.defaults.previewWidth = '25';
                jQuery.fn.jBreadCrumb.defaults.minimumCompressionElements = '3';
                jQuery("#breadCrumb").jBreadCrumb();
            })
        </script>

            <div class="breadCrumbHolder module">
                <div id="breadCrumb" class="breadCrumb module">
                    <ul>
<?php 
$location = explode("&gt;", $g['location']); 
foreach($location as $here) {
?>
                        <li>
                            <?php echo $here?>
                        </li>
<?php
}
                        ?>
                    </ul>
                </div>
            </div>    
<?php endif ?>                

<?php if(($_HM['name'] || $_HP['name'] || $B['name']) && $mod != 'write' && $_GET['mod'] != 'mypage' && $_GET['mod'] != 'search' && $_GET['mod'] != 'main' && $_GET['mod'] != 'join' && $_GET['mod'] != 'login' && $_GET['mod'] != 'main_mobile' && !$system) {?>

<?php if($d['layout']['dsp_socialbutton']) :?>
<!-- 소셜 쉐어 버튼 -->
    <div class="share">
<a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;" title="페이스북 쉐어 버튼">
  <img src="<?php echo $g['img_layout']?>/share_f.png" alt="페이스북 쉐어 버튼" title="페이스북 쉐어 버튼">
</a>
<a href="#" 
  onclick="
    window.open(
      'https://twitter.com/share', 
      'twitter-share-dialog', 
      'width=626,height=436'); 
    return false;" title="트위터 쉐어 버튼">
  <img src="<?php echo $g['img_layout']?>/share_t.png" alt="트위터 쉐어 버튼" title="트위터 쉐어 버튼">
</a>
<a href="#" 
  onclick="
    window.open(
      'https://plus.google.com/share?url='+encodeURIComponent(location.href), 
      'twitter-share-dialog', 
      'width=600,height=600'); 
    return false;" title="구글+ 쉐어 버튼">
  <img src="<?php echo $g['img_layout']?>/share_g.png" alt="구글+ 쉐어 버튼" title="구글+ 쉐어 버튼">
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

<?php endif ?>
    
    <?php
    }
    ?>

<?php if($d['layout']['ad4type'] && $mod != 'write' && $_GET['mod'] != 'main' && $_GET['mod'] != 'main_mobile' && !$system):?>
<div class="banner_cont">
<?php if($d['layout']['ad4type']==1):?><a href="<?php echo $d['layout']['ad4_imglink']?>" target="<?php echo $d['layout']['ad4_imgtarget']?>"><img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad4_img']?>" alt="" /></a><?php endif ?>
<?php if($d['layout']['ad4type']==2):?><embed src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad4_swf']?>" width="200"></embed><?php endif ?>
<?php if($d['layout']['ad4type']==3) include $g['path_layout'].$d['layout']['dir'].'/_var/_ad4.txt'?>
</div>
<?php endif ?>

		<?php include __KIMS_CONTENT__?>
		</div>
		<?php if($d['layout']['dsp_side']=='right'&&!$system):?>
		<div class="bside">
		<?php include $g['path_layout'].$d['layout']['dir'].'/_cross/side.php'?>	
		</div>
		<?php endif ?>
		<?php if($d['layout']['dsp_side']):?><div class="clear"></div><?php endif ?>
	<?php endif ?>

	</div>
</div>
<?php include  $g['path_layout'].$d['layout']['dir'].'/_cross/bottom.php'?>