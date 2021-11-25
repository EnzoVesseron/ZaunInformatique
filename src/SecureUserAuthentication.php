<?php

class SecureUserAuthentication extends UserAuthentication
{
    const CODE_INPUT_NAME = 'code';
    const SESSION_CHALLENGE_KEY = 'challenge';
    const RANDOM_STRING_SIZE = 16;

    public function loginForm(string $action, string $submitText = 'OK')
    {

    }
}