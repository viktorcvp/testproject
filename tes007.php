<?php


do {
    $task = (int)readline("в каком году была крещена Русь:?Варианты 810,990,740: ");
    if ($task === 990) {
        echo "молодцы правильно";
        break;
    }  if ($task === 810 || $task === 740) {
        echo "неверно";
        break;

    }
}while (true);






