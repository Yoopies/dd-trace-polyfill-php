<?php

// Each function is declared only if nothing registered it yet. Checking the extension name is not
// reliable: since dd-trace-php 2.0 there is no separate "ddappsec" extension anymore and these
// functions are provided by "ddtrace", so an extension_loaded('ddappsec') guard redeclares them.

namespace datadog\appsec {

    if (!function_exists('datadog\appsec\track_user_login_success_event')) {
        /**
         * @deprecated use \datadog\appsec\v2\track_user_login_success() instead
         */
        function track_user_login_success_event($userId, $metadata, $automated = null)
        {
        }
    }

    if (!function_exists('datadog\appsec\track_user_login_failure_event')) {
        /**
         * @deprecated use \datadog\appsec\v2\track_user_login_failure() instead
         */
        function track_user_login_failure_event($userId, $exists, $metadata, $automated = null)
        {
        }
    }

    if (!function_exists('datadog\appsec\track_custom_event')) {
        function track_custom_event($eventName, $metadata)
        {
        }
    }
}

namespace datadog\appsec\v2 {

    if (!function_exists('datadog\appsec\v2\track_user_login_success')) {
        /**
         * @param string            $login    the identifier used by the user to authenticate (email, username...)
         * @param string|array|null $user     the user id, or an array of user info containing at least an "id" key
         * @param array             $metadata additional metadata added to the root span
         */
        function track_user_login_success(string $login, string|array|null $user = null, array $metadata = [])
        {
        }
    }

    if (!function_exists('datadog\appsec\v2\track_user_login_failure')) {
        /**
         * @param string $login    the identifier used by the user to authenticate (email, username...)
         * @param bool   $exists   whether the user exists in the system
         * @param array  $metadata additional metadata added to the root span
         */
        function track_user_login_failure(string $login, bool $exists, array $metadata = [])
        {
        }
    }
}
