<?php
$extensions = [
    'php_zip',
    'php_xml',
    'php_gd2',
    'php_iconv',
    'php_simplexml',
    'php_xmlreader',
    'php_zlib',
];

foreach ($extensions as $extension) {
    if (extension_loaded($extension)) {
        echo "$extension enabled\n";
    } else {
        echo "$extension not enabled\n";
    }
}
?>