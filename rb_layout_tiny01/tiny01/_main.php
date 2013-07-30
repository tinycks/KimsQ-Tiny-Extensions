<?php
//20130715 타이니 : 코어의 쪽지 버그를 코어 안건드리고 레이아웃 차원에서 보완 (향후 코어 업데이트 할 때 영향 없도록)
if ($my['uid']) {
    $NUM_Paper = getDbRows($table['s_paper'], 'my_mbruid=' . $my['uid'] . " and inbox=1 and (d_read='0' or d_read='')");
    if ($NUM_Paper && !$my['is_paper']) {
        getDbUpdate($table['s_mbrdata'], 'is_paper=1', 'memberuid=' . $my['uid']);
    }
}

function getLayoutLogo($layout) {
    if ($layout['imglogo_use']) {
        return '<a href="' . $GLOBALS['g']['s'] . '/?r=' . $GLOBALS['r'] . '" class="_logo_img"><img src="' . $GLOBALS['g']['s'] . '/layouts/' . $layout['dir'] . '/_var/' . $layout['imglogo'] . '" width="' . $layout['imglogo_w'] . '" height="' . $layout['imglogo_h'] . '" alt="" /></a>';
    } else {
        return '<h1 class="_logo_txt"><a id="_layout_title_color_" href="' . $GLOBALS['g']['s'] . '/?r=' . $GLOBALS['r'] . '" style="font-family:' . $layout['title_font'] . ';font-size:' . $layout['title_size'] . 'px;color:' . $layout['title_color'] . ';">' . $layout['title'] . '</a></h1>';
    }
}

include $g['path_layout'] . $d['layout']['dir'] . '/_var/_var.php';

//20130711 타이니 : 레이아웃 추가페이지 사용 시 코어에서 받쳐주지 못하는 미진한 부분 추가 (메뉴의 이름이 정해지지 않아 여러 문제 발생시킴)
if (isset($_themePage) && !$_HM['name']) {
    switch ($_themePage) {
        case 'contactus' :
            $_themePageName = $d['layout']['contactus_name'];
            break;
        case 'sample' :
            $_themePageName = 'Sample Theme Page';
            break;

        default :
            $_themePageName = '레이아웃 추가 페이지';
            break;
    }
    $_HM['name'] = $_themePageName;
    $g['location'] .= ' &gt; <a href="' . $g['s'] . '/?r=' . $r . '&_themePage=' . $_themePage . '">' . $_themePageName . '</a>';
}

if (isset($_layoutAction)) {
    include $g['path_layout'] . $d['layout']['dir'] . '/_action/a.' . $_layoutAction . '.php';
    exit ;
}

if ($d['layout']['bg_use'])
    $d['layout']['_bg'] = ' style="background:url(\'' . $g['s'] . '/layouts/' . $d['layout']['dir'] . '/_var/' . $d['layout']['bg'] . '\') ' . $d['layout']['bg_o'] . ';"';
if ($d['layout']['message_color'])
    $d['layout']['_message_color'] = ' style="color:' . $d['layout']['message_color'] . ';"';
if ($d['layout']['memberlink_color'])
    $d['layout']['_memberlink_color'] = ' style="color:' . $d['layout']['memberlink_color'] . ';"';

//$d['layout']['_is_ownmain'] = $d['layout']['mainType_layout'] && !$system && !$_themePage && $_HP['id'] == 'main';
//$d['layout']['_is_content'] = $d['layout']['mainType_rb'] || $system || $_themePage || $_HP['id'] != 'main';
//20130723 타이니 : 메인페이지 (시작페이지) 로 페이지 코드 main 만 적용되고 있음. 사용자가 다른 페이지를 시작페이지로 설정하거나 코드를 변경하면 레이아웃 메인 사용이 안되는 현상 수정.
$d['layout']['_is_ownmain'] = $d['layout']['mainType_layout'] && !$system && !$_themePage && $_HP['uid'] == $_HS['startpage'];
$d['layout']['_is_content'] = $d['layout']['mainType_rb'] || $system || $_themePage || $_HP['uid'] != $_HS['startpage'];

if (isset($_themeConfig)) {
    if (!$my['admin'])
        getLink($g['s'] . '/?r=' . $r, '', '권한이 없습니다.', '');
    $g['main'] = $g['path_layout'] . $d['layout']['dir'] . '/_admin/main.php';

    $g['dir_module_mode'] = $g['path_layout'] . $d['layout']['dir'] . '/_admin/main';
    $g['url_module_mode'] = $g['s'] . '/layouts/' . $d['layout']['dir'] . '/_admin/main';
    $d['layout']['_twhite'] = false;
}
if (isset($_themePage)) {
    $g['main'] = $g['path_layout'] . $d['layout']['dir'] . '/_pages/' . $_themePage . '.php';
    if (strpos($_themePage, 'jax/')) {
        include $g['main'];
        exit ;
    } else {
        $g['dir_module_mode'] = $g['path_layout'] . $d['layout']['dir'] . '/_pages/' . $_themePage;
        $g['url_module_mode'] = $g['s'] . '/layouts/' . $d['layout']['dir'] . '/_pages/' . $_themePage;
    }
}
?>