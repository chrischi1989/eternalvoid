<?php
return [
    'aluminiummine'     => [
        'key'         => 'aluminiummine',
        'name'        => 'Aluminiummine',
        'image'       => '/img/game/builds/aluminiummine.jpg',
        'description' => 'Aluminium ist der wichtigste Rohstoff eines Imperiums.<br><br>Durch sein geringes Gewicht und Festigkeit wird dieser Rohstoff hauptsächlich zum Gebäude- und Schiffbau verwendet. Aber auch in der Forschung wird Aluminium in größeren Mengen benötigt.<br><br>Je tiefer die Aluminiummine ausgebaut ist, desto mehr Bauxit - der Grundstoff aus dem Aluminium besteht - kann gefördert werden.',
        'aluminium'   => 250,
        'titan'       => 50,
        'production'  => [30, 1.8],
        'available'   => true
    ],
    'titanfertigung'    => [
        'key'         => 'titanfertigung',
        'name'        => 'Titanfertigung',
        'image'       => '/img/game/builds/titanfertigung.jpg',
        'description' => 'Dadurch dass Titan um ein vielfaches härter als Stahl und zudem auch noch sehr leicht ist, wird dieser Rohstoff ebenso zum Gebäudebau, als auch in der Raumfahrt eingesetzt.<br><br>Reines Titan kommt auf Planeten nur sehr selten und erst in größeren Tiefen der Kruste vor. Deshalb sind größere Fördermengen sowie eine effiziente Veredelung erst bei ausreichend hohen Stufen der Titanfertigung möglich.',
        'aluminium'   => 200,
        'titan'       => 125,
        'production'  => [28, 1.7],
        'available'   => true
    ],
    'siliziummine'      => [
        'key'         => 'siliziummine',
        'name'        => 'Siliziummine',
        'image'       => '/img/game/builds/siliziummine.jpg',
        'description' => 'Silizium wird aus Quarzsand gewonnen und wird in der Halbleiterindustrie für elektronische Komponenten und optische Computersysteme verwendet.<br><br>Durch die sehr hoch entwickelten digitalen Steuerungssysteme der Flotten und diversen Forschungsmöglichkeiten wird sehr viel Silizium benötigt. Eine ausreichend große Produktionsmenge sollte daher sichergestellt sein.',
        'aluminium'   => 300,
        'titan'       => 400,
        'production'  => [23, 1.65],
        'available'   => true
    ],
    'arsenfertigung'    => [
        'key'         => 'arsenfertigung',
        'name'        => 'Arsenfertigung',
        'image'       => '/img/game/builds/arsenfertigung.jpg',
        'description' => '',
        'aluminium'   => 300,
        'titan'       => 400,
        'production'  => [11, 1.5],
        'available'   => true
    ],
    'wasserstofffabrik' => [
        'key'         => 'wasserstofffabrik',
        'name'        => 'Wasserstofffabrik',
        'image'       => '/img/game/builds/wasserstofffabrik.jpg',
        'description' => 'Als einfachstes aller Atome sind vorallem zwei Isotope des Wasserstoffes - Deuterium und Tritium - von Interesse.<br><br>Diese werden in den Fusionsreaktoren der Raumflotte, als auch in vielen Forschungseinrichtungen zur Energieerzeugung genutzt.',
        'aluminium'   => 200,
        'titan'       => 100,
        'production'  => [20, 1.61],
        'available'   => true
    ],
    'antimateriefabrik' => [
        'key'         => 'antimateriefabrik',
        'name'        => 'Antimateriefabrik',
        'image'       => '/img/game/builds/antimateriefabrik.jpg',
        'description' => 'Da Antimaterie im Universum nicht natürlich vorkommt, wird diese in riesigen Anlagen, ähnlich den Teilchenbeschleunigern des 20. und 21. Jahrhunderts, synthetisch hergestellt.<br><br>Reagiert Antimaterie mit normaler Materie werden gewaltige Mengen an Energie freigesetzt, welche den Raumschiffen interstellare und intergalaktische Reisen durch den Hypperraum ermöglicht.',
        'aluminium'   => 300,
        'titan'       => 150,
        'production'  => [14, 1.5],
        'available'   => true
    ],
    'lager'             => [
        'key'         => 'lager',
        'name'        => 'Lager',
        'image'       => '/img/game/builds/lager.jpg',
        'description' => 'Einfache Lager dienen dazu, überschüssige Mengen an Aluminium, Titan und Silizium zu speichern.',
        'level'       => 0,
        'aluminium'   => 450,
        'titan'       => 200,
        'capacity'    => [400000, 10000],
        'available'   => true
    ],
    'speziallager'      => [
        'key'         => 'speziallager',
        'name'        => 'Speziallager',
        'image'       => '/img/game/builds/speziallager.jpg',
        'description' => 'In diesen Lagern werden unter besonderen Sicherheitsmaßnahmen Wasserstoff und Arsen gespeichert.<br><br>Da Wasserstoff hochexplosiv und Arsenverbindungen hochgradig giftig sind, müssen hier spezielle Techniken angewandt werden, um Funken bzw. Flammenbildung oder ein Austreten der gelagerten Substanzen zu verhindern.',
        'level'       => 0,
        'aluminium'   => 1250,
        'titan'       => 1000,
        'capacity'    => [250000, 9000],
        'available'   => true
    ],
    'tanks'             => [
        'key'         => 'tanks',
        'name'        => 'Antimaterietanks',
        'image'       => '/img/game/builds/antimaterietanks.jpg',
        'description' => 'Die Speicherung von Antimaterie ist schwierig, da jede Reaktion mit Materie sofort in einer gewaltigen Energiefreisetzung münden würde.<br><br>Deshalb wurden spezielle Tanks entwickelt, welche mittels magnetischer und gravitonischer Abschirmung verhindern, dass die gespeicherte Antimaterie mit normaler Materie reagiert.',
        'level'       => 0,
        'aluminium'   => 1200,
        'titan'       => 1500,
        'capacity'    => [160000, 8000],
        'available'   => true
    ],
    'bunker'            => [
        'key'         => 'bunker',
        'name'        => 'Bunker',
        'image'       => '/img/game/builds/bunker.jpg',
        'description' => 'In den riesigen unterirdische Lagereinheiten des Bunkers werden im Falle eines Angriffes Rohstoffe zu jeweils gleichen Teilen eingeschlossen und versiegelt.<br><br>Durch Abschirmtechnologie und getarnten Zugänge kann der Bunker nicht durch Sensorsuche oder visueller Aufklärung durch die Feindflotte ausgemacht werden.',
        'level'       => 0,
        'aluminium'   => 2500,
        'titan'       => 2700,
        'capacity'    => [5000, 1000],
        'available'   => true
    ],
    'schiffswerft'      => [
        'key'         => 'schiffswerft',
        'name'        => 'Schiffswerft',
        'image'       => '/img/game/builds/schiffswerft.jpg',
        'description' => 'In orbitalen Stationen werden von Millionen Nanorobotern eine vielzahl an Fertigkomponenten zu einem Raumschiff zusammengebaut.<br><br>Gleichzeitig dient diese Anlage als Dock für die Schiffe, wo sie mit Treibstoff und Material versorgt werden.<br><br>Je größer diese Station ausgebaut ist, desto mehr Pylonen stehen für die gebauten Schiffe zur Verfügung.',
        'level'       => 0,
        'aluminium'   => 600,
        'titan'       => 500,
        'available'   => true
    ],
    'raumhafen'         => [
        'key'         => 'raumhafen',
        'name'        => 'Raumhafen',
        'image'       => '/img/game/builds/raumhafen.jpg',
        'description' => 'Der Raumhafen ist der zentrale Angelpunkt für den zivilen Fracht- und Personentransport eines Planeten.<br><br>Gleichzeitig werden hier, ähnlich der Schiffswerft, zivile Raumschiffe hergestellt, die vorrangig dem Transport von Ressourcen, der Kolonisierung neuer Planeten, sowie der Beseitigung von Weltraumschrott dienen.<br><br>Je größer der Raumhafen ausgebaut ist, desto mehr Landeplätze stehen für die Schiffe zur Verfügung.',
        'level'       => 0,
        'aluminium'   => 500,
        'titan'       => 500,
        'available'   => true
    ],
    'sternenbasis'      => [
        'key'         => 'sternenbasis',
        'name'        => 'Sternenbasis',
        'image'       => '/img/game/builds/sternenbasis.jpg',
        'description' => 'Die Sternenbasis bildet das Kommandozentrum der planetaren Verteidigung.<br><br>Hier sind sämtliche Abwehranlagen postiert, die bei Verlust der Verteidigungsflotte die letzte Kampflinie zwischen der Feindflotte und dem Planeten bilden.<br><br>Je größer die Sternenbasis ausgebaut ist, desto mehr Verteidigungsanlagen können hier ihren Platz finden.',
        'level'       => 0,
        'aluminium'   => 550,
        'titan'       => 700,
        'available'   => true
    ],
    'flottenkommando'   => [
        'key'         => 'flottenkommando',
        'name'        => 'Flottenkommando',
        'image'       => '/img/game/builds/flottenkommando.jpg',
        'description' => 'Das Flottenkommando bildet das Herz der gesamten Flottenbewegung und Verwaltung eines Imperiums.<br><br>Hochentwickelte Computertechnik und Geräte zur Subraumkommunikation ermöglicht die Koordination vieler Flotten über mehrere tausend Lichtjahre in Echtzeit.<br><br>Je besser dieses Gebäude ausgebaut ist, desto mehr Raumschiffe können von hier aus gesteuert werden.',
        'level'       => 0,
        'aluminium'   => 625,
        'titan'       => 525,
        'silizium'    => 225,
        'available'   => true
    ],
    'planetarer_schild' => [
        'key'         => 'planetarer_schild',
        'name'        => 'Planetarer Schild',
        'image'       => '/img/game/builds/planetarer_schild.jpg',
        'description' => 'Durch jüngste Forschung in der Schildtechnologie ist es möglich geworden, nicht nur Objekte in der Größe eines Raumschiffes, sondern sogar ganze Planeten mit einem Energieschild zu umgeben. Der Schild hält sehr lange stand, bis er aufgrund der Belastung durch Beschuss zusammenbricht. Die Schildstärke kann durch weitere Forschung oder durch den Ausbau der Schildemmitter gesteigert werden.',
        'level'       => 0,
        'aluminium'   => 15000,
        'titan'       => 17500,
        'silizium'    => 7500,
        'available'   => true
    ],
    'kommandozentrale'  => [
        'key'         => 'kommandozentrale',
        'name'        => 'Kommandozentrale',
        'image'       => '/img/game/builds/kommandozentrale.jpg',
        'description' => 'Die Kommandozentrale ist der Plexus der planetaren Koordination. Von hier aus werden Rohstoffe in jeden Winkel auf der Oberfläche verteilt, um neue Bauprojekte voranzutreiben.<br><br>Dies erfordert einen gewaltigen logistischen Aufwand, welcher durch den Ausbau dieses Gebäudes reduziert werden kann. Dies steigert effektiv die Baugeschwindigkeit.',
        'level'       => 0,
        'aluminium'   => 600,
        'titan'       => 500,
        'available'   => true
    ],
    'forschungszentrum' => [
        'key'         => 'forschungszentrum',
        'name'        => 'Forschungszentrum',
        'image'       => '/img/game/builds/forschungszentrum.jpg',
        'description' => 'Die klügsten Köpfe eines Imperiums arbeiten im Forschungszentrum, um neue Antriebsarten, effektivere Waffensysteme und andere fortschrittliche Technologien zu entwickeln.<br><br>Durch den Ausbau dieses Gebäudes wird die Effizienz der Forschungsarbeit gesteigert und neue Technologien werden schneller Verfügbar.',
        'level'       => 0,
        'aluminium'   => 1000,
        'titan'       => 775,
        'available'   => true
    ],
    'handelsboerse'     => [
        'key'         => 'handelsboerse',
        'name'        => 'Handelsbörse',
        'image'       => '/img/game/builds/handelsboerse.jpg',
        'description' => 'In der Handelsbörse werden sekündlich riesige Mengen an Rohstoffen getauscht. Die Handelskurse sind stark schwankend und basieren auf den Rohstoffmengen die im gesamten Universum bisher abgebaut und derzeit verfügbar sind.<br><br>Durch den Ausbau dieses Gebäudes kann ein Imperium immer größere Mengen an Rohstoffen gegen andere eintauschen.',
        'level'       => 0,
        'aluminium'   => 700,
        'titan'       => 750,
        'available'   => true
    ],
    'schiffsboerse'     => [
        'key'         => 'schiffsboerse',
        'name'        => 'Schiffsbörse',
        'image'       => '/img/game/builds/schiffsboerse.jpg',
        'description' => 'Die Schiffsbörse ist der Sammelplatz jener Seelenverkäufer die ihre alten Schiffe noch an den Mann bringen wollen. Aber auch das Militär nutzt hin und wieder diese Möglichkeit um ausgemusterte Schiffe zu verkaufen oder - wenn es sich um noch kleine Imperien handelt - hier günstige Schiff einzukaufen. Je größer diese Börse ausgebaut ist, desto breiter und größer wird das Angebot sein.',
        'level'       => 0,
        'aluminium'   => 750,
        'titan'       => 600,
        'available'   => true
    ],
];
