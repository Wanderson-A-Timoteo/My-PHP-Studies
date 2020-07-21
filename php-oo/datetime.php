<?php

$data = DateTime();

/**
 * 
 * -> P representação de periodo: vem antes de dia, mês, ano e semana
 *  Y anos
 *  M meses
 *  D dias
 *  W semanas
 *  -> T representação de tempo: vem antes de hora, minuto e segundo
 *  H hora
 *  M minutos
 *  S segundos
 *  
 */

echo $data -> format('d-m-Y H:i:s') . PHP_EOL;

// adiciona um periodo de 5 minutos
$intervalo = new DateInterval('PT5M'); 
$data -> add($intervalo);

PHP_EOL;

// subtrai um periodo 5 anos, 10 meses, 5 dias, 10 horas, 50 minutos e 10 segundos 
$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); 
$data ->sub($intervalo);

var_dump($data);

