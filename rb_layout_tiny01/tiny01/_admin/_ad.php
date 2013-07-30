<div class="guide">
    <span class="b"><?php echo $my[$_HS['nametype']]?>님
        의 홈페이지에 광고를 노출해 보세요.</span>
    <br />
    <br />
    이미지,텍스트 혹은 외부광고를 홈페이지에 간단히 노출시킬 수 있습니다.
    <br />
    광고의 종류와 형식을 선택해 주세요. 총 4곳의 위치 광고를 지원합니다. 광고공간이 아닌 다른 용도의 공간으로 활용도 좋습니다.
    <br />
</div>

<form name="themeForm" method="post" action="<?php echo $g['s']?>/" enctype="multipart/form-data" onsubmit="return configCheck2(this);">
    <input type="hidden" name="r" value="<?php echo $r?>" />
    <input type="hidden" name="_layoutAction" value="config" />
    <input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
    <input type="hidden" name="changeType" value="<?php echo $_themeConfig?>" />

    <span class="b">광고 1 (상단 헤드 우측 광고)</span>
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">광고의 형식</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="ad1type" value="0"<?php if($d['layout']['ad1type']=='0'):?> checked="checked"<?php endif ?> />
                광고 노출안함</label><label>
                <input type="radio" name="ad1type" value="1"<?php if($d['layout']['ad1type']=='1'):?> checked="checked"<?php endif ?> />
                이미지</label><label>
                <input type="radio" name="ad1type" value="2"<?php if($d['layout']['ad1type']=='2'):?> checked="checked"<?php endif ?> />
                플래쉬</label><label>
                <input type="radio" name="ad1type" value="3"<?php if($d['layout']['ad1type']=='3'):?> checked="checked"<?php endif ?> />
                HTML/스크립트</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile1" class="file" value="" />
            /
            <input type="text" name="ad1_imglink" class="input" value="<?php echo $d['layout']['ad1_imglink']?>" />
            <select name="ad1_imgtarget">
                <option value="_blank"<?php if($d['layout']['ad1_imgtarget']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['ad1_imgtarget']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad1_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad1_img']?>?<?php echo $date['totime']?>" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad1_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">플래쉬</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile11" class="file" value="" />
            </td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad1_swf'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <embed src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad1_swf']?>"></embed>
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad1_swf&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 플래쉬 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>

        <tr>
            <td class="t1">HTML/스크립트</td>
            <td class="t2">:</td>
            <td class="t3">            <textarea name="ad1code" rows="8" cols="70"><?php readfile($g['path_layout'].$d['layout']['dir'].'/_var/_ad1.txt')?></textarea></td>
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

    <div class="guide"></div>

    <span class="b">광고 2 (사이드 메뉴 첫번째 광고)</span> - 광고의 높이는 제한이 없으나 광고의 폭은 가로 200 픽셀에 고정됩니다.</span>
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">광고의 형식</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="ad2type" value="0"<?php if($d['layout']['ad2type']=='0'):?> checked="checked"<?php endif ?> />
                광고 노출안함</label><label>
                <input type="radio" name="ad2type" value="1"<?php if($d['layout']['ad2type']=='1'):?> checked="checked"<?php endif ?> />
                이미지</label><label>
                <input type="radio" name="ad2type" value="2"<?php if($d['layout']['ad2type']=='2'):?> checked="checked"<?php endif ?> />
                플래쉬</label><label>
                <input type="radio" name="ad2type" value="3"<?php if($d['layout']['ad2type']=='3'):?> checked="checked"<?php endif ?> />
                HTML/스크립트</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile2" class="file" value="" />
            /
            <input type="text" name="ad2_imglink" class="input" value="<?php echo $d['layout']['ad2_imglink']?>" />
            <select name="ad2_imgtarget">
                <option value="_blank"<?php if($d['layout']['ad2_imgtarget']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['ad2_imgtarget']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad2_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad2_img']?>?<?php echo $date['totime']?>" width="200" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad2_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">플래쉬</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile21" class="file" value="" />
            </td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad2_swf'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <embed src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad2_swf']?>" width="200"></embed>
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad2_swf&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 플래쉬 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>

        <tr>
            <td class="t1">HTML/스크립트</td>
            <td class="t2">:</td>
            <td class="t3">            <textarea name="ad2code" rows="8" cols="70"><?php readfile($g['path_layout'].$d['layout']['dir'].'/_var/_ad2.txt')?></textarea></td>
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

    <div class="guide"></div>

    <span class="b">광고 3 (사이드 메뉴 두번째 광고)</span> - 광고의 높이는 제한이 없으나 광고의 폭은 가로 200 픽셀에 고정됩니다.</span>
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">광고의 형식</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="ad3type" value="0"<?php if($d['layout']['ad3type']=='0'):?> checked="checked"<?php endif ?> />
                광고 노출안함</label><label>
                <input type="radio" name="ad3type" value="1"<?php if($d['layout']['ad3type']=='1'):?> checked="checked"<?php endif ?> />
                이미지</label><label>
                <input type="radio" name="ad3type" value="2"<?php if($d['layout']['ad3type']=='2'):?> checked="checked"<?php endif ?> />
                플래쉬</label><label>
                <input type="radio" name="ad3type" value="3"<?php if($d['layout']['ad3type']=='3'):?> checked="checked"<?php endif ?> />
                HTML/스크립트</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile3" class="file" value="" />
            /
            <input type="text" name="ad3_imglink" class="input" value="<?php echo $d['layout']['ad3_imglink']?>" />
            <select name="ad3_imgtarget">
                <option value="_blank"<?php if($d['layout']['ad3_imgtarget']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['ad3_imgtarget']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad3_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad3_img']?>?<?php echo $date['totime']?>" width="200" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad3_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">플래쉬</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile31" class="file" value="" />
            </td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad3_swf'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <embed src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad3_swf']?>" width="200"></embed>
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad3_swf&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 플래쉬 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>

        <tr>
            <td class="t1">HTML/스크립트</td>
            <td class="t2">:</td>
            <td class="t3">            <textarea name="ad3code" rows="8" cols="70"><?php readfile($g['path_layout'].$d['layout']['dir'].'/_var/_ad3.txt')?></textarea></td>
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

    <div class="guide"></div>

    <span class="b">광고 4 (메인 콘텐츠 부분 상단 광고)</span> - 관리자 화면, 글쓰기 화면 및 메인화면에서는 표시하지 않습니다.
    <br />
    <br />

    <table>
        <tr>
            <td class="t1">광고의 형식</td>
            <td class="t2">:</td>
            <td class="t3"><label>
                <input type="radio" name="ad4type" value="0"<?php if($d['layout']['ad4type']=='0'):?> checked="checked"<?php endif ?> />
                광고 노출안함</label><label>
                <input type="radio" name="ad4type" value="1"<?php if($d['layout']['ad4type']=='1'):?> checked="checked"<?php endif ?> />
                이미지</label><label>
                <input type="radio" name="ad4type" value="2"<?php if($d['layout']['ad4type']=='2'):?> checked="checked"<?php endif ?> />
                플래쉬</label><label>
                <input type="radio" name="ad4type" value="3"<?php if($d['layout']['ad4type']=='3'):?> checked="checked"<?php endif ?> />
                HTML/스크립트</label></td>
        </tr>

        <tr>
            <td class="t1">이미지/링크</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile4" class="file" value="" />
            /
            <input type="text" name="ad4_imglink" class="input" value="<?php echo $d['layout']['ad4_imglink']?>" />
            <select name="ad4_imgtarget">
                <option value="_blank"<?php if($d['layout']['ad4_imgtarget']=='_blank'):?> selected="selected"<?php endif ?>>새창</option>
                <option value="_self"<?php if($d['layout']['ad4_imgtarget']=='_self'):?> selected="selected"<?php endif ?>>현재창</option>
            </select></td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad4_img'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <img src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad4_img']?>?<?php echo $date['totime']?>" alt="" />
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad4_img&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 이미지 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>
        <tr>
            <td class="t1">플래쉬</td>
            <td class="t2">:</td>
            <td class="t3">
            <input type="file" name="upfile41" class="file" value="" />
            </td>
        </tr>
        <?php if(is_file($g['path_layout'].$d['layout']['dir'].'/_var/'.$d['layout']['ad4_swf'])):?>
        <tr>
            <td></td>
            <td></td>
            <td class="t3">
            <br />
            <embed src="<?php echo $g['s'].'/layouts/'.$d['layout']['dir'].'/_var/'.$d['layout']['ad4_swf']?>"></embed>
            <br />
            <br />
            <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;_layoutAction=logodelete&amp;imgType=ad4_swf&amp;nowLayout=<?php echo $d['layout']['dir']?>" onclick="return hrefCheck(this,true,'정말로 삭제하시겠습니까?');">이 플래쉬 삭제하기</a>
            <br />
            <br />
            </td>
        </tr>
        <?php endif ?>

        <tr>
            <td class="t1">HTML/스크립트</td>
            <td class="t2">:</td>
            <td class="t3">            <textarea name="ad4code" rows="8" cols="70"><?php readfile($g['path_layout'].$d['layout']['dir'].'/_var/_ad4.txt')?></textarea></td>
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