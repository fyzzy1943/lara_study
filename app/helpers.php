<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/12
 * Time: 15:44
 */

function echoO()
{
    echo 0;
}

function getQnResourceUrl($key, $expires = 86400)
{
    $key = trim($key, '/');
    $sk = 'ZRNWsYS6imGiwkNTHeE6hGDiMY6NZn4wRpnTHKTX';
    $ak = 'HRr0ChITGKoo4j_imIhQZkF__BlZBfnhhvZXunnB';
    $domain = '7xp8vc.com1.z0.glb.clouddn.com';

    $downloadUrl = 'http://' . $domain . '/' . $key;
    $expires = time() + $expires;
    $downloadUrl .= '?e=' . $expires;
    $sign = hash_hmac('sha1', $downloadUrl, $sk, true);
    $encodedSign = strtr(base64_encode($sign), '+/', '-_');
    $token = $ak . ':' . $encodedSign;
    $readDownloadUrl = $downloadUrl . '&token=' . $token;

    return $readDownloadUrl;
}