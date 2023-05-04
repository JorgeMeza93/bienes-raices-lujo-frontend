<?php 

    function includeTemplate(string $nombre){
        include __DIR__ . "/templates/" . $nombre . ".php";
    }

?>