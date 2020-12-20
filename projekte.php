

<?php include "Header_auslagerung.php" ?>
                <h1>Projekte</h1>
            </div>
        </div>
        <?php include "Sidebar_auslagerung.php"?>
                <div class="col">
                <h1>Projekt Auswählen</h1>
                <div class="form-group">
                    <select class="form-control" id = "projectSelect">
                        <option>Projekt 1</option>
                        <option>Projekt 2</option>
                        <option>Projekt 3</option>
                        <option>Projekt 4</option>
                    </select>
                    <div class="row">
                        <div class = "col">
                            <button type="button" class="btn btn-primary" style="margin-top: 1%">Auswählen</button>
                            <button type="button" class="btn btn-primary" style="margin-top: 1%">Bearbeiten</button>
                            <button type="button" class="btn btn-danger" style="margin-top: 1%">Löschen</button>
                        </div>
                    </div>
                </div>
                <h1>Projekt bearbeiten/erstellen</h1>
                <form class ="mb-4">
                    <div class="form-group">
                        <label for="projektFeld">Projektname</label>
                        <input type="text" class="form-control" id = "projektFeld">
                    </div>
                    <div class="form-group">
                        <label for="descriptionField">Projektbeschreibung</label>
                        <textarea class="form-control" id="descriptionField" rows="3"></textarea>
                    </div>
                    <?php include "save_reset_buttons_auslagerung.php" ?>
                </form>
            </div>


        </div>




    </div>


</body>