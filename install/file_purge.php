<?php
$handle = @fopen(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'evo_files_deleted.txt', 'r');
if ($handle) {
    while (!feof($handle)) {
        $deleted_file = fgets($handle, 192);
        $deleted_file = trim($deleted_file);
        if(!empty($deleted_file)) {
            if(!file_exists(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . $deleted_file)) {
                echo "$deleted_file\n";
            }
        }
    }
    fclose($handle);
}
