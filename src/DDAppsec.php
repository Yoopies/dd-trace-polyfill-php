<?php

namespace datadog\appsec {

    if (!extension_loaded('ddappsec')) {

        /**
         * @deprecated use \datadog\appsec\v2\track_user_login_success() instead
         */
        function track_user_login_success_event($userId, $metadata, $automated = null)
        {
        }

        /**
         * @deprecated use \datadog\appsec\v2\track_user_login_failure() instead
         */
        function track_user_login_failure_event($userId, $exists, $metadata, $automated = null)
        {
        }

        function track_custom_event($eventName, $metadata)
        {
        }
    }
}

// The v2 functions are registered by the ddtrace extension, not by ddappsec.
namespace datadog\appsec\v2 {

    if (!extension_loaded('ddtrace')) {

        /**
         * @param string            $login    the identifier used by the user to authenticate (email, username...)
         * @param string|array|null $user     the user id, or an array of user info containing at least an "id" key
         * @param array             $metadata additional metadata added to the root span
         */
        function track_user_login_success(string $login, string|array|null $user = null, array $metadata = [])
        {
        }

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
