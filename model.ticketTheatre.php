<?php
require_once "Ticket.php";
class TicketTheatre extends Ticket
{

    protected $piece;
    protected $heure_debut;
    protected $heure_entracte;

    public function __construct($date, $tarif, $place, $piece, $heure_debut, $heure_entracte)
    {
        parent::__construct($date, $tarif, $place);
        $this->piece = $piece;
        $this->heure_debut = $heure_debut;
        $this->heure_entracte = $heure_entracte;
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
                    <h1>Ticket <span>Théâtre</span></h1>
                    <div class="title">
                        <h2><?= $this->piece ?></h2>
                        <span>Pièce</span>
                    </div>
                    <div class="seat ">
                        <h2><?= date("d M Y", strtotime($this->date)) ?></h2>
                        <span>date</span>
                    </div>
                    <div class="name">
                        <h2><?= $this->tarif ?></h2>
                        <span>tarif</span>
                    </div>

                    <div class="seat">
                        <h2><?= $this->heure_debut  ?></h2>
                        <span>Heure</span>
                    </div>
                    <div class="time">
                        <h2><?= $this->heure_entracte  ?></h2>
                        <span>entracte</span>
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
