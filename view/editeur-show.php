{{include('header.php', {title: 'Editeurs show'})}}
    <section class="sujet_show">
        <h2 class="nomShow">{{ editeurs.nom }}</h2>
        <p><strong>Adresse</strong> {{ editeurs.adresse }}</p>
        <p><strong>Numéro de téléphone :</strong> {{ editeurs.telephone }}</p>
        <p><strong>Adresse courriel :</strong> {{ editeurs.courriel }}</p>

        <div class="gestion">
            <a href="{{path}}editeur/edit/{{editeurs.id}}" class="btn">Modifier</a>

            <form action="{{path}}editeur/destroy" method="POST">
                <input type="hidden" name="id" value="{{editeurs.id}}">
                <input type="submit" value="Delete" class="btn_danger">
            </form>
        </div>
    </section>
    
    <h2 class="label_liste_show">Livres publiés</h2>
    <section class="liste_article_show">
        {% for livre in livres %}
            {% if editeurs.id == livre.Editeur_id %} 
                <div class="champ">
                    <h3 class="nomChamp"><a href="{{path}}livre/show/{{ livre.id }}">{{ livre.titre }}</a></h3>
                    <p><strong>Publier le</strong> {{ livre.date_de_publication }}</p>
                </div>
            {% endif %}
        {% endfor %}
    </section>
</body>