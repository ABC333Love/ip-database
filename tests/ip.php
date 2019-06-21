<?php
/**
 * @author abc333love <abc333love@gmail.com>
 * @since  2019-06-21
 */

//you do not need to do this if use composer!
require dirname(__DIR__) . '/../src/IpLocation.php';

use abc333love\Ip\IpLocation;

$ips = [
    "172.217.25.14",//美国
    "140.205.172.5",//杭州
    "123.125.115.110",//北京
    "221.196.0.0",//
    "60.195.153.98",
];

foreach ($ips as $ip) {

    echo json_encode(IpLocation::getLocation($ip), JSON_UNESCAPED_UNICODE) . "\n";

}


