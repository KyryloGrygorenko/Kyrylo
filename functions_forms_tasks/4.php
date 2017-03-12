<?php

$dir='/home/ubuntu/workspace/functions_forms_tasks/'; //the directory route

function displayfilelist($dir)
{
    $filelist = scandir($dir);
    foreach($filelist as $filename){
        echo $filename.'<br>';
    }
}
displayfilelist($dir);

