<?php

namespace DDTrace;

if (!extension_loaded('ddtrace')) {

    function add_global_tag($key, $value)
    {
    }

    function active_span()
    {
    }

    function root_span()
    {
    }

    function start_span()
    {
    }

    function close_span()
    {
    }

    function trace_id()
    {
    }

    function trace_method()
    {
    }

    function set_user($userId, $metadata = [], $propagate = false)
    {
    }
}
