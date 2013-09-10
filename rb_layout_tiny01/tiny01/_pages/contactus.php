<div class="contact_left">
    <?php if($d['layout']['contactus_map']==1):
    ?><img src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['contactus_img']?>" alt="" /> <?php endif ?>
    <?php if($d['layout']['contactus_map']==2):
    ?><embed src="<?php echo $g['url_layout'].'/_var/'.$d['layout']['contactus_swf']?>"></embed>
    <?php endif ?>
    <?php if($d['layout']['contactus_map']==3) include $g['path_layout'].$d['layout']['dir'].'/_var/_contactus1.txt'
    ?>
</div>
<div class="contact_right">
    <?php include $g['path_layout'].$d['layout']['dir'].'/_var/_contactus2.txt'
    ?>
</div>

<div class="hr dotted clearfix">
    &nbsp;
</div>

<div class="contact_form">
    <form method='post' action="<?php echo $g['s']?>/" id='contact_form' onsubmit="return contactCheck(this);">
        <input type="hidden" name="r" value="<?php echo $r?>" />
        <input type="hidden" name="_layoutAction" value="contactus" />
        <input type="hidden" name="nowLayout" value="<?php echo $d['layout']['dir']?>" />
        <ul>
            <li class="clearfix">
                <label for="name">성함</label>
                <input type='text' name='name' id='name' />
                <div class="clear"></div>
            </li>
            <li class="clearfix">
                <label for="email">이메일</label>
                <input type='text' name='email' id='email' />
                <div class="clear"></div>
            </li>
            <li class="clearfix">
                <label for="phone">전화번호</label>
                <input type='text' name='phone' id='phone' />
                <div class="clear"></div>
            </li>
            <li class="clearfix">
                <label for="message">전하실 내용</label>
                <textarea name='message' id='message' rows="30" cols="30"></textarea>
                <div class="clear"></div>
            </li>
            <li class="clearfix">
                <label for="defaultReal">스팸방지코드</label>
                <input type='text' name='defaultReal' id='defaultReal' />
                <div class="clear"></div>
            </li>
            <li class="clearfix">
                <div id="button">
                    <input type='submit' id='send_message' class="button" value='쪽지 보내기' />
                </div>
            </li>
        </ul>
    </form>
</div>

<div class="clearfix">
    &nbsp;
</div>
