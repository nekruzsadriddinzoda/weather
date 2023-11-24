<?php
include('simple_html_dom.php');

function getWeather() {
    $url = 'https://www.google.com/search?q=погода';
    $html = file_get_html($url);

    $weather = array();

    // Получаем данные о погоде
    $city = $html->find('div.BNeawe.iBp4i.AP7Wnd', 0)->plaintext;
    $temperature = $html->find('span.BNeawe.tAd8D.AP7Wnd', 0)->plaintext;
    $condition = $html->find('div.BNeawe.tAd8D.AP7Wnd', 1)->plaintext;

    // Записываем данные в массив
    $weather['city'] = $city;
    $weather['temperature'] = $temperature;
    $weather['condition'] = $condition;

    return $weather;
}
?>