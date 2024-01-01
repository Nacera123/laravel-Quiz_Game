{{ View('layout.navbar') }}

{{-- @php
    $levelNames = $levelNames->pluck('name');
    dd($id, $levelNames)
@endphp --}}

<div id="breadcrumb">
    <!-- Le fil d'Ariane sera affiché ici -->
</div>


<div class="divLevel">
    @foreach ($levelNames as $name)
        <button type="button" class="btn btn-secondary btn-lg btn-block btnLevel">{{ $name->name }}</button>
    @endforeach
</div>
<script>

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
</script>