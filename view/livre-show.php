{{include('header.php', {title: 'Livre show'})}} 
    <section class="sujet_show">
        <h2 class="nomShow">{{ livres.titre }}</h2>
        <p><strong>Publier le</strong> {{ livres.date_de_publication }}</p>
        <p><strong>Prix avec un rabais de {{ livres.rabais }} % : </strong> {{ livres.prixRabais }} $</p>
        <p><strong>Auteur :</strong> <a href="{{path}}auteur/show/{{ auteurs.id }}">{{ auteurs.nom }}</a></p>
        <p><strong>Editeur :</strong> <a href="{{path}}editeur/show/{{ editeurs.id }}">{{ editeurs.nom }}</a></p>

        <div class="gestion">
            <a href="{{path}}livre/edit/{{livres.id}}" class="btn">Modifier</a>

            <form action="{{path}}livre/destroy" method="POST">
                <input type="hidden" name="id" value="{{livres.id}}">
                <input type="submit" value="Delete" class="btn_danger">
            </form>
        </div>
    </section>   
</body>