<?php
if (!defined('__KIMS__'))
    exit ;

//20130715 타이니 : PHP의 버전이 64bit 인지 32bit 인지 확인해서 해쉬함수 다르게 구현함
if (PHP_INT_MAX == 9223372036854775807) {//이게 64비트

    function rpHash($value) {
        $hash = 5381;
        $value = strtoupper($value);
        for ($i = 0; $i < strlen($value); $i++) {
            $hash = (leftShift32($hash, 5) + $hash) + ord(substr($value, $i));
        }
        return $hash;
    }

    // Perform a 32bit left shift
    function leftShift32($number, $steps) {
        // convert to binary (string)
        $binary = decbin($number);
        // left-pad with 0's if necessary
        $binary = str_pad($binary, 32, "0", STR_PAD_LEFT);
        // left shift manually
        $binary = $binary . str_repeat("0", $steps);
        // get the last 32 bits
        $binary = substr($binary, strlen($binary) - 32);
        // if it's a positive number return it
        // otherwise return the 2's complement
        return ($binary{0} == "0" ? bindec($binary) : -(pow(2, 31) - bindec(substr($binary, 1))));
    }

} else {//이건 32비트

    function rpHash($value) {
        $hash = 5381;
        $value = strtoupper($value);
        for ($i = 0; $i < strlen($value); $i++) {
            $hash = (($hash<<5) + $hash) + ord(substr($value, $i));
        }
        return $hash;
    }

}

if (rpHash($_POST['defaultReal']) != $_POST['defaultRealHash']) {
    getLink('', '', '스팸방지코드를 틀리게 입력하셨습니다.', '');
}

if (!$d['layout']['contactus_user']) {
    getLink('', '', '연락 받을 관리자 아이디가 지정되지 않았습니다.\n관리자에게 문의하십시오.', '');
}

$d['member']['login_emailid'] = (strpos($d['layout']['contactus_user'], '@')) ? 1 : 0;

if ($d['member']['login_emailid']) {
    $M1 = getDbData($table['s_mbrdata'], "email='" . $d['layout']['contactus_user'] . "'", '*');
    $M = getUidData($table['s_mbrid'], $M1['memberuid']);
} else {
    $M = getDbData($table['s_mbrid'], "id='" . $d['layout']['contactus_user'] . "'", '*');
}

if (!$M['uid'])
    getLink('', '', '연락 받을 관리자 아이디가 올바르지 않습니다.\n관리자에게 문의하십시오.', '');

$msg = '(이름: ' . $_POST['name'] . ') \n' . '(이메일: ' . $_POST['email'] . ') \n' . '(전화번호: ' . $_POST['phone'] . ') \n' . '[내용] \n ' . $_POST['message'];
$QKEY = 'my_mbruid,by_mbruid,inbox,content,html,d_regis,d_read';
$QVAL = "'" . $M['uid'] . "','" . $my['uid'] . "','1','" . $msg . "','text','" . $date['totime'] . "','0'";
getDbInsert($table['s_paper'], $QKEY, $QVAL);
getDbUpdate($table['s_mbrdata'], 'is_paper=1', 'memberuid=' . $M['uid']);

getLink('reload', 'parent.', '관리자에게 Contact 메시지를 발송했습니다.', '');
?>