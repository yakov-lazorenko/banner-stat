<?php

namespace Library\Http;

/**
 * Класс содержащий информацию про HTTP запрос.
 */
class Request
{
    public function getIpAddress()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $_SERVER['REMOTE_ADDR'];
    }

    public function getUserAgent()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public function getHttpReferer()
    {
        return $_SERVER['HTTP_REFERER'] ?? '';
    }

}
