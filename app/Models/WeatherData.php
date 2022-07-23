<?php
namespace App\Models;

class WeatherData
{

    private string $date;
    private float $temperature;
    private float $humidity;
    private string $icon;
    private string $text;

    public function __construct(string $date, float $temperature, float $humidity, string $icon, string $text)
    {

        $this->date = $date;
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->icon = $icon;
        $this->text = $text;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getText(): string
    {
        return $this->text;
    }

}