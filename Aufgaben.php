<?php include "DataArrays.php"?>
<?php include "Header_auslagerung.php" ?>
            <h1>Aufgaben</h1>
        </div>
    </div>
    <?php include "Sidebar_auslagerung.php"?>
        <div class="col-8">
            <div class ="card" style="">
                <div class="card-header">
                    <div class="row">
                        <div class="col-3">
                            Aufgabenbezeichnung
                        </div>
                        <div class="col-3">
                            Beschreibung der Aufgabe
                        </div>
                        <div class="col-2">
                            Reiter
                        </div>
                        <div class="col">
                            Zuständig
                        </div>
                    </div>
                </div>
                <div class="list-group">
                    <div class="row">
                        <div class="col">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        HTML Datei erstellen
                                    </div>
                                    <div class="col-3">
                                        HTML Datei erstellen
                                    </div>
                                    <div class="col-2">
                                        ToDo
                                    </div>
                                    <div class="col">
                                       <?php echo $Personen[0]["name"]?>
                                    </div>
                                    <div class="col-0">
                                        <div class="text-primary">
                                            <?php include "edit_delete_icon_auslagerung.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        CSS Datei erstellen
                                    </div>
                                    <div class="col-3">
                                        CSS Datei erstellen
                                    </div>
                                    <div class="col-2">
                                        ToDo
                                    </div>
                                    <div class="col">
                                        <?php echo $Personen[0]["name"]?>
                                    </div>
                                    <div class="col-0">
                                        <div class="text-primary">
                                            <?php include "edit_delete_icon_auslagerung.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        PC eingeschaltet
                                    </div>
                                    <div class="col-3">
                                        PC einschalten
                                    </div>
                                    <div class="col-2">
                                        Erledigt
                                    </div>
                                    <div class="col">
                                        <?php echo $Personen[0]["name"]?>
                                    </div>
                                    <div class="col-0">
                                        <div class="text-primary">
                                            <?php include "edit_delete_icon_auslagerung.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        Kaffee trinken
                                    </div>
                                    <div class="col-3">
                                        Kaffee trinken
                                    </div>
                                    <div class="col-2">
                                        Erledigt
                                    </div>
                                    <div class="col">
                                        <?php echo $Personen[0]["name"]?>
                                    </div>
                                    <div class="col-0">
                                        <div class="text-primary">
                                            <?php include "edit_delete_icon_auslagerung.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        Für die Uni lernen
                                    </div>
                                    <div class="col-3">
                                        Für die Uni lernen
                                    </div>
                                    <div class="col-2">
                                        Verschoben
                                    </div>
                                    <div class="col">
                                        <?php echo $Personen[0]["name"]?>
                                    </div>
                                    <div class="col-0">
                                        <div class="text-primary">
                                            <?php include "edit_delete_icon_auslagerung.php"?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coL">
                <h3 style="margin-top: 5%">
                    Bearbeiten/Erstellen
                </h3>
                <form class="mb-4">
                    <div class="form-group">
                        <label for="aufgabenFeld">Aufgabenbezeichnung</label>
                        <input type="text" class="form-control" id = "aufgabenFeld" placeholder="Aufgabe">
                    </div>
                    <div class="form-group">
                        <label for="descriptionField">Beschreibung der Aufgabe</label>
                        <textarea class="form-control" id="descriptionField" rows="3" placeholder="Beschreibung"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="datePicker">Erstellungsatum</label>
                        <input class="form-control" type="date" value="" id="datePicker">
                    </div>
                    <div class="form-group">
                        <label for="submitDatePicker">Fällig am</label>
                        <input class="form-control" type="date" value="" id="submitDatePicker">
                    </div>
                    <div class="form-group">
                        <label for="zugehörigerReiter">Zugehöriger Reiter</label>

                        <select class="custom-select" id="zugehörigerReiter">
                            <option selected>Wähle einen Reiter</option>
                            <option value="ToDo">ToDo</option>
                            <option value="Erledigt">Erledigt</option>
                            <option value="Verschoben">Verschoben</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="zuständigePerson">Zuständig</label>
                        <select class="custom-select" id="zuständigePerson">
                            <option value="Moritz Maywald" selected><?php echo $Personen[0]['name']?></option>
                            <option value="Ferdifuchs"><?php echo $Personen[1]['name']?></option>
                        </select>
                    </div>
                    <?php include "save_reset_buttons_auslagerung.php" ?>
                </form>

            </div>
        </div>
    </div>
</div>
</body>
