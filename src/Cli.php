<?php

namespace Brain\Games\Cli

function line($msg = '')
{
    Streams::_call('line', func_get_args());
}

function prompt($question, $default = false, $marker = ': ', $hide = false)
{
    return Streams::prompt($question, $default, $marker, $hide);
}
