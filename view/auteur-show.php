{{include('header.php', {title: 'Auteur show'})}}
    <section class="sujet_show">
        <h2 class="nomShow">{{ auteurs.nom }}</h2>
        <p><strong>Nées le </strong> {{ auteurs.date_de_naissance }}</p>

        <div class="gestion">
            <a href="{{path}}auteur/edit/{{auteurs.id}}" class="btn">Modifier</a>

            <form action="{{path}}auteur/destroy" method="POST">
                <input type="hidden" name="id" value="{{auteurs.id}}">
                <input type="submit" value="Delete" class="btn_danger">
            </form>
        </div>
    </section>
      
    <h2 class="label_liste_show">Livres écrits</h2>
    <section class="liste_article_show">
        {% for livre in livres %}
            {% if auteurs.id == livre.Auteur_id %}
                <div class="champ">
                    <h3 class="nomChamp"><a href="{{path}}livre/show/{{ livre.id }}">{{ livre.titre }}</a></h3>
                    <p><strong>Publier le</strong> {{ livre.date_de_publication }}</p>
                </div>
            {% endif %}
        {% endfor %}
    </section> 
</body>