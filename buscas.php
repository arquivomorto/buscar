<?php
$arr=[
    '4shared'=>'https://www.4shared.com/web/q/#query=%s&sort=size%2Cdesc',
    'acrônimos'=>'https://www.acronymfinder.com/~/search/af.aspx?string=exact&Acronym=%s',
    'alexa'=>'https://alexa.com/siteinfo/%s',
    'atom'=>'https://atom.io/packages/search?q=%s',
    'books'=>'https://br1lib.org/s/?q=%s',//https://book4you.org/s/?q=%s    
    'buscape'=>'https://www.buscape.com.br/search?page=1&invalidPath=false&sortBy=prod_items_sort_by_price_asc&q=%s&no-shortcut=1',
    'dev.to'=>'https://dev.to/search?q=%s',
    'dicionario'=>'https://www.infopedia.pt/dicionarios/lingua-portuguesa/%s',          
    'duck'=>'https://duckduckgo.com/?q=%s&kl=br-pt&ia=web',
    'extensões'=>'https://addons.mozilla.org/en-US/firefox/search/?q=%s&type=extension',
    'geonames'=>'https://www.geonames.org/search.html?q=%s',
    'github'=>'https://github.com/search?q=+%s+&type=repositories',
    'informal'=>'https://www.dicionarioinformal.com.br/%s/',
    'limetorrents'=>'https://www.limetorrents.info/search/all/%s/seeds/1/',    
    'mdn'=>'https://developer.mozilla.org/en-US/search?q=%s',
    'mapas'=>'https://www.google.com.br/maps?hl=pt&q=%s',
    'mercado livre'=>'https://lista.mercadolivre.com.br/%s/_OrderId_PRICE',
    'mint'=>'https://community.linuxmint.com/software/view/%s',      
    'music'=>'https://music.youtube.com/search?q=%s',
    'news'=>'https://news.google.com/search?q=%s&hl=pt-BR&gl=BR&ceid=BR%3Apt-419',
    'oembed'=>'http://localhost/oembed/index.php?id=%s',
    'packagist'=>'https://packagist.org/?query=%s',
    'php'=>'https://www.php.net/manual-lookup.php?pattern=%s&scope=quickref',
    'tld'=>'https://tld-list.com/tld/%s',
    'tpb'=>'https://thepiratebay0.org/search/%s/1/99/0',
    'twitter'=>'https://twitter.com/search?q=%22%s%22%20lang%3Apt-br&src=typed_query&f=live',
    'unicode'=>'https://unicode-table.com/pt/search/?q=%s',
    'username'=>'http://localhost/username/index.php?user=%s',
];
ksort($arr);
return $arr;
