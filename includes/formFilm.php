<form id="formulaire" name="formulaire" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Formulaire d'ajout de film</legend>

        <!-- Text input-->
        <div class="form-group">
            <div class="col-md-4">
                <input id="titre" name="titre" type="text" placeholder="titre du film" class="form-control input-md">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <!-- Text input-->
        <div class="form-group">
            <div class="col-md-4">
                <input id="actors" name="actors" type="text" placeholder="Acteur Principal" class="form-control input-md">
            </div>
        </div>
        <br>
        <hr>
        <br>

        <!-- Text input-->
        <div class="form-group">
            <div class="col-md-4">
                <input id="director" name="director" type="text" placeholder="Réalisateur" class="form-control input-md">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <!-- Text input-->
        <div class="form-group">
            <div class="col-md-4">
                <input id="producer" name="producer" type="text" placeholder="Producteur" class="form-control input-md">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <!-- Text input-->
        <div class="form-group">
            <div class="col-md-4">
                <input id="yearofprod" name="yearofprod" type="text" placeholder="Année de Production" class="form-control input-md">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <!-- Select Basic -->
        <div class="form-group">
            <div class="col-md-4">
                <select id="language" name="language" class="form-control">
                    <option value="1">Français</option>
                    <option value="2">Anglais</option>
                    <option value="3">Espagnol</option>
                    <option value="4">Italien</option>
                    <option value="5">Allemand</option>
                    <option value="6">Portuguais</option>
                    <option value="7">Japonais</option>
                    <option value="8">Russe</option>
                    <option value="9">Chinois</option>
                    <option value="10">Arabe</option>
                </select>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <div class="col-md-4">
                <label class="radio-inline" for="thriller">
                    <input type="radio" name="categorie" id="thriller" value="1">
                    Thriller
                </label>
                <label class="radio-inline" for="fantastique">
                    <input type="radio" name="categorie" id="fantastique" value="2">
                    Fantastique
                </label>
                <label class="radio-inline" for="animation">
                    <input type="radio" name="categorie" id="animation" value="3">
                    Animation
                </label>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <!-- Textarea -->
        <div class="form-group">
            <div class="col-md-4">
                <textarea class="form-control" id="storyline" name="storyline">Synopsis du film...</textarea>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <!-- Text input-->
        <div class="form-group">
            <div class="col-md-4">
                <input id="video" name="video" type="text" placeholder="Lien pour bande annonce" class="form-control input-md">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <!-- Button -->
        <div class="form-group">
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Ajouter Film</button>
            </div>
        </div>

    </fieldset>
</form>
