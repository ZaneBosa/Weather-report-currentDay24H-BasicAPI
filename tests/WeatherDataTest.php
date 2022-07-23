<?php

test('weather model', function () {
    $weather = new \App\Models\WeatherData(
        '2022-07-21 11:00',
        18.7,
        93,
        '//cdn.weatherapi.com/weather/64x64/day/116.png',
        'Patchy rain possible'
    );

    expect($weather->getDate())->toBe('2022-07-21 11:00');
    expect($weather->getTemperature())->toBe(18.7);
    expect($weather->getHumidity())->toBe(93.0);
    expect($weather->getIcon())->toBe('//cdn.weatherapi.com/weather/64x64/day/116.png');
    expect($weather->getText())->toBe('Patchy rain possible');
});