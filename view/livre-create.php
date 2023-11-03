{{include('header.php', {title: 'Livre create'})}}
    <div class="container_form">
        <form class="champ_formulaire" action="./store" method="post">
            <label for="nom">Nom</label>
            <input type="text" name="titre" value="{{livres.titre}}" id="nom" required>

            <label for="date_de_publication">Date de publication</label>
            <input type="date" name="date_de_publication" value="{{livres.date_de_publication}}" id="date_de_publication" required>

            <label for="prix">Prix en $</label>
            <input type="number" name="prix" value="{{livres.prix}}" id="prix" required>

            <label for="rabais">Rabais en pourcentage</label>
            <input type="number" name="rabais" value="{{livres.rabais}}" id="rabais" required>

            <label for="auteur">Auteur</label>
            <select name="auteur_id" id="auteur" required>
                <option value="">Selectionner un auteur</option>
                {%for auteur in auteurs %}
                    <option value="{{ auteur.id }}">{{ auteur.nom }}</option>
                {% endfor %}
            </select>

            <label for="editeur">Éditeur</label>
            <select name="editeur_id" id="editeur" required>
                <option value="">Selectionner un éditeur</option>
                {%for editeur in editeurs %}
                    <option value="{{ editeur.id }}">{{ editeur.nom }}</option>
                {% endfor %}
            </select>
            </label>

            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>