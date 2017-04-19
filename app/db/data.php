<?php
  $user_agent   =  $_SERVER['HTTP_USER_AGENT'];

  function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    if (!empty($_GET['ip'])) { // це для себе щоб тестувать
      $ipaddress = $_GET['ip'];
    }

    return $ipaddress;
  }


  if (isset($_COOKIE["__utmz_gtm"])) {
    $cookie_utmz = $_COOKIE["__utmz_gtm"];
    list($utmcsr, $utmccn, $utmcmd) = split('[|]', $cookie_utmz);

    $utmcsr = split('[=]', $utmcsr);
    $utmcsr = $utmcsr[1];

    $utmccn = split('[=]', $utmccn);
    $utmccn = $utmccn[1];

    $utmcmd = split('[=]', $utmcmd);
    $utmcmd = $utmcmd[1];
  }



  $aff_sub = isset($_GET['aff_sub']) ? $_GET['aff_sub'] : null;
  $aff_id = isset($_GET['aff_id']) ? $_GET['aff_id'] : null;

  if (empty($aff_sub)) {
    $aff_sub = isset($_COOKIE['aff_sub']) ? $_COOKIE['aff_sub'] : null;
  }

  if (empty($aff_id)) {
    $aff_id = isset($_COOKIE['aff_id']) ? $_COOKIE['aff_id'] : null;
  }

  if (!empty($aff_sub) && !empty($aff_id) ) {
    SetCookie("aff_sub", $aff_sub, time()+2592000);
    SetCookie("aff_id", $aff_id, time()+2592000);
  }

  $data = array(
    'date_visited' => date("d.m.Y"),
    'time_visited' => date("G:i:s"),
    'page_url'     => $_SERVER['HTTP_HOST'],
    'utm_source'   => isset($_GET['utm_source']) ? $_GET['utm_source'] : null,
    'utm_campaign' => isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : null,
    'utm_medium'   => isset($_GET['utm_medium']) ? $_GET['utm_medium'] : null,
    'utm_term'     => isset($_GET['utm_term']) ? $_GET['utm_term'] : null,
    'utm_content'  => isset($_GET['utm_content']) ? $_GET['utm_content'] : null,
    'ref'          => isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : null,
    'ip_address'   => get_client_ip(),
    'client_id'    => isset($_COOKIE["_ga"]) ? substr($_COOKIE["_ga"], 6) : null,
    'utmcsr'       => isset($utmcsr) ? $utmcsr : null,
    'utmccn'       => isset($utmccn) ? $utmccn : null,
    'utmcmd'       => isset($utmcmd) ? $utmcmd : null,
    'affiliate_id' => isset($aff_id) ? $aff_id : null,
    'click_id'     => isset($aff_sub) ? $aff_sub : null
  );

  if (!($data['utm_source'] == 'affiliate' && $data['utm_medium'] == 'sd' && $data['utm_campaign'] == 'qa3')) {
    unset($_COOKIE['aff_sub']);
    unset($_COOKIE['aff_id']);
    setcookie('aff_sub', null, -1, '/');
    setcookie('aff_id', null, -1, '/');
  }