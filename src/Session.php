<?php

class Session
{
    /**
     * @throws SessionException
     */
    public static function start(){
        if (session_status() === PHP_SESSION_ACTIVE)
            return;
        if (headers_sent() === true)
            throw new SessionException('Modification des headers impossible');
        elseif (session_status() === PHP_SESSION_DISABLED)
            throw new SessionException('La session est incompatible ou incohérente');
        else
            $session = session_start();

    }
}
