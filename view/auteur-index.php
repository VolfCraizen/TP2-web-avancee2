{{include('header.php', {title: 'Auteur'})}}
    <div class="page_name">
        <h2>Liste des auteurs</h2>
        <a href="{{path}}auteur/create" class="btn">Ajouter un auteur</a> 
    </div>

    <section class="liste_index">
        {% for auteur in auteurs %}
        <div class="champ_index">
            <h3 class="nomChamp"><a href="{{path}}auteur/show/{{ auteur.id }}">{{ auteur.nom }}</a></h3>
            <p><strong>Né le</strong> {{ auteur.date_de_naissance }}</p>

            <div class="gestion">
                <a href="{{path}}auteur/edit/{{auteur.id}}" class="btn">Modifier</a>

                <form action="{{path}}auteur/destroy" method="POST">
                    <input type="hidden" name="id" value="{{auteur.id}}">
                    <input type="submit" value="Delete" class="btn_danger">
                </form>
            </div>
        </div>
        {% endfor %}        
    </section>       
</body>