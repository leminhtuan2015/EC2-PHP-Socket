<?php

read();

function read(){
        $stdin = fopen("php://stdin", "r");
        print("What's your name?\n");
        $name = fgets($stdin);
        print("Hello $name!\n");
        fclose($stdin);
}

?>
