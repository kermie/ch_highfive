<?php

$aModule = array(
    'id'           => 'mst_oxprice_ch_highfive',
    'title'        => 'ch_highfive',
    'url'          => 'http://www.marco-steinhaeuser.de',
    'description'  => array(
        'en'=>'Rounds the displayed price to five Rappen/Cent (whatever currency you use). Important for Switzerland (AKA CH)',
        'de'=>'Rundet die Preisanzeige auf fünf Rappen/Cent (je nachdem, welche Währung benutzt wird. Wichtig für den Einsatz in der Schweiz',
        'ru'=>'Округляет цену до 5 центов/копеек (в любой валюте). Важно для Швейцарии.'
    ),
    'lang'         => 'en',
    'version'      => '0.9',
    'author'       => 'Marco, on the basis of this forum thread: <a href="http://goo.gl/dDQ1x" target="_blank">http://goo.gl/dDQ1x</a> and with the grateful help of my mate <a href="https://github.com/vanilla-thunder" target="_blank">vanilla-thunder</a>',
    'thumbnail'    => 'thumb.gif',
    'extend'       => array(
        'oxprice'    => 'mst/ch_highfive/core/mst_oxprice_ch_highfive'
    ),
);