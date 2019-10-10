<?php
$albums = array(
    'Citizin of Glass' => 4.5,
    'Night' => 9,
    'New Eyes' => 5,
    'Strange Trails' => 10
);
$aantalAlbums = count($albums);
$totaalBedrag = 4.5 + 9 + 5 + 10;
$gemiddelde = $totaalBedrag / 4;
echo ("Het albumoverzicht:" . PHP_EOL);
foreach ($albums as $nummer => $kosten) {
    echo ("$nummer kost $kosten" . PHP_EOL);
}
echo "Het totaalbedrag van alle almums is: €$totaalBedrag" . PHP_EOL;
echo "De gemiddelde prijs van alle albums is €$gemiddelde";
