<?php
function get_api($call,$params) {
  $api_url = "https://voorhoede-colibri-api.now.sh/api/v1/" . $call;
  if ($params) {
    $api_url .= "?" . $params;
  };
  $json = json_decode(file_get_contents($api_url));
  return $json;
}
