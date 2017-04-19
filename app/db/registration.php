<?php
// Параметры для подключения
/*$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = "z"; // Пароль БД
$database = "allinsol_reg"; // БД*/
$db_host = "qagirl.mysql.ukraine.com.ua";
$db_user = "qagirl_db"; // Логин БД
$db_password = "CS3H7lta"; // Пароль БД
$database = "qagirl_db"; // БД

// Подключение к базе данных
$db = mysql_connect($db_host,$db_user,$db_password) or die("Не могу создать соединение ");
 
// Выборка базы
mysql_select_db($database, $db);

mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
/* Log*/

# получаем все инфу с формы и пакуем массив с данными
$d['date_time'] = date("F j, Y, g:i:s a");
$d['REMOTE_ADDR'] = $_SERVER["REMOTE_ADDR"];
//$d['HTTP_USER_AGENT'] = trim($_SERVER['HTTP_USER_AGENT']);

$file = fopen('log_sicret_base.txt', "a+");
fwrite($file, ' #---Log--  ');
fwrite($file, print_r($d, 1));
fwrite($file, print_r(' --GET-- ', 1));
fwrite($file, print_r($_GET, 1));
fwrite($file, print_r(' --POST-- ', 1));
fwrite($file, print_r($_POST, 1));
fwrite($file, ' ------#  ');
fclose($file);

function getVar($name)
{
  $name = isset($_POST[$name]) ? trim($_POST[$name]) : null;
  $name = mysql_real_escape_string($name);
  return $name;
}

function GetClearPhoneNumber($number) {
  if (empty($number)) {
    return "";
  }
  $number = str_replace('(', '', $number);
  $number = str_replace(')', '', $number);
  $number = str_replace('-', '', $number);
  $number = str_replace('+', '', $number);
  return $number;
}

$name = getVar('name');
$phone = getVar('custom_tel');
$email = getVar('email');

// if (empty($name) && empty($phone) && empty($email)) {
//   $name = getVar('name');
//   $phone = getVar('custom_tel');
//   $email = getVar('email');
// } else {
//   $name = getVar('entry_648859501');
//   $phone = getVar('entry_1805884529');
//   $email = getVar('entry_1502780938');
// }

$data = array(
  'name' => $name,
  'phone'     => GetClearPhoneNumber($phone),
  'email'     => $email,
  'registrationType' => getVar('registrationType'),
  'orderType' => getVar('orderType'),
  'date_visited' => date("d.m.Y"),
  'time_visited' => date("G:i:s"),
  'page_url' => getVar('page_url'),
  'user_agent' => getVar('user_agent'),
  'utm_source' => getVar('utm_source'),
  'utm_campaign' => getVar('utm_campaign'),
  'utm_medium' => getVar('utm_medium'),
  'utm_term' => getVar('utm_term'),
  'utm_content' => getVar('utm_content'),
  'ref' => getVar('ref'),
  'ip_address' => getVar('ip_address'),
  'city' => getVar('city'),
  'client_id' => getVar('client_id'),
  'utmcsr' => getVar('utmcsr'),
  'utmccn' => getVar('utmccn'),
  'utmcmd' => getVar('utmcmd'),
  'affiliate_id' => getVar('affiliate_id'),
  'click_id' => getVar('click_id')
);

// var_dump($data);die;

$order_type_id = null;
if ($data['orderType'] == 'order-add') {
  $order_type_id = '';
}
switch ($data['registrationType']) {
    case 'default_registration':
        $registration_type_id = '';
        break;
    case 'standart':
        $registration_type_id = '';
        break;
    case 'super':
        $registration_type_id = '';
        break;
    case 'special':
        $registration_type_id = "";
        break;
    default:
        throw new \RuntimeException('Undefined Registration Type. Add class default_registration for default');
        break;
}

$fullName = explode(' ', $data['name'], 2);

// Построение SQL-оператора
if (empty($data['confirmation_phone'])) {
  $query = "INSERT INTO
            `leads`(
                      `first_name`,
                      `last_name`,
                      `email`,
                      `phone`,
                      `registrationType`,
                      `orderType`,
                      `registration_type_id`,
                      `order_type_id`,
                      `date_visited`,
                      `time_visited`,
                      `page_url`,
                      `user_agent`,
                      `utm_source`,
                      `utm_campaign`,
                      `utm_medium`,
                      `utm_term`,
                      `utm_content`,
                      `ref`,
                      `ip_address`,
                      `city`,
                      `client_id`,
                      `utmcsr`,
                      `utmccn`,
                      `utmcmd`,
                      `affiliate_id`,
                      `click_id`
                      ) 
            VALUES('".$fullName[0]."',
                    '".(empty($fullName[1]) ? '-' : $fullName[1])."',
                    '".$data['email']."',
                    '".$data['phone']."',
                    '".$data['registrationType']."',
                    '".$data['orderType']."',
                    '".$registration_type_id."',
                    '".$order_type_id."',
                    '".$data['date_visited']."',
                    '".$data['time_visited']."',
                    '".$data['page_url']."',
                    '".$data['user_agent']."',
                    '".$data['utm_source']."',
                    '".$data['utm_campaign']."',
                    '".$data['utm_medium']."',
                    '".$data['utm_term']."',
                    '".$data['utm_content']."',
                    '".$data['ref']."',
                    '".$data['ip_address']."',
                    '".$data['city']."',
                    '".$data['client_id']."',
                    '".$data['utmcsr']."',
                    '".$data['utmccn']."',
                    '".$data['utmcmd']."',
                    '".$data['affiliate_id']."',
                    '".$data['click_id']."')";
// SQL-оператор выполняется
mysql_query($query) or die (mysql_error());
}

// Закрытие соединения
mysql_close();

die(json_encode([
  'status' => 'success'
]));