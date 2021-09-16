<?php

namespace App\Factories;

use App\Entities\BannerDisplay;
use Library\Http\Request;

/**
 * Статическая фабрика для создания класса показа баннера BannerDisplay
 */
class BannerDisplayFactory
{
    /**
     * Создать класс показа баннера BannerDisplay
     * 
     * @return BannerDisplay
     */
    public static function build()
    {
        $request = new Request();

        $page_url = $request->getHttpReferer();

        if (empty($page_url)) {
            throw new \Exception('Direct entry!'); // прямой вход
        }

        $ip_address = $request->getIpAddress();

        $user_agent = $request->getUserAgent();

        return (new BannerDisplay())
            ->setIpAddress($ip_address)
            ->setUserAgent($user_agent)
            ->setViewDate(date('Y-m-d H:i:s'))
            ->setPageUrl($page_url);
    }
}
