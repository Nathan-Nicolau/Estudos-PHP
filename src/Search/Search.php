<?php

namespace Gamer\Search;

class Search {
    private $url = "https://viacep.com.br/ws/";

    public function getAdressFromZipCode(string $numeroCep): array {
        $numeroCep = preg_replace('/[^0-9]/im', '', $numeroCep);
        $get = file_get_contents($this->url . $numeroCep . "/json");
        return json_decode($get, true);
    }
}
