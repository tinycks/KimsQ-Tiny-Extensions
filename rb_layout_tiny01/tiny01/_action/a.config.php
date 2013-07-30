<?php
if (!defined('__KIMS__'))
    exit ;

checkAdmin(0);

$_tmpdfile = $g['path_layout'] . $nowLayout . '/_var/_var.php';
$d['layout'] = array();
include $_tmpdfile;

if ($changeType == 'theme') {
    $d['layout']['theme'] = $theme;
    $d['layout']['menunum'] = "4";
    $d['layout']['title_size'] = "34";
    $d['layout']['title_font'] = "Georgia";

    if ($theme == 'style01') {
        $d['layout']['title_t'] = "30";
        $d['layout']['title_b'] = "50";
        $d['layout']['title_color'] = "#333333";
        $d['layout']['height_header'] = "90";
        $d['layout']['bg_header'] = "#ffffff";
        $d['layout']['height_header_bt'] = "0";
        $d['layout']['bg_header_bt'] = "#DF1233";
        $d['layout']['height_header_bb'] = "0";
        $d['layout']['bg_header_bb'] = "#4A4646";
        $d['layout']['memberlink_color'] = "#333333";
        $d['layout']['split_color'] = "#c0c0c0";
        $d['layout']['search_border'] = "#B0B0B0";
    }

    if ($theme == 'style_white') {
        $d['layout']['title_t'] = "30";
        $d['layout']['title_b'] = "50";
        $d['layout']['title_color'] = "#595959";
        $d['layout']['height_header'] = "90";
        $d['layout']['bg_header'] = "#ffffff";
        $d['layout']['height_header_bt'] = "0";
        $d['layout']['bg_header_bt'] = "#DF1233";
        $d['layout']['height_header_bb'] = "2";
        $d['layout']['bg_header_bb'] = "#eeeeee";
        $d['layout']['memberlink_color'] = "#595959";
        $d['layout']['split_color'] = "#c0c0c0";
        $d['layout']['search_border'] = "#B0B0B0";
    }

    if ($theme == 'style_black') {
        $d['layout']['title_t'] = "30";
        $d['layout']['title_b'] = "50";
        $d['layout']['title_color'] = "#ffffff";
        $d['layout']['height_header'] = "90";
        $d['layout']['bg_header'] = "#000000";
        $d['layout']['height_header_bt'] = "0";
        $d['layout']['bg_header_bt'] = "#DF1233";
        $d['layout']['height_header_bb'] = "0";
        $d['layout']['bg_header_bb'] = "#4A4646";
        $d['layout']['memberlink_color'] = "#ffffff";
        $d['layout']['split_color'] = "#c0c0c0";
        $d['layout']['search_border'] = "#B0B0B0";
    }
}

if ($changeType == 'display') {
    $d['layout']['dsp_login'] = $dsp_login;
    $d['layout']['dsp_search'] = $dsp_search;
    $d['layout']['dsp_topmenu'] = $dsp_topmenu;
    $d['layout']['dsp_side'] = $dsp_side;
    $d['layout']['dsp_side_login'] = $dsp_side_login;
    $d['layout']['dsp_side_menu'] = $dsp_side_menu;
    $d['layout']['dsp_side_menuhide'] = $dsp_side_menuhide;
    $d['layout']['dsp_side_hot'] = $dsp_side_hot;
    $d['layout']['dsp_side_hotnum'] = $dsp_side_hotnum;
    $d['layout']['dsp_side_hotnum_day'] = $dsp_side_hotnum_day;
    $d['layout']['paper_day'] = $paper_day;
    $d['layout']['dsp_breadcrumbs'] = $dsp_breadcrumbs;
    $d['layout']['dsp_familysite'] = $dsp_familysite;
    $d['layout']['dsp_socialbutton'] = $dsp_socialbutton;
}

if ($changeType == 'menu') {
    $d['layout']['menunum'] = $menunum;
    $d['layout']['homestr'] = trim($homestr);
    $d['layout']['homestr_use'] = $homestr_use;
    $d['layout']['contactus_use'] = $contactus_use;
    $d['layout']['menu_subnum'] = $menu_subnum;
    $d['layout']['menu_substyle'] = $menu_substyle;
    $d['layout']['menu_subfast'] = $menu_subfast;
}

if ($changeType == 'front') {
    if ($d['layout']['mainType_layout'] && $mainType_layout) {
        $d['layout']['carousel'] = $carousel;
        $d['layout']['bbs_display'] = $bbs_display;
        $d['layout']['bbs1'] = $bbs1;
        $d['layout']['sort1'] = $sort1;
        $d['layout']['bbs1_day'] = trim($bbs1_day);
        $d['layout']['bbs1_num'] = trim($bbs1_num);
    }
    $d['layout']['mainType_layout'] = $mainType_layout;
    $d['layout']['mainType_rb'] = $mainType_rb;
}

if ($changeType == 'detail') {
    $_newupload = false;
    $tmpname = $_FILES['upfile']['tmp_name'];
    $realname = $_FILES['upfile']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'logo.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['imglogo'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', 'gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $isize = getimagesize($saveFile2);

        $d['layout']['imglogo'] = $photo;
        $d['layout']['imglogo_w'] = $isize[0];
        $d['layout']['imglogo_h'] = $isize[1];
        $_newupload = true;
    }

    $tmpname = $_FILES['upfile1']['tmp_name'];
    $realname = $_FILES['upfile1']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'bgtitle.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['bg'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', 'gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);

        $d['layout']['bg'] = $photo;
    }

    $d['layout']['height_header'] = trim($height_header);
    $d['layout']['title'] = trim($title);
    $d['layout']['title_t'] = trim($title_t);
    $d['layout']['title_b'] = trim($title_b);
    $d['layout']['title_ad'] = trim($title_ad);
    $d['layout']['title_size'] = trim($title_size);
    $d['layout']['title_font'] = trim($title_font);
    $d['layout']['imglogo_use'] = is_file($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['imglogo']) ? $imglogo_use : 0;
    $d['layout']['bg_use'] = $bg_use;
    $d['layout']['bg_o'] = $bg_o;
    $d['layout']['title_color'] = $title_color;
    $d['layout']['memberlink_color'] = $memberlink_color;
    $d['layout']['split_color'] = $split_color;
    $d['layout']['bg_header'] = trim($bg_header);
    $d['layout']['height_header_bt'] = trim($height_header_bt);
    $d['layout']['bg_header_bt'] = trim($bg_header_bt);
    $d['layout']['height_header_bb'] = trim($height_header_bb);
    $d['layout']['bg_header_bb'] = trim($bg_header_bb);
    $d['layout']['search_border'] = trim($search_border);

    if (!$_newupload) {
        $d['layout']['imglogo_w'] = trim($imglogo_w);
        $d['layout']['imglogo_h'] = trim($imglogo_h);
    }

    $_adressfile = $g['path_layout'] . $nowLayout . '/_var/_address.txt';
    $fp = fopen($_adressfile, 'w');
    fwrite($fp, trim(stripslashes($address)));
    fclose($fp);

    @chmod($_adressfile, 0707);

}
if ($changeType == 'ad') {
    $tmpname = $_FILES['upfile1']['tmp_name'];
    $realname = $_FILES['upfile1']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'ad1.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad1_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['ad1_img'] = $photo;
    }
    $tmpname = $_FILES['upfile11']['tmp_name'];
    $realname = $_FILES['upfile11']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'ad1.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad1_swf'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[swf]', $fileExt)) {
            getLink('', '', '플래쉬는 swf 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['ad1_swf'] = $photo;
    }

    $d['layout']['ad1type'] = $ad1type;
    $d['layout']['ad1_imglink'] = trim($ad1_imglink);
    $d['layout']['ad1_imgtarget'] = $ad1_imgtarget;

    $_adfile = $g['path_layout'] . $nowLayout . '/_var/_ad1.txt';
    $fp = fopen($_adfile, 'w');
    fwrite($fp, trim(stripslashes($ad1code)));
    fclose($fp);

    @chmod($_adfile, 0707);

    $tmpname = $_FILES['upfile2']['tmp_name'];
    $realname = $_FILES['upfile2']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'ad2.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad2_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['ad2_img'] = $photo;
    }
    $tmpname = $_FILES['upfile21']['tmp_name'];
    $realname = $_FILES['upfile21']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'ad2.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad2_swf'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[swf]', $fileExt)) {
            getLink('', '', '플래쉬는 swf 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['ad2_swf'] = $photo;
    }

    $d['layout']['ad2type'] = $ad2type;
    $d['layout']['ad2_imglink'] = trim($ad2_imglink);
    $d['layout']['ad2_imgtarget'] = $ad2_imgtarget;

    $_adfile = $g['path_layout'] . $nowLayout . '/_var/_ad2.txt';
    $fp = fopen($_adfile, 'w');
    fwrite($fp, trim(stripslashes($ad2code)));
    fclose($fp);

    @chmod($_adfile, 0707);

    $tmpname = $_FILES['upfile3']['tmp_name'];
    $realname = $_FILES['upfile3']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'ad3.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad3_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['ad3_img'] = $photo;
    }
    $tmpname = $_FILES['upfile31']['tmp_name'];
    $realname = $_FILES['upfile31']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'ad3.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad3_swf'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[swf]', $fileExt)) {
            getLink('', '', '플래쉬는 swf 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['ad3_swf'] = $photo;
    }

    $d['layout']['ad3type'] = $ad3type;
    $d['layout']['ad3_imglink'] = trim($ad3_imglink);
    $d['layout']['ad3_imgtarget'] = $ad3_imgtarget;

    $_adfile = $g['path_layout'] . $nowLayout . '/_var/_ad3.txt';
    $fp = fopen($_adfile, 'w');
    fwrite($fp, trim(stripslashes($ad3code)));
    fclose($fp);

    @chmod($_adfile, 0707);

    $tmpname = $_FILES['upfile4']['tmp_name'];
    $realname = $_FILES['upfile4']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'ad4.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad4_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['ad4_img'] = $photo;
    }
    $tmpname = $_FILES['upfile41']['tmp_name'];
    $realname = $_FILES['upfile41']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'ad4.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad4_swf'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[swf]', $fileExt)) {
            getLink('', '', '플래쉬는 swf 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['ad4_swf'] = $photo;
    }

    $d['layout']['ad4type'] = $ad4type;
    $d['layout']['ad4_imglink'] = trim($ad4_imglink);
    $d['layout']['ad4_imgtarget'] = $ad4_imgtarget;

    $_adfile = $g['path_layout'] . $nowLayout . '/_var/_ad4.txt';
    $fp = fopen($_adfile, 'w');
    fwrite($fp, trim(stripslashes($ad4code)));
    fclose($fp);

    @chmod($_adfile, 0707);
}
if ($changeType == 'carousel') {
    $d['layout']['carousel1type'] = $carousel1type;
    $d['layout']['carousel1_link'] = trim($carousel1_link);
    $d['layout']['carousel1_target'] = $carousel1_target;
    $d['layout']['carousel1_txt'] = $carousel1_txt;

    $tmpname = $_FILES['upfile1']['tmp_name'];
    $realname = $_FILES['upfile1']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'carousel1.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel1_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['carousel1_img'] = $photo;
    }

    $d['layout']['carousel2type'] = $carousel2type;
    $d['layout']['carousel2_link'] = trim($carousel2_link);
    $d['layout']['carousel2_target'] = $carousel2_target;
    $d['layout']['carousel2_txt'] = $carousel2_txt;

    $tmpname = $_FILES['upfile2']['tmp_name'];
    $realname = $_FILES['upfile2']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'carousel2.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel2_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['carousel2_img'] = $photo;
    }

    $d['layout']['carousel3type'] = $carousel3type;
    $d['layout']['carousel3_link'] = trim($carousel3_link);
    $d['layout']['carousel3_target'] = $carousel3_target;
    $d['layout']['carousel3_txt'] = $carousel3_txt;

    $tmpname = $_FILES['upfile3']['tmp_name'];
    $realname = $_FILES['upfile3']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'carousel3.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel3_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['carousel3_img'] = $photo;
    }

    $d['layout']['carousel4type'] = $carousel4type;
    $d['layout']['carousel4_link'] = trim($carousel4_link);
    $d['layout']['carousel4_target'] = $carousel4_target;
    $d['layout']['carousel4_txt'] = $carousel4_txt;

    $tmpname = $_FILES['upfile4']['tmp_name'];
    $realname = $_FILES['upfile4']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'carousel4.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel4_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['carousel4_img'] = $photo;
    }

    $d['layout']['carousel5type'] = $carousel5type;
    $d['layout']['carousel5_link'] = trim($carousel5_link);
    $d['layout']['carousel5_target'] = $carousel5_target;
    $d['layout']['carousel5_txt'] = $carousel5_txt;

    $tmpname = $_FILES['upfile5']['tmp_name'];
    $realname = $_FILES['upfile5']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'carousel5.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel5_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['carousel5_img'] = $photo;
    }

    $d['layout']['carousel6type'] = $carousel6type;
    $d['layout']['carousel6_link'] = trim($carousel6_link);
    $d['layout']['carousel6_target'] = $carousel6_target;
    $d['layout']['carousel6_txt'] = $carousel6_txt;

    $tmpname = $_FILES['upfile6']['tmp_name'];
    $realname = $_FILES['upfile6']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'carousel6.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel6_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['carousel6_img'] = $photo;
    }

}
if ($changeType == 'contactus') {
    $tmpname = $_FILES['upfile1']['tmp_name'];
    $realname = $_FILES['upfile1']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'contactus.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['contactus_img'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[gif][jpg][png]', $fileExt)) {
            getLink('', '', '이미지는 gif/jpg/png 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['contactus_img'] = $photo;
    }
    $tmpname = $_FILES['upfile11']['tmp_name'];
    $realname = $_FILES['upfile11']['name'];
    $fileExt = strtolower(getExt($realname));
    $fileExt = $fileExt == 'jpeg' ? 'jpg' : $fileExt;
    $photo = 'contactus.' . $fileExt;
    $saveFile1 = $g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['contactus_swf'];
    $saveFile2 = $g['path_layout'] . $nowLayout . '/_var/' . $photo;

    if (is_uploaded_file($tmpname)) {
        if (!strstr('[swf]', $fileExt)) {
            getLink('', '', '플래쉬는 swf 파일만 등록할 수 있습니다.', '');
        }
        if (is_file($saveFile1)) {
            unlink($saveFile1);
        }

        move_uploaded_file($tmpname, $saveFile2);
        @chmod($saveFile2, 0707);
        $d['layout']['contactus_swf'] = $photo;
    }

    $d['layout']['contactus_name'] = $contactus_name;
    $d['layout']['contactus_user'] = trim($contactus_user);
    $d['layout']['contactus_use'] = $contactus_use;
    $d['layout']['contactus_map'] = $contactus_map;

    $_file = $g['path_layout'] . $nowLayout . '/_var/_contactus1.txt';
    $fp = fopen($_file, 'w');
    fwrite($fp, trim(stripslashes($contactus1code)));
    fclose($fp);

    @chmod($_file, 0707);

    $_file = $g['path_layout'] . $nowLayout . '/_var/_contactus2.txt';
    $fp = fopen($_file, 'w');
    fwrite($fp, trim(stripslashes($contactus2code)));
    fclose($fp);

    @chmod($_file, 0707);
}
if ($changeType == 'analytics') {
    $d['layout']['analytics_1'] = $analytics_1;

    $_code1file = $g['path_layout'] . $nowLayout . '/_var/_analytics_1.txt';
    $fp = fopen($_code1file, 'w');
    fwrite($fp, trim(stripslashes($code1)));
    fclose($fp);

    @chmod($_code1file, 0707);

    $d['layout']['analytics_2'] = $analytics_2;

    $_code2file = $g['path_layout'] . $nowLayout . '/_var/_analytics_2.txt';
    $fp = fopen($_code2file, 'w');
    fwrite($fp, trim(stripslashes($code2)));
    fclose($fp);

    @chmod($_code2file, 0707);
}
if ($changeType == 'sns') {
    $d['layout']['sns_hide'] = $sns_hide;
    $d['layout']['sns_t'] = $sns_t;
    $d['layout']['sns_f'] = $sns_f;
    $d['layout']['sns_m'] = $sns_m;
    $d['layout']['sns_y'] = $sns_y;
}

$fp = fopen($_tmpdfile, 'w');
fwrite($fp, "<?php\n");
foreach ($d['layout'] as $key => $val) {
    fwrite($fp, "\$d['layout']['" . $key . "'] = \"" . $val . "\";\n");
}
fwrite($fp, "?>");
fclose($fp);
@chmod($_tmpdfile, 0707);

getLink('reload', 'parent.', '', '');
?>