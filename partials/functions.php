<?php

function check_email($email){
    // Controllo email
    if (!str_contains($email, "@") && !str_contains($email, ".")) {
        return true; //errore c'è
    } else {
        return false; //errore non c'è
    }
}
