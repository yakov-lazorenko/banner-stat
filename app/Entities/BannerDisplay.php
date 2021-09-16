<?php

namespace App\Entities;

/**
 * Класс, в котором находится информация про показ баннера.
 */
class BannerDisplay
{
    /**
     * @var string IP-адрес посетителя.
     */
    protected $ip_address;

    /**
     * @var string Заголовок HTTP "User Agent"
     */
    protected $user_agent;

    /**
     * @var string Дата и время последнего просмотра
     */
    protected $view_date;

    /**
     * @var string URL страницы, где размещен баннер.
     */
    protected $page_url;

    /**
     * @var int|null Количество просмотров одним посетителем для заданной страницы.
     */
    protected $views_count;


    /**
     * Конструктор
     */
    public function __construct()
    {
        $views_count = null;
    }

    /**
     * Получить IP-адрес посетителя
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ip_address;
    }

    /**
     * Получить заголовок HTTP "User Agent"
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->user_agent;
    }

    /**
     * Получить дату и время последнего просмотра.
     * @return string
     */
    public function getViewDate(): string
    {
        return $this->view_date;
    }

    /**
     * Получить URL страницы, где размещен баннер.
     * @return string
     */
    public function getPageUrl(): string
    {
        return $this->page_url;
    }

    /**
     * Получить количество просмотров одним посетителем для заданной страницы.
     * @return int|null
     */
    public function getViewsCount(): ?int
    {
        return $this->views_count;
    }


    /**
     * Установить значение IP-адреса посетителя.
     * @param string $ip_address IP-адрес посетителя
     */
    public function setIpAddress(string $ip_address): self
    {
        $this->ip_address = $ip_address;

        return $this;
    }


    /**
     * Установить значение заголовка HTTP "User Agent" посетителя.
     * @param string $user_agent IP-адрес посетителя
     */
    public function setUserAgent(string $user_agent): self
    {
        $this->user_agent = $user_agent;

        return $this;
    }


    public function setViewDate(string $view_date): self
    {
        $this->view_date = $view_date;

        return $this;
    }


    public function setPageUrl(string $page_url): self
    {
        $this->page_url = $page_url;

        return $this;
    }


    public function setViewsCount(int $views_count): self
    {
        $this->views_count = $views_count;

        return $this;
    }

}
