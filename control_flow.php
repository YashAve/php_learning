<?php
    function if_else() {
        $score = 95;
        if ($score > 90) {
            var_dump("A");
        } else if ($score > 80) {
            var_dump("B");
        } else if ($score > 70) {
            var_dump("C");
        } else {
            var_dump("F");
        }
    }

    function switch_statement() {
        $payment_status = 1;
        switch ($payment_status) {
            case 1:
                var_dump("success");
                break;
            case 2: case 3:
                var_dump("pending");
                break;
            default:
                var_dump("unknown");
        }
    }

    function match_expression() {
        /* unlike switch statements, match expressions are strictly checked
        */
        $payment_status = 1;
        var_dump(match($payment_status) {
            1 => "success",
            2 => "denied",
            3 => "pending",
            default => "unknown"
        });
    }

    match_expression();
    #var_dump(match_expression());
    #switch_statement();
    #if_else();