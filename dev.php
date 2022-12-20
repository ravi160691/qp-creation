<?php
const key = 'chsuwphxkeuqckyxtcehqevtxxtvfwsz'; // 32 chars
const iv = 'boigdllvajnywxls'; // 16 chars
const method = 'aes-256-cbc';

function decryp($text)
{
    return openssl_decrypt($text, method, key, 0, iv);
}

function encryp($text)
{
    //   $text should be String
    return openssl_encrypt($text, method, key, 0, iv);
}


//$URL = 'https://devuca.ucanapply.com/onlineexam/public/index?key=ucaexam';
//$URL = 'https://ucademo.ucanapply.com/onlineexam/public/index.php?key=ucaexam';
$URL = 'https://nifttest2.ucanapply.com/onlineexam/public/index.php?key=ucaexam';

$encodeURL  = encryp($URL);
//print_r($encodeURL);die;
?>
<img src="https://image-charts.com/chart?chs=150x150&cht=qr&chl=<?php echo $encodeURL; ?>&choe=UTF-8" alt="image" class="img-thumbnail">