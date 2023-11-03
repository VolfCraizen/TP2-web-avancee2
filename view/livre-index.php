{{include('header.php', {title: 'Livres'})}}
    <div class="page_name">
        <h2>Liste de livres</h2>
        <a href="{{path}}livre/create" class="btn">Ajouter un livre</a>  
    </div>
        
    <section class="liste_index">
        {% for livre in livres %}
        <div class="champ_index">
            <h3 class="nomChamp"><a href="{{path}}livre/show/{{ livre.id }}">{{ livre.titre }}</a></h3>
            <p><strong>Publier le</strong> {{ livre.date_de_publication }}</p>
            <p><strong>Prix avec un rabais de {{ livre.rabais }} % : </strong> {{ livre.prixRabais }} $</p>
            <p><strong>Auteur :</strong> <a href="{{path}}auteur/show/{{ livre.livreAuteur.id }}">{{ livre.livreAuteur.nom }}</a></p>
            <p><strong>Editeur :</strong> <a href="{{path}}editeur/show/{{ livre.livreAuteur.id }}">{{ livre.livreEditeur.nom }}</a></p>
                
            <div class="gestion">
                <a href="{{path}}livre/edit/{{livre.id}}" class="btn">Modifier</a>

                <form action="{{path}}livre/destroy" method="POST">
                    <input type="hidden" name="id" value="{{livre.id}}">
                    <input type="submit" value="Delete" class="btn_danger">
                </form>
            </div>
        </div>
        {% endfor %}
    </section>  
</body>