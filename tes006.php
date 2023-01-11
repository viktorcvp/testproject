<?php
do {
    $ago = (int)readline("в каком году произошло крещение Руси?Варианты:990,810,740 ");

    switch ($ago) {
        case $ago === 990:
            echo "вы молодцы";
            break 2;

        case $ago === 740:
        case $ago === 810;
            echo "неверно";
            break 2;
    }
    }while(true);






