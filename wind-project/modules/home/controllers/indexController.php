<?php
function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}
function homeAction() {
//    show_array($list_users);
    load_view('index');
}


