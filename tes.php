<?php
$i =1;
$task = "task1";
$time = "time$1";
$result = 0;



$$task = readline($$taskText);
$$time = (int)readline($timeText);

$out  .="-{$$task} ({$$time}ч)\n";
$i++;
$task = "task$1 = 1";
$time = "time$1 = 1";

$$task = readline($taskText);
$$time = (int)readline($timeText);
$result += $$time;
$out .= "-{$task} ({$$time}ч\n;
$i++;

$task = readline($taskText);
$time = (int)readline($timeText);
$result += $time;
$out .= "-{$$task} {$$time}ч";
$i++;


    
