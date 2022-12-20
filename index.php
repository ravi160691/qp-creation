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


$URL = 'https://ucasass.ucanapply.com/onlineexam/public/student/second-device-checking/eyJpdiI6Imx3Yk9KcEs1eEZzWG5sQW11T0RNOWc9PSIsInZhbHVlIjoiWWlXN0hlTlM5Rytoa0VSSlVEeUVuZmQwMHFQZDlrdVR3Z1VocndnY01CYz0iLCJtYWMiOiIxMTc0YjdjYTJiOTkzOWI1YmIyZmEzYjlkNTc1NzdkZWRkNGY4NWE1M2M1M2Q4YzBiNGMwMDE0NjNjNjBmODQ2In0=/eyJpdiI6Imw4VldHTjMyZHFzNEpyQlRRNW9LbUE9PSIsInZhbHVlIjoicS9PZTdUVWRvOTVmTFRSOHUxZGRSZz09IiwibWFjIjoiNjI3NDU4MmFmODEwZmIxYTY1ZmQyZWFhZGJlYTc4M2M1NjEyYzkyNWI1NjQ2MmQ1MTNkYzFiM2U2ZDM5NTg1NSJ9/eyJpdiI6Inl2ZXk3R3FpVVluVCtjNGF2U1JPcVE9PSIsInZhbHVlIjoiRm95NGFhZEpvQUZOaWhVZUhrZjhQdz09IiwibWFjIjoiYjg2ZmNmMTdiMzE4MzZlNmFjNmI2YmZhMzBhOGZmNjU4ZDRiMmYwODhhOWMzOWY5NmI0ZTIyODFlOTI5NDQ3ZCJ9?key=ucaexam';
$encodeURL  = encryp($URL);
//print_r($encodeURL);die;
?>
<img src="https://image-charts.com/chart?chs=150x150&cht=qr&chl=<?php echo $encodeURL; ?>&choe=UTF-8" alt="image" class="img-thumbnail">