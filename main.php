<?php

$data = file_get_contents("http://www.boredapi.com/api/activity/");


$data = explode(',', $data);

echo PHP_EOL;
foreach ($data as $value)
{
  echo $value . PHP_EOL;
}