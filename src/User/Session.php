<?php

class Session
{
    /**
     * @throws Exception
     */
    public static function start(){
        if (session_status() === PHP_SESSION_ACTIVE)
            return;
        if (headers_sent() === true)
            throw new Exception('Modification des headers impossible');
        elseif (session_status() === PHP_SESSION_DISABLED)
            throw new Exception('La session est incompatible ou incohérente');
        else
            $session = session_start();

    }
}
