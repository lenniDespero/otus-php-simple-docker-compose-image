<?php

function sendBadCode($message = '') 
{
    header("HTTP/1.1 400 Bad Request");
    header("Status: 400 Bad Request");
    echo $message;
}

function sendOkCode($message = '')
{
    header("HTTP/1.1 200 OK");
    header("Status: 200 All ok");
    echo $message;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (array_key_exists('string', $_POST) && $_POST['string'] === '(()()()()))((((()()()))(()()()(((()))))))') {
        sendOkCode('all OK sring is "(()()()()))((((()()()))(()()()(((()))))))"');
    } else {
        sendBadCode('wrong field or wrong data');
    }
} else {
    sendBadCode('wrong method');
}
exit();