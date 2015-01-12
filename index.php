<?php
/*
 * 批量制作页面时，拼接公用片段
 * 
 */
if(is_null($_REQUEST) || is_null($_REQUEST['page']))
{
    print "Which page do you want preview?";
    exit;
}
$page_name = 'fragments'.DIRECTORY_SEPARATOR.$_REQUEST['page'].'.ctp';
if(!file_exists($page_name))
{
    print "The page ".getcwd().DIRECTORY_SEPARATOR.$page_name." is not present.";
    exit;
}

include $page_name;
?>