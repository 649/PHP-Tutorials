<?php
# KEEPING TRACK OF CURRENT + FUTURE TIME IN PHP
$time = time();
echo "Current time (since Unix Epoch): ".$time. "<br />";
$tomorrow = time() + (24 * 60 * 60);
echo "Tomorrow's time (since Unix Epoch): ".$tomorrow. "<br />";
$nextweek = time() + (7 * 24 * 60 * 60);
echo "Next week (since Unix Epoch): ".$nextweek. "<br />";
?>