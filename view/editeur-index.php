{{include('header.php', {title: 'Éditeurs'})}}
    <div class="page_name">
        <h2>Liste des éditeurs</h2>
        <a href="{{path}}editeur/create" class="btn">Ajouter un éditeur</a>
    </div>
        
    <section class="liste_index">
        {% for editeur in editeurs %}
        <div class="champ_index">
            <h3 class="nomChamp"><a href="{{path}}editeur/show/{{ editeur.id }}">{{ editeur.nom }}</a></h3>
            <p><strong>Adresse</strong> {{ editeur.adresse }}</p>
            <p><strong>Numéro de téléphone :</strong> {{ editeur.telephone }}</p>
            <p><strong>Adresse courriel :</strong> {{ editeur.courriel }}</p>

            <div class="gestion">
                <a href="{{path}}editeur/edit/{{editeur.id}}" class="btn">Modifier</a>

                <form action="{{path}}editeur/destroy" method="POST">
                    <input type="hidden" name="id" value="{{editeur.id}}" class="btn">
                    <input type="submit" value="Delete" class="btn_danger">
                </form>
            </div>
        </div>
        {% endfor %}  
    </section>
</body>