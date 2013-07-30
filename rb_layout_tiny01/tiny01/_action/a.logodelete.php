<?php
if (!defined('__KIMS__'))
    exit ;

checkAdmin(0);

$_tmpdfile = $g['path_layout'] . $nowLayout . '/_var/_var.php';
$d['layout'] = array();
include $_tmpdfile;

if ($imgType == 'logo') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['imglogo']);

    $d['layout']['imglogo'] = '';
    $d['layout']['imglogo_w'] = 0;
    $d['layout']['imglogo_h'] = 0;
    $d['layout']['imglogo_use'] = '';
}
if ($imgType == 'bg') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['bg']);

    $d['layout']['bg'] = '';
    $d['layout']['bg_use'] = '';
}
if ($imgType == 'ad1_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad1_img']);

    $d['layout']['ad1_img'] = '';
}
if ($imgType == 'ad1_swf') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad1_swf']);

    $d['layout']['ad1_swf'] = '';
}
if ($imgType == 'ad2_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad2_img']);

    $d['layout']['ad2_img'] = '';
}
if ($imgType == 'ad2_swf') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad2_swf']);

    $d['layout']['ad2_swf'] = '';
}
if ($imgType == 'ad3_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad3_img']);

    $d['layout']['ad3_img'] = '';
}
if ($imgType == 'ad3_swf') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad3_swf']);

    $d['layout']['ad3_swf'] = '';
}
if ($imgType == 'ad4_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad4_img']);

    $d['layout']['ad4_img'] = '';
}
if ($imgType == 'ad4_swf') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['ad4_swf']);

    $d['layout']['ad4_swf'] = '';
}
if ($imgType == 'carousel1_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel1_img']);

    $d['layout']['carousel1_img'] = '';
}
if ($imgType == 'carousel2_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel2_img']);

    $d['layout']['carousel2_img'] = '';
}
if ($imgType == 'carousel3_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel3_img']);

    $d['layout']['carousel3_img'] = '';
}
if ($imgType == 'carousel4_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel4_img']);

    $d['layout']['carousel4_img'] = '';
}
if ($imgType == 'carousel5_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel5_img']);

    $d['layout']['carousel5_img'] = '';
}
if ($imgType == 'carousel6_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['carousel6_img']);

    $d['layout']['carousel6_img'] = '';
}
if ($imgType == 'contactus_img') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['contactus_img']);

    $d['layout']['contactus_img'] = '';
}
if ($imgType == 'contactus_swf') {
    @unlink($g['path_layout'] . $nowLayout . '/_var/' . $d['layout']['contactus_swf']);

    $d['layout']['contactus_swf'] = '';
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