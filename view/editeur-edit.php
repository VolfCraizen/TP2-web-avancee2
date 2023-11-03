{{include('header.php', {title: 'Éditeur edit'})}}
    <div class="container_form">
        <form class="champ_formulaire" action="{{path}}editeur/update" method="post">
            <input type="hidden" name="id" value="{{ editeurs.id }}">

            <label for="nom">Nom </label>
            <input type="text" name="nom" value="{{editeurs.nom}}" id="nom" required>

            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" value="{{editeurs.adresse}}" id="adresse">
            
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" value="{{editeurs.telephone}}" id="telephone">

            <label for="courriel">Courriel</label>
            <input type="email" name="courriel" value="{{editeurs.courriel}}" id="courriel">

            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>