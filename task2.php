<?php

for ($cols = 0; $cols < 8; $cols++) {
    echo "<br>";
    for ($rows = 0; $rows < 4; $rows++){
        if($cols%2 == 0){
            echo '|Black| |White|';
        }else {
            echo '|White| |Black|';
        };
    };
};

?>