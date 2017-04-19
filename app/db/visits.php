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

// Построение SQL-оператора
  $query = "INSERT INTO
            `visits`(
                      `date_visited`,
                      `time_visited`,
                      `page_url`,
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
            VALUES('".$data['date_visited']."',
                    '".$data['time_visited']."',
                    '".$data['page_url']."',
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
// Закрытие соединения
mysql_close();