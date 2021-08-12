<?php
defined('MOODLE_INTERNAL') || die();

$tasks = array(
    // enroll new users
    array(
        'classname' => '\tool_prorrogafin\task\prorrogafin',
        'blocking' => 0,
        'minute' => '*',
        'hour' => '*',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ),
);
