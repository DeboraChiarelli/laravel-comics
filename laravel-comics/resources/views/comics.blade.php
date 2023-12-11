@extends("layouts.layout") <!-- Questo comando Blade estende il layout esistente in layouts.layout. 
Quindi, il contenuto di questa vista viene inserito nel punto in cui è definito @yield("content") nel layout specificato. -->

@section ("content") <!-- Questa sezione definisce il blocco "content" nel layout genitore. Il contenuto viene quindi inserito in questo blocco del layout. -->

<main>
<!-- Il ciclo foreach itera attraverso l'array $comics e assegna ogni elemento alla variabile $comic durante ogni iterazione. -->
    @foreach ($comics as $comic)

        <div class="card">
        <!-- Stampo il titolo del fumetto all'interno del blocco div.card utilizzando la sintassi di Blade {{ ... }}. -->
          {{$comic["title"]}}

        </div>
        <!-- Stampo la descrizione del fumetto all'interno di un paragrafo HTML (<p>). -->
        <p> {{$comic["description"]}}</p>
        <!-- Mostro l'immagine del fumetto utilizzando l'URL specificato dalla chiave 'thumb' nell'array $comic. L'attributo alt è impostato su "non trovata" nel caso in cui l'immagine non venga caricata correttamente. -->
        <img src="{{ $comic['thumb'] }}" alt="non trovata">

    @endforeach

</main>
<!-- Ogni cosa compresa tra @section("content") e @endsection viene inserita nel blocco "content" del layout genitore. -->
@endsection 