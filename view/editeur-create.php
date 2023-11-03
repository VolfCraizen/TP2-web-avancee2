{{include('header.php', {title: 'Éditeur create'})}}
    <div class="container_form">
        <form class="champ_formulaire" action="./store" method="post">
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="{{editeurs.nom}}" required>

            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" value="{{editeurs.adresse}}" id="adresse">

            <label for="telephone">Numéro de téléphone</label>
            <input type="text" name="telephone" value="{{editeurs.telephone}}" id="telephon">

            <label for="courriel">Courriel</label>
            <input type="email" name="courriel" value="{{editeurs.courriel}}" id="courriel">

            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>