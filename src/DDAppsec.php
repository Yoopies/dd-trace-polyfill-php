<?php

namespace datadog\appsec;

if (!extension_loaded('ddappsec')) {

    function track_user_login_success_event($userId, $metadata, $automated = null)
    {
    }

    function track_user_login_failure_event($userId, $exists, $metadata, $automated = null)
    {
    }

    function track_custom_event($eventName, $metadata)
    {
    }
}
