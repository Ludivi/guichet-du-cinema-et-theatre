<?php

require_once "model/Ticket.php";
class TicketCinema extends Ticket
{

    protected $film;
    protected $salle;
    protected $age;
    protected $seance;


    public function __construct($date, $tarif, $place, $film, $salle, $age, $seance)
    {
        parent::__construct($date, $tarif, $place);
        $this->age = $age;
        $this->salle = $salle;
        $this->seance = $seance;
        $this->film = $film;
    }

    public function render()
    { ?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <title>Votre ticket</title>
            <link href="css/style.css" rel="stylesheet">
        </head>

        <body>

            <div class="cardWrap">
                <div class="card cardLeft">
                    <h1>Ticket <span>Cinéma</span></h1>
                    <div class="title">
                        <h2><?= $this->film ?></h2>
                        <span>Film</span>
                    </div>
                    <div class="seat ">
                        <h2><?= date("d M Y", strtotime($this->date)) ?></h2>
                        <span>date</span>
                    </div>
                    <div class="seat">
                        <h2><?= $this->tarif ?></h2>
                        <span>tarif</span>
                    </div>
                    <div class="name">
                        <h2><?= $this->age ?></h2>
                        <span>age</span>
                    </div>

                    <div class="seat">
                        <h2><?= $this->seance  ?></h2>
                        <span>Séance</span>
                    </div>
                    <div class="time">
                        <h2><?= $this->salle  ?></h2>
                        <span>salle</span>
                    </div>
                    <div class="time">
                        <h2><?= $this->place ?></h2>
                        <span>place</span>
                    </div>
                    <div class="time">
                        <h2><?= $this->id  ?></h2>
                        <span>Numéro</span>
                    </div>

                </div>
                <div class="card cardRight">
                    <div class="eye"></div>
                    <div class="number">
                        <h3><?= $this->place ?></h3>
                        <span>place</span>
                    </div>

                    <div class="barcode"></div>
                </div>

            </div>
        </body>

        </html>

<?php
    }
}
