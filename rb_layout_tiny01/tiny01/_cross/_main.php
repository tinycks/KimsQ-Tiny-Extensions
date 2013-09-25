<?php if($d['layout']['carousel']):?>
        <!-- 메인 캐러셀(carousel) 광고 -->
        <div id="featured" class="clearfix">
            <ul> 
                <li>
                    <a href="<?php echo $d['layout']['carousel1_link']?>" target="<?php echo $d['layout']['carousel1_target']?>">
                        <span><?php echo $d['layout']['carousel1_txt']?></span>
                        <img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['carousel1_img']?>" alt="<?php echo $d['layout']['carousel1_txt']?>" />
                    </a>
                </li>  
                <li>
                    <a href="<?php echo $d['layout']['carousel2_link']?>" target="<?php echo $d['layout']['carousel2_target']?>">
                        <span><?php echo $d['layout']['carousel2_txt']?></span>
                        <img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['carousel2_img']?>" alt="<?php echo $d['layout']['carousel2_txt']?>" />
                    </a>
                </li>
                <li>
                    <a href="<?php echo $d['layout']['carousel3_link']?>" target="<?php echo $d['layout']['carousel3_target']?>">
                        <span><?php echo $d['layout']['carousel3_txt']?></span>
                        <img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['carousel3_img']?>" alt="<?php echo $d['layout']['carousel3_txt']?>" />
                    </a>
                </li>  
<?php if($d['layout']['carousel4type']):?>
                <li>
                    <a href="<?php echo $d['layout']['carousel4_link']?>" target="<?php echo $d['layout']['carousel4_target']?>">
                        <span><?php echo $d['layout']['carousel4_txt']?></span>
                        <img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['carousel4_img']?>" alt="<?php echo $d['layout']['carousel4_txt']?>" />
                    </a>
                </li>  
<?php endif ?><?php if($d['layout']['carousel5type']):?>
                <li>
                    <a href="<?php echo $d['layout']['carousel5_link']?>" target="<?php echo $d['layout']['carousel5_target']?>">
                        <span><?php echo $d['layout']['carousel5_txt']?></span>
                        <img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['carousel5_img']?>" alt="<?php echo $d['layout']['carousel5_txt']?>" />
                    </a>
                </li>  
<?php endif ?><?php if($d['layout']['carousel6type']):?>
                <li>
                    <a href="<?php echo $d['layout']['carousel6_link']?>" target="<?php echo $d['layout']['carousel6_target']?>">
                        <span><?php echo $d['layout']['carousel6_txt']?></span>
                        <img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['carousel6_img']?>" alt="<?php echo $d['layout']['carousel6_txt']?>" />
                    </a>
                </li>  
<?php endif ?>                                  
            </ul> 
        </div>
        <div class="clearfix">&nbsp;</div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#featured ul').roundabout({
                easing : 'easeOutInCirc',
                duration : 600
				,autoplay : true, //오토 플레이 설정 true, 비설정 false
				autoplayInitialDelay : 500, //설정값 milliseconds 후에 오토 플레이 시작, 1000 = 1초
				autoplayDuration : 3000, //오토 플레이 간격, 1000 = 1초
				autoplayPauseOnHover : false //마우스 올렸을때 멈추기
            });
        });
    </script>  
<?php endif ?>
<?php if($d['layout']['title'] == "Tiny Layout 01"):?>
        <!-- 안내 메시지 -->

        <h5 class="caption clearfix">반갑습니다 <span>:)</span> 설치하신 <span>타이니</span>의 무료 레이아웃과 함께 <span>kimsQ Rb</span> 홈페이지를 만들어 보세요. <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_themeConfig=display&amp;prelayout=<?php echo $d['layout']['dir']?>/zone" class="button">레이아웃 꾸미기 바로가기</a><br>이 메시지는 레이아웃 꾸미기 모드 > 세부 설정 페이지에서 홈페이지 제목을 변경하시면 사라집니다.</h5>
<?php endif ?>
<?php if($d['layout']['bbs_display']):?>
        <!-- 최근글 추출 -->
                
<div class="mainbox">

	<?php $_sort=explode(',',$d['layout']['sort1'])?>
	<?php $_date=$d['layout']['bbs1_day']>0?date('YmdHis',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-$d['layout']['bbs1_day'],$date['year'])):0?>
	<?php $_RCD=getDbArray($table['bbsdata'],($d['layout']['bbs1']?'bbs='.$d['layout']['bbs1']:'site='.$s).' and display=1 and d_regis > '.$_date,'*',$_sort[0],$_sort[1],$d['layout']['bbs1_num'],1)?>
	<?php for($i = 0; $i < $d['layout']['bbs1_num']; $i++):?>
	<?php $_R=db_fetch_array($_RCD)?>

	<a href="<?php
    if ($_R)
        echo getPostLink($_R);
    else
        echo '#';
?>" class="post<?php
if ($i % 4 != 0)
    echo ' borderleft';
 ?>">
		
	<?php if($_R['uid']):?>
	<?php $_THUMB=getUploadImage($_R['upload'],$_R['d_regis'],$_R['content'],'jpg|jpeg|png')?>
		
		<div class="box1">
			<div class="title"><?php echo $_R['subject']?></div>
			<div class="cont">
				<?php if($_THUMB):?><img src="<?php echo $_THUMB?>" alt="" /><?php endif ?>
				&nbsp;<?php echo getStrCut(getStripTags($_R['content']), 300, '...'); ?>
			</div>
			<div class="caption"><?php echo getDateFormat($_R['d_regis'],'Y년 n월 j일')?></div>
		</div>

	<?php endif ?>

	</a>
	<?php endfor ?>
</div>
        <div class="clearfix">&nbsp;</div>
<?php endif ?>