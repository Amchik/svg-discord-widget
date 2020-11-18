<?php
// Выйди отсюда розбiйник
header("Content-Type: text/plain");
$sid = $_GET["server"];
if (!$sid) {
    http_response_code(400);
    die("bad request. check docs");
}

$raw_json = file_get_contents("https://discord.com/api/guilds/" . $sid . "/widget.json");
$json = json_decode($raw_json);
if (!$json || !$json->name) {
    http_response_code(400);
    die("server doesn't have widget.");
}

header("Content-Type: image/svg+xml");

// memers
$online = sizeof(array_filter($json->members, function ($e) {
    return $e->status == "online";
}));

// channels
$chnls = [];
for ($i = 0; $i < sizeof($json->channels) && $i < 5; $i++) {
    $chnls[] = $json->channels[$i]->name;
}
while (sizeof($chnls) < 5) {
    $chnls[] = "-";
}

$svg = file_get_contents("img/discord.svg");
$svg = str_replace("{0}", $json->name, $svg);
$svg = str_replace("{1}", sizeof($json->members), $svg);
$svg = str_replace("{2}", $chnls[0], $svg);
$svg = str_replace("{3}", $chnls[1], $svg);
$svg = str_replace("{4}", $chnls[2], $svg);
$svg = str_replace("{5}", $chnls[3], $svg);
$svg = str_replace("{6}", $chnls[4], $svg);
$svg = str_replace("{7}", str_replace("https://discord.com/invite", "", $json->instant_invite), $svg);

echo $svg;
