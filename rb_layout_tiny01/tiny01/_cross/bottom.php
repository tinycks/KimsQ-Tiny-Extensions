<div class="wrap">
    <?php include __KIMS_CONTAINER_FOOT__

    ?>
</div>

<div id="footer">
    <div class="wrap">
        <div class="slinks">
            <div class="elink">
                <a href="<?php echo RW('mod=agreement')?>">홈페이지 이용약관</a> | <a href="<?php echo RW('mod=private')?>">개인정보 취급방침</a> | <a href="<?php echo RW('mod=postrule')?>">게시물 게재원칙</a>
            </div>
            <div class="address">
                <?php include $g['path_layout'].$d['layout']['dir'].'/_var/_address.txt'?>
            </div>
            <div class="copyright">
                <b>&copy; Copyright</b> <?php echo $date['year']?> <?php echo $_SERVER['HTTP_HOST']?> All rights reserved.
            </div>
        </div>

        <?php if($d['layout']['dsp_familysite']) :?>
        <div class="familysite">
            <div class="inside familysite">
                <a href="#none">패밀리 사이트</a>
                <ul class="">
                    <li>
                        <a href="http://kimsq.cweb.co.kr" target="_blank">타이니의 kimsQ Lab</a>
                    </li>
                    <li>
                        <a href="http://www.kimsq.co.kr/" target="_blank">킴스큐</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/kimsQcom" target="_blank">킴스큐 공식 트위터</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/kimsQ.Platform" target="_blank">킴스큐 f 팬 페이지</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/groups/kimsquser/" target="_blank">킴스큐 f 유저그룹</a>
                    </li>
                    <li>
                        <a href="http://www.redblock.co.kr/" target="_blank">(주)레드블럭</a>
                    </li>
                    <li>
                        <a href="http://php.net/" target="_blank">PHP.net</a>
                    </li>
                    <li>
                        <a href="http://jquery.com/" target="_blank">jQuery</a>
                    </li>
                    <li>
                        <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a>
                    </li>
                    <li>
                        <a href="http://www.google.com/analytics/" target="_blank">구글 웹로그</a>
                    </li>
                    <li>
                        <a href="http://analytics.naver.com/" target="_blank">네이버 애널리틱스</a>
                    </li>
                    <li>
                        <a href="http://dev.mysql.com/" target="_blank">MySQL</a>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                familysite();
            });
        </script>
        <?php endif ?>

        <div class="maintop"><a class="button" href="#">Top</a></div>                  

        <div class="clear"></div>
    </div>
</div>
</div>

<script type="text/javascript">
    //<![CDATA[
    function screenCheck() {
        var _h = getId('header');
        var _t = getId('topmenu');
        var _c = getId('content');
        var _f = getId('footer');
        var _r = getId('rcontent');
        var _w;

        var w = parseInt(document.body.clientWidth);
        var b = getOfs(_c.children[0]);

        _w = w < 960 ? w : 960;
        _w = _w < 240 ? 240 : _w;

        _h.children[0].style.width = _w + 'px';
        _t.children[0].style.width = _w + 'px';
        _c.children[0].style.width = _w + 'px';
        _f.children[0].style.width = _w + 'px';
        document.body.style.overflowX = 'hidden';
    }

    //setTimeout("screenCheck()",100);
    //window.onresize = screenCheck;
    //]]>
</script>

<?php if($d['layout']['analytics_1']&&!$system&&!$_themeConfig) include $g['path_layout'].$d['layout']['dir'].'/_var/_analytics_1.txt'
?>

<?php if($d['layout']['analytics_2']&&!$system&&!$_themeConfig) include $g['path_layout'].$d['layout']['dir'].'/_var/_analytics_2.txt'
?>