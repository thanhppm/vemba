<?php
$redirect_url = explode("/",$_SERVER['REQUEST_URI']);
if(in_array('en',$redirect_url)){
    $lang_default = "en";
}
if(in_array('vi',$redirect_url)){
    $lang_default = "vi";
}

