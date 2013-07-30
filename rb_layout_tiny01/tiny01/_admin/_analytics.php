<div class="guide">
    <span class="b"><?php echo $my[$_HS['nametype']]?>님
        의 홈페이지에 웹로그 트래킹 소스를 추가하실 수 있습니다.</span>
    <br />
    <br />
    구글과 네이버의 웹로그 서비스가 무료이며 활용도가 높으니 추천합니다. 또한 한 곳이 아닌 두 곳을 사용하시면 종합적으로 좋습니다.
    <br />
    아래 추적 코드 (웹로그 분석 스크립트) 적는 곳에 웹로그 사이트에서 제공하는 소스 코드를 옮겨 놓으십시오.
    <br />
    관리자페이지와 레이아웃 꾸미기모드를 제외하고 홈페이지 전체를 트래킹합니다.
    <br />
    <br />
    <a href="https://www.google.com/analytics/" target="_blank" class="button">구글 애널리틱스 바로가기</a> &nbsp; <a href="http://analytics.naver.com/" target="_blank" class="button">네이버 애널리틱스 바로가기</a>
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" enctype="multipart/form-data" onsubmit="return configCheck(this);">
    <input type="hidden" name="r" value="<?php echo $r?>" />
    <input type="hidden" name="_layoutAction" value="config" />
    <input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
    <input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />

    <table>
        <tr>
            <td class="t1">웹로그 스크립트 1</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="analytics_1" value="0"<?php if(!$d['layout']['analytics_1']):?> checked="checked"<?php endif ?> />
                사용 안함</label><label>
                <input type="radio" name="analytics_1" value="1"<?php if($d['layout']['analytics_1']=='1'):?> checked="checked"<?php endif ?> />
                사용함</label>
            <br />
            <br />
            <textarea name="code1" rows="8" cols="70"><?php readfile($g['path_layout'].$d['layout']['dir'].'/_var/_analytics_1.txt')?></textarea>            </td>
        </tr>

        <td class="t1">웹로그 스크립트 2</td>
        <td class="t2">:</td>
        <td class="t3"><label>
            <input type="radio" name="analytics_2" value="0"<?php if(!$d['layout']['analytics_2']):?> checked="checked"<?php endif ?> />
            사용 안함</label><label>
            <input type="radio" name="analytics_2" value="1"<?php if($d['layout']['analytics_2']=='1'):?> checked="checked"<?php endif ?> />
            사용함</label>
        <br />
        <br />
        <textarea name="code2" rows="8" cols="70"><?php readfile($g['path_layout'].$d['layout']['dir'].'/_var/_analytics_2.txt')?></textarea>        </td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td>
            <br />
            <br />
            <input type="submit" value=" 변경하기 " class="button" />
            </td>
        </tr>
    </table>

</form>