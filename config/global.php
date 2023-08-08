<?php

return [
    'TOKEN' => 'TOKEN',
    'REM-TOKEN' => 'REM-TOKEN',
    'REQUESTED-PATH' => 'REQUESTED-PATH',
    'ASSET-VERSION' => md5(substr(env('APP_KEY'),7)),
];