<?php

namespace App\Repositories;

use App\Entities\BannerDisplay;
use Library\DependencyInjection\DI;

/**
 * Репозиторий (паттерн Data Mapper) для сохранения и получения сущностей BannerDisplay из БД.
 */
class BannerDisplayRepository
{
    /**
     * Сохранить в базе новый показ баннера BannerDisplay.
     *  
     * @return void
     */
    public function update(BannerDisplay $bannerDisplay): void
    {
        $db = DI::getContainer()->get('db');

        $queryString = "
            INSERT INTO `banner_display`
                (`ip_address`, `user_agent`, `page_url`)
            VALUES
                (:ip_address, :user_agent, :page_url)
            ON DUPLICATE KEY UPDATE
                `views_count` = `views_count` + 1,
                `view_date` = CURRENT_TIMESTAMP()";

        $queryParams = [
            ':ip_address' => $bannerDisplay->getIpAddress(),
            ':user_agent' => $bannerDisplay->getUserAgent(),
            ':page_url' => $bannerDisplay->getPageUrl()
        ];

        $db->executeQuery($queryString, $queryParams);
    }
}
