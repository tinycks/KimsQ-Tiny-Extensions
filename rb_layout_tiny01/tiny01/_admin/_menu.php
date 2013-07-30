<div class="guide">
    <span class="b">상단 메뉴 (대메뉴) 관련 몇가지 설정을 지원합니다.</span>
    <br />
    <br />
    해외 및 국내 메이저 웹사이트에서 유행하는 형식의 상단 대메뉴입니다.
    <br />
    상단 메뉴는 jQuery Plugin 2종을 사용했습니다. (DC Mega Menu, hoverIntent) 디자인 변경/확장은 theme.css 파일을 수정하십시오.
    <br />
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" enctype="multipart/form-data" onsubmit="return configCheck(this);">
    <input type="hidden" name="r" value="<?php echo $r?>" />
    <input type="hidden" name="_layoutAction" value="config" />
    <input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
    <input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />

    <table>
        <tr>
            <td class="t1">상단메뉴</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="checkbox" name="dsp_topmenu" value="1"<?php if($d['layout']['dsp_topmenu']):?> checked="checked"<?php endif ?> disabled="disabled" />
                출력합니다. <span class="small">(공통 출력 설정 페이지에서 수정하세요.)</span></label></td>
        </tr>
        <tr>
            <td class="t1">메뉴출력 옵션</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="text" name="homestr" class="input sf1" value="<?php echo $d['layout']['homestr']?>" />
            <label>
                <input type="checkbox" name="homestr_use" value="1"<?php if($d['layout']['homestr_use']):?> checked="checked"<?php endif ?> />
                출력</label> / 대메뉴
            <select name="menunum">
                <?php for($i = 1; $i < 11; $i++):?>
                <option value="<?php echo $i?>"<?php if($d['layout']['menunum']==$i):?> selected="selected"<?php endif ?>><?php echo $i?>개
                </option>
                <?php endfor ?>
            </select><span class="small">(개 이상일 경우 더보기 메뉴로 대체)</span></td>
        </tr>
        <tr>
            <td class="t1">Contact Us 노출</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="contactus_use" value="1"<?php if($d['layout']['contactus_use']=='1'):?> checked="checked"<?php endif ?> />
                메뉴에 노출함</label><label>
                <input type="radio" name="contactus_use" value="0"<?php if($d['layout']['contactus_use']=='0'):?> checked="checked"<?php endif ?> />
                메뉴에 노출안함 <span class="small">(Contact Us 설정 페이지에서 자세한 설정 가능합니다.)</span></label></td>
        </tr>
        <tr>
            <td class="t1">서브메뉴 1줄 출력 수</td>
            <td class="t2">:</td>
            <td class="t3">
            <select name="menu_subnum">
                <?php for($i = 1; $i < 6; $i++):?>
                <option value="<?php echo $i?>"<?php if($d['layout']['menu_subnum']==$i):?> selected="selected"<?php endif ?>><?php echo $i?>개
                </option>
                <?php endfor ?>
            </select><span class="small">(서브메뉴 레이어에서 1줄에 보여줄 2차 메뉴 개수)</span></td>
        </tr>
        <tr>
            <td class="t1">레이어 표시 효과</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="menu_substyle" value="fade"<?php if($d['layout']['menu_substyle']=='fade'):?> checked="checked"<?php endif ?> />
                페이드 효과</label><label>
                <input type="radio" name="menu_substyle" value="slide"<?php if($d['layout']['menu_substyle']=='slide'):?> checked="checked"<?php endif ?> />
                slide 효과 <span class="small">(서브메뉴 레이어가 뜨는 이펙트 방식입니다.)</span></label></td>
        </tr>
        <tr>
            <td class="t1">레이어 표시 속도</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="menu_subfast" value="fast"<?php if($d['layout']['menu_subfast']=='fast'):?> checked="checked"<?php endif ?> />
                빠름</label><label>
                <input type="radio" name="menu_subfast" value="slow"<?php if($d['layout']['menu_subfast']=='slow'):?> checked="checked"<?php endif ?> />
                느림 <span class="small">(서브메뉴 레이어를 빠르게 혹은 느리게 보여줍니다.)</span></label></td>
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