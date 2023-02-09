<?php
require_once('view.php');
 function do_register()
 {
    return '201';
 }
 function do_login()
 {
    return '200';
 }
 function do_not_found()
 {
    return '404';
 }
function load_view($page)
{
    render_view($page);
}