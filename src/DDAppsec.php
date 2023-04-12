<?php

namespace datadog\appsec;

if (!extension_loaded('ddappsec')) {

    function track_user_login_event($userId, $success, $metadata)
    {
    }

    function track_custom_event($eventName, $metadata)
    {
    }
}
