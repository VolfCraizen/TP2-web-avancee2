{{include('header.php', {title: 'Auteur edit'})}}
    <div class="container_form">
        <form class="champ_formulaire" action="{{path}}auteur/update" method="post">
            <input type="hidden" name="id" value="{{ auteurs.id }}">

            <label for="nom">Nom</label>
            <input type="text" name="nom" value="{{auteurs.nom}}" id="nom" required>

            <label for="date_de_naissance">Date de naissance</label>
            <input type="date" name="date_de_naissance" value="{{auteurs.date_de_naissance}}" id="date_de_naissance">
            
            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>