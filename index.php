<?php
$file_with_ips = 'ip.json';
$ips = file_get_contents($file_with_ips);
$contenido = json_decode($ips,true);
