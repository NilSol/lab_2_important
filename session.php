<?php
function _session()
{
    session_start();
    session_destroy();
    session_unset();
}
?>
