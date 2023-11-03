{{include('header.php', {title: 'Auteur create'})}}
    <div class="container_form">
        <form class="champ_formulaire" action="./store" method="post">

            <label for="nom">Nom</label>
            <input type="text" name="nom" value="{{auteurs.nom}}" id="nom" required>

            <label for="date_de_naissance">Date de naissance</label>
            <input type="date" name="date_de_naissance" value="{{auteurs.date_de_naissance}}" id="date_de_naissance">

            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>