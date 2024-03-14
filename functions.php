<?php

    function get_status($payment_status, $show_message=true): string {
        #just like JS, function call can appear before the function declara1tion
        $message = match($payment_status) {
            1 => "success",
            2 => "denied",
            3 => "pending",
            default => "unknown"
        };
        if ($show_message) {
            var_dump($message);
            return null;
        }
        return $message;
    }

    var_dump(get_status(1));