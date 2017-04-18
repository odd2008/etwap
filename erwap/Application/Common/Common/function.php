<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/28
 * Time: 16:54
 */
function check_code($code,$id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code,$id);
}

/**
 * 系统加密方法
 * @param string $data 要加密的字符串
 * @param string $key  加密钥
 * @param int $expire  过期时间 单位 秒
 * return string
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function think_encrypt($data, $key = '', $expire = 0) {
    $key  = md5(empty($key) ? C('DATA_AUTH_KEY') : $key);
    $data = base64_encode($data);
    $x    = 0;
    $len  = strlen($data);
    $l    = strlen($key);
    $char = '';
    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) $x = 0;
        $char .= substr($key, $x, 1);
        $x++;
    }
    $str = sprintf('%010d', $expire ? $expire + time():0);
    for ($i = 0; $i < $len; $i++) {
        $str .= chr(ord(substr($data, $i, 1)) + (ord(substr($char, $i, 1)))%256);
    }
    return str_replace(array('+','/','='),array('-','_',''),base64_encode($str));
}
/**
 * 系统解密方法
 * @param  string $data 要解的字符串 （必须是think_encrypt方法加密的字符串）
 * @param  string $key  加密密钥
 * return string
 * @author 当苗儿 <zuojiazi@vip.qq.com>
 */
function think_decrypt($data, $key = ''){
    $key    = md5(empty($key) ? C('DATA_AUTH_KEY') : $key);
    $data   = str_replace(array('-','_'),array('+','/'),$data);
    $mod4   = strlen($data) % 4;
    if ($mod4) {
        $data .= substr('====', $mod4);
    }
    $data   = base64_decode($data);
    $expire = substr($data,0,10);
    $data   = substr($data,10);
    if($expire > 0 && $expire < time()) {
        return '';
    }
    $x      = 0;
    $len    = strlen($data);
    $l      = strlen($key);
    $char   = $str = '';
    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) $x = 0;
        $char .= substr($key, $x, 1);
        $x++;
    }
    for ($i = 0; $i < $len; $i++) {
        if (ord(substr($data, $i, 1))<ord(substr($char, $i, 1))) {
            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        }else{
            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return base64_decode($str);
}

/**
 * 提交短信
 * @param $content 发送短信内容
 * @param $phone 发送手机号码
 * @return mixed 返回状态值
 */
function sms($content,$phone){
    $data['userid'] = 3303;
    $data['account'] = 'giy20160909';
    $data['password'] = '123456';
    $data['content'] = '【儿童挂号网】'.urlencode($content); //短信内容需要用urlencode编码下
    $data['mobile'] = $phone;
    $data['sendtime'] = null; //不定时发送，值为0，定时发送，输入格式YYYYMMDDHHmmss的日期值
    $url='http://121.43.192.197:8888/sms.aspx?action=send';
    $o='';
    foreach ($data as $k=>$v)
    {
        $o.="$k=".urlencode($v).'&';
    }
    $data=substr($o,0,-1);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果需要将结果直接返回到变量里，那加上这句。
    $result = curl_exec($ch);//返回xml格式
    $data =simplexml_load_string($result);//转化为类
    $json =json_encode($data);//转化为json
    $arr=json_decode($json,true);//json转化为数组；
    return $arr['successCounts'];
}
/**
 ** 截取中文字符串
 **/
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true){
    if(function_exists("mb_substr")){
        $slice= mb_substr($str, $start, $length, $charset);
    }elseif(function_exists('iconv_substr')) {
        $slice= iconv_substr($str,$start,$length,$charset);
    }else{
        $re['utf-8'] = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef][x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";
        $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";
        $re['gbk'] = "/[x01-x7f]|[x81-xfe][x40-xfe]/";
        $re['big5'] = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
    }
    $fix='';
    if(strlen($slice) < strlen($str)){
        $fix='...';
    }
    return $suffix ? $slice.$fix : $slice;
}

/**
 * PHP清除html、css、js格式并去除空格的PHP函数,并具有截取UTF-8字符串的作用
 */

function cutstr_html($string, $sublen){

    $string = strip_tags($string);
    $string = preg_replace ('/&lt;/is', '', $string);
    $string = preg_replace ('/p&gt;/is', '', $string);
    $string = preg_replace ('/div&gt;/is', '', $string);
    $string = preg_replace ('/&amp;/is', '', $string);
    $string = preg_replace ('/&quot;/is', '', $string);
    $string = preg_replace ('/&nbsp;/is', '', $string);

    $string = preg_replace ('/\n/is', '', $string);

    $string = preg_replace ('/ |　/is', '', $string);

    $string = preg_replace ('/&nbsp;/is', '', $string);

    preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $t_string);

    if(count($t_string[0]) - 0 > $sublen) $string = join('', array_slice($t_string[0], 0, $sublen))."…";

    else $string = join('', array_slice($t_string[0], 0, $sublen));

    return $string;

}
//随机产生六位数密码Begin
function randStr($len=6,$format='ALL') {
    switch($format){
        case 'NUMBER':
            $chars='0123456789'; break;
    }
    mt_srand((double)microtime()*1000000*getmypid());
    $number="";
    while(strlen($number)<$len)
        $number.=substr($chars,(mt_rand()%strlen($chars)),1);
    return $number;
}


/*/
# 函数功能：计算身份证号码中的检校码
# 函数名称：idcard_verify_number
# 参数表 ：string $idcard_base 身份证号码的前十七位
# 返回值 ：string 检校码
# 更新时间：Fri Mar 28 09:50:19 CST 2008
*/
function idcard_verify_number($idcard_base){
    if (strlen($idcard_base) != 17){
        return false;
    }
    $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2); //debug 加权因子
    $verify_number_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'); //debug 校验码对应值
    $checksum = 0;
    for ($i = 0; $i < strlen($idcard_base); $i++){
        $checksum += substr($idcard_base, $i, 1) * $factor[$i];
    }
    $mod = $checksum % 11;
    $verify_number = $verify_number_list[$mod];
    return $verify_number;
}
/*/
# 函数功能：将15位身份证升级到18位
# 函数名称：idcard_15to18
# 参数表 ：string $idcard 十五位身份证号码
# 返回值 ：string
# 更新时间：Fri Mar 28 09:49:13 CST 2008
/*/
function idcard_15to18($idcard){
    if (strlen($idcard) != 15){
        return false;
    }else{// 如果身份证顺序码是996 997 998 999，这些是为百岁以上老人的特殊编码
        if (array_search(substr($idcard, 12, 3), array('996', '997', '998', '999')) !== false){
            $idcard = substr($idcard, 0, 6) . '18'. substr($idcard, 6, 9);
        }else{
            $idcard = substr($idcard, 0, 6) . '19'. substr($idcard, 6, 9);
        }
    }
    $idcard = $idcard . idcard_verify_number($idcard);
    return $idcard;
}
/*/
# 函数功能：18位身份证校验码有效性检查
# 函数名称：idcard_checksum18
# 参数表 ：string $idcard 十八位身份证号码
# 返回值 ：bool
# 更新时间：Fri Mar 28 09:48:36 CST 2008
/*/
function idcard_checksum18($idcard){
    if (strlen($idcard) != 18){ return false; }
    $idcard_base = substr($idcard, 0, 17);
    if (idcard_verify_number($idcard_base) != strtoupper(substr($idcard, 17, 1))){
        return false;
    }else{
        return true;
    }
}
/*/
# 函数功能：身份证号码检查接口函数
# 函数名称：check_id
# 参数表 ：string $idcard 身份证号码
# 返回值 ：bool 是否正确
# 更新时间：Fri Mar 28 09:47:43 CST 2008
/*/
function check_id($idcard) {
    if(strlen($idcard) == 15 || strlen($idcard) == 18){
        if(strlen($idcard) == 15){
            $idcard = idcard_15to18($idcard);
        }
        if(idcard_checksum18($idcard)){
             return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
