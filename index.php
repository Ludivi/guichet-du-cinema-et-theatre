<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Atelier 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Générateur de tickets</h1>
        <form method="post" action="ticket.php">
            <div class="mb-3">
                <label for="tarif" class="form-label">Choix du tarif</label>
                <select class="form-select" aria-label="Default select example" id="tarif" name="tarif">
                    <option selected>Chosissez un tarif</option>
                    <option value="Normal">Normal</option>
                    <option value="Réduit">Réduit</option>
                    <option value="Enfant">Enfant</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Choix de la date</label>
                <input class="form-control" type="date" id="date" name="date" value="<?= date("Y-m-d") ?>" min="2020-01-01" max="2030-12-31">
            </div>

            <div class="mb-3">
                <label for="place" class="form-label">Choix de la place</label>
                <select class="form-select" aria-label="Default select example" id="place" name="place">
                    <option selected>Chosissez une place</option>
                    <?php for ($i = 1; $i < 100; $i++) { ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
                </select>
            </div>


            <div class="col-12 d-flex">
                <div class="form-check col-6">
                    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1" value="cinema" checked>
                    <label class="form-check-label" for="type">
                        Ticket de cinéma
                    </label>
                </div>
                <div class="form-check col-6">
                    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="theatre">
                    <label class="form-check-label" for="type">
                        Ticket de théâtre
                    </label>
                </div>
            </div>
            <hr>


            <!-- CINEMA -->
            <div class="col-12 d-flex">
                <div class="col-6 px-2">
                    <h2 class="text-center">Ticket de Cinéma</h2>
                    <div class="mb-3">
                        <label for="film" class="form-label">Choix du film</label>
                        <select class="form-select" aria-label="Default select example" id="film" name="film">
                            <option selected>Choisissez un film parmi ceux à l'affiche</option>
                            <option value="Alice au Pays des Merveilles">Alice au Pays des Merveilles</option>
                            <option value="Dune">Dune</option>
                            <option value="Star Wars épisode 4">Star Wars épisode 4</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="age" class="form-label">Age minimum</label>
                        <select class="form-select" aria-label="Default select example" id="age" name="age">
                            <option selected>Age minimum requis pour voir le film</option>
                            <?php for ($i = 7; $i <= 18; $i++) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="age" class="form-label">Salle</label>
                        <select class="form-select" aria-label="Default select example" id="salle" name="salle">
                            <option selected>Salle de projection</option>
                            <?php for ($i = 1; $i <= 8; $i++) { ?>
                                <option value="<?= $i ?>">Salle <?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="seance" class="form-label">Séance</label>
                        <select class="form-select" aria-label="Default select example" id="seance" name="seance">
                            <option selected>Choisissez la séance</option>
                            <option value="10:15">10:15</option>
                            <option value="13:00">13:00</option>
                            <option value="16:30">16:30</option>
                        </select>
                    </div>

                </div>


                <!-- Théâtre -->
                <div class="col-6 px-2">
                    <h2 class="text-center">Ticket de Théâtre</h2>
                    <div class="mb-3">
                        <label for="piece" class="form-label">Choix de la pièce</label>
                        <select class="form-select" aria-label="Default select example" id="piece" name="piece">
                            <option selected>Choisissez une pièce parmi celles à l'affiche</option>
                            <option value="Hamlet">Hamlet</option>
                            <option value="Le malade imaginaire">Le malade imaginaire</option>
                            <option value="Le père Noël est une ordure">Le père Noël est une ordure</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="heure_debut" class="form-label">Heure de début</label>
                        <select class="form-select" aria-label="Default select example" id="heure_debut" name="heure_debut">
                            <option selected>Choisissez l'heure de début</option>
                            <option value="18:15">18:15</option>
                            <option value="19:30">19:30</option>
                            <option value="21:00">21:00</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="heure_entracte" class="form-label">Heure de l'entracte</label>
                        <select class="form-select" aria-label="Default select example" id="heure_entracte" name="heure_entracte">
                            <option selected>Choisissez l'heure de l'entracte</option>
                            <option value="20:15">20:15</option>
                            <option value="21:30">21:30</option>
                            <option value="23:00">23:00</option>
                        </select>
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-primary col-12">Générer le ticket</button>
        </form>
    </div>
</body>

</html>
