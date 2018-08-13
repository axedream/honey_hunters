<?php

return [
    'adminEmail' => 'axe_dream@list.ru',                    //емали для которого проихводится тотравка

    'basic_url' => HTTP.'://'.$_SERVER['HTTP_HOST'].'/',    //базовый URL для веб страниц
    'basic_dir_files' => 'upload',                          //папка  хранения загружаемых файлов
    'basic_url_console' => 'http://host.ru/',               //хост для локальных задач из консоли

    'api_access' => (file_exists(__DIR__.DS."..".DS."..".DS.'api_access_hosts.php')) ? require __DIR__.DS."..".DS."..".DS.'api_access_hosts.php' : false,
    'messages' => require __DIR__ .DS.'messages.php',
    'time_auth'=> 60 * 60 * 24,
];
