function createBreadcrumb() {
    // Récupérez l'URL actuelle
    var path = window.location.pathname;

    // Divisez l'URL en segments
    var segments = path.split('/').filter(Boolean);

    // Créez le fil d'Ariane
    var breadcrumb = '<a href="/">Accueil</a>';

    for (var i = 0; i < segments.length; i++) {
        breadcrumb += ' &gt; ';
        breadcrumb += '<a href="/' + segments.slice(0, i + 1).join('/') + '">' + segments[i] + '</a>';
    }

    // Affichez le fil d'Ariane dans la div dédiée
    document.getElementById('breadcrumb').innerHTML = breadcrumb;
}

// Appelez la fonction pour générer le fil d'Ariane
createBreadcrumb();
