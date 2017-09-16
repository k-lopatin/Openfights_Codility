<?php

require __DIR__ . '/vendor/autoload.php';

function getCurrentBalance() {
  $cardInfo = [
    'CardId' => 42
  ];
  $uri = 'https://api.open.ru/MyCards/1.0.0/MyCardsInfo/balance';
  $body = json_encode($cardInfo);
  return \Httpful\Request::post($uri)
                              ->body($body)
                              ->sendsJson()
                              ->send();
}

print_r(getCurrentBalance());
