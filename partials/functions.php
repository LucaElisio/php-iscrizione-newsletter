<?php

function check_email($email){
    // Controllo email
    if (str_contains($email, "@") && str_contains($email, ".")) {
        echo "Email scritta bene";
    } else {
        echo "Email scritta male";
    }
}
