<div<?php if($d['layout']['bg_use']):?> style="background:url('<?php echo $g['url_layout'].'/_var/'.$d['layout']['bg']?>') <?php echo $d['layout']['bg_o']?>;"<?php endif ?>>
<div id="header" style="border-top:<?php echo $d['layout']['bg_header_bt']?> solid <?php echo $d['layout']['height_header_bt']?>px;border-bottom:<?php echo $d['layout']['bg_header_bb']?> solid <?php echo $d['layout']['height_header_bb']?>px;<?php if(!$d['layout']['bg_use']):?>background:<?php echo $d['layout']['bg_header']?>;<?php endif ?>">
	<div class="wrap" style="height:<?php echo $d['layout']['height_header']?>px;<?php if($d['layout']['height_header_bb']):?>border-bottom:0;<?php endif ?>">
		<div class="logo" style="top:<?php echo $d['layout']['title_t']?>px;">
			<?php echo getLayoutLogo($d['layout'])?>
		</div>


<?php if($d['layout']['ad1type']):?>
<span class="banner_top" style="top:<?php echo $d['layout']['title_ad']?>px;">
<?php if($d['layout']['ad1type']==1):?><a href="<?php echo $d['layout']['ad1_imglink']?>" target="<?php echo $d['layout']['ad1_imgtarget']?>"><img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad1_img']?>" alt="" /></a><?php endif ?>
<?php if($d['layout']['ad1type']==2):?><embed src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['ad1_swf']?>" width="200"></embed><?php endif ?>
<?php if($d['layout']['ad1type']==3) include $g['path_layout'].$d['layout']['dir'].'/_var/_ad1.txt'?>
</span>
<?php endif ?>

        <?php if($d['layout']['dsp_search']):?>
        <div class="search" style="top:<?php echo $d['layout']['title_b']-8?>px;">
            <form action="<?php echo $g['s']?>/" method="get" id="_layout_search_border_" style="border:<?php echo $d['layout']['search_border']?> solid 1px;">
            <input type="hidden" name="r" value="<?php echo $r?>" />
            <input type="hidden" name="mod" value="search" />
            <input type="text" name="keyword" placeholder="통합검색" class="keyword<?php if($_keyword):?> done<?php endif ?>" value="<?php echo $_keyword?>" />
            <input type="image" src="<?php echo $g['img_layout']?>/btn_search.gif" class="sbtn" alt="search" />
            </form>
        </div>
        <?php endif ?>

		<div id="_layout_memberlink_" class="login" style="top:<?php echo $d['layout']['title_b']?>px;">
        <?php if($d['layout']['dsp_login']):?>
			<?php if($my['uid']):?>
			<a href="<?php echo RW('mod=mypage')?>" style="color:<?php echo $d['layout']['memberlink_color']?>;">나의계정</a> <i style="background:<?php echo $d['layout']['split_color']?>;"></i> 
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;a=logout" style="color:<?php echo $d['layout']['memberlink_color']?>;">로그아웃</a>
			<?php else: ?>
			<a href="<?php echo RW('mod=join')?>" style="color:<?php echo $d['layout']['memberlink_color']?>;">회원가입</a> <i style="background:<?php echo $d['layout']['split_color']?>;"></i> 
            <a href="<?php echo RW('mod=login')?>" style="color:<?php echo $d['layout']['memberlink_color']?>;">로그인</a>
			<?php endif ?>	
        <?php endif ?>
		</div>

		<div class="clear"></div>
	</div>
</div>

<?php if($d['layout']['dsp_topmenu']):?>
    <div class="wrap">
<ul id="mega-menu" class="mega-menu">
        <?php if($d['layout']['homestr_use']):?>
        <li><a href="<?php echo $g['s']?>/?r=<?php echo $r?>"><?php echo $d['layout']['homestr']?></a></li>
        <?php endif ?>

        <?php $_TOPMENUS1=getDbSelect($table['s_menu'],'site='.$s.' and hidden=0 and depth=1 order by gid asc','*')?>
        <?php $_i=0; while($_TOPM1=db_fetch_array($_TOPMENUS1)):?>
        <li<?php if(in_array($_TOPM1['id'],$_CA)):$g['nowFMemnu']=$_TOPM1['uid']?><?php endif ?>><a href="<?php echo $_TOPM1['redirect']?$_TOPM1['joint']:RW('c='.$_TOPM1['id'])?>" target="<?php echo $_TOPM1['target']?>"><?php echo $_TOPM1['name']?></a>
        <?php if($_TOPM1['isson']):?>
        <ul>
        <?php $_TOPMENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_TOPM1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
        <?php while($_TOPM2=db_fetch_array($_TOPMENUS2)):?>
        <li><a href="<?php echo RW('c='.$_TOPM1['id'].'/'.$_TOPM2['id'])?>" target="<?php echo $_TOPM2['target']?>"><?php echo $_TOPM2['name']?></a>
        <?php if($_TOPM2['isson']):?>
        <ul>
        <?php $_TOPMENUS3=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_TOPM2['uid'].' and hidden=0 and depth=3 order by gid asc','*')?>
        <?php while($_TOPM3=db_fetch_array($_TOPMENUS3)):?>
        <li><a href="<?php echo RW('c='.$_TOPM1['id'].'/'.$_TOPM2['id'].'/'.$_TOPM3['id'])?>" target="<?php echo $_TOPM3['target']?>"><?php echo $_TOPM3['name']?></a></li>
        <?php endwhile ?>
        </ul>
        <?php endif ?>
        </li>
        <?php endwhile ?>
        </ul>
        <?php endif ?>
        </li>
        <?php $_i++;
            if ($_i >= $d['layout']['menunum'])
                break;
            endwhile
        ?>

        <?php if($_i < db_num_rows($_TOPMENUS1)):?>
        <li><a href="#">메뉴더보기+</a>
        <ul>
        <?php while($_TOPM1=db_fetch_array($_TOPMENUS1)):?>
        <?php if(in_array($_TOPM1['id'],$_CA)):$g['nowFMemnu']=$_TOPM1['uid']?><?php endif ?>
        <li><a href="<?php echo $_TOPM1['redirect']?$_TOPM1['joint']:RW('c='.$_TOPM1['id'])?>" target="<?php echo $_TOPM1['target']?>"><?php echo $_TOPM1['name']?></a>
        <?php if($_TOPM1['isson']):?>
        <ul>
        <?php $_TOPMENUS2=getDbSelect($table['s_menu'],'site='.$s.' and parent='.$_TOPM1['uid'].' and hidden=0 and depth=2 order by gid asc','*')?>
        <?php while($_TOPM2=db_fetch_array($_TOPMENUS2)):?>
        <li><a href="<?php echo RW('c='.$_TOPM1['id'].'/'.$_TOPM2['id'])?>" target="<?php echo $_TOPM2['target']?>"><?php echo $_TOPM2['name']?></a></li>
        <?php endwhile ?>
        </ul>
        <?php endif ?>
        </li>
        <?php endwhile ?>
        </ul>
        </li>
        <?php endif ?>

        <?php if($d['layout']['contactus_use']):?>
        <li<?php if($_themePage=='contactus'&&!$_themeConfig):?> class="thispage"<?php endif ?>><a href="<?php echo $g['s']?>/?r=<?php echo $r?>&prelayout=tiny01/main&_themePage=contactus"><?php echo $d['layout']['contactus_name']?></a></li>
        <?php endif ?>
        
        <?php if(!$_i):?>
        <li>
            <?php if($my['admin']):?>
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;system=edit.all&amp;type=menu&amp;makemenu=Y" title="메뉴등록">메뉴를 등록해 주세요</a>
            <?php endif ?>
        </li>
        <?php endif ?>

</ul>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
    jQuery('#mega-menu').dcMegaMenu({
        rowItems: '<?php echo $d['layout']['menu_subnum']; ?>',
        effect: '<?php echo $d['layout']['menu_substyle']; ?>',
        speed: '<?php echo $d['layout']['menu_subfast']; ?>'
            });
            });
    </script> 
               
        <div class="clear"></div>
    </div>
<?php endif ?>

<div class="wrap">
<?php include __KIMS_CONTAINER_HEAD__?>	
</div>