<?php

namespace DDTrace;

if (!extension_loaded('ddtrace')) {

    function add_global_tag(string $key, string $value)
    {
    }

    function active_span()
    {
    }

    function root_span()
    {
    }

    function start_span(float $startTime = 0)
    {
    }

    function close_span(float $finishTime = 0)
    {
    }

    function trace_id()
    {
    }

    /**
     * @param \Closure|array|null $tracingClosureOrConfigArray
     */
    function trace_method(
        string $className,
        string $methodName,
        $tracingClosureOrConfigArray = null)
    {
    }

    function set_user(string $userId, array $metadata = [], ?bool $propagate = null)
    {
    }
}
