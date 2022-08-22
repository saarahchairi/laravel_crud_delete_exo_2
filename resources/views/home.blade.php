@extends('layout.index')

@section('content')
    <a href={{ route('cheap') }}>
        <button>Voitures - de 4.000€</button>
    </a>
    <a href={{ route('luxe') }}>
        <button>Voitures + de 4.000€</button>
    </a>
    <a href={{ route('reduc') }}>
        <button>Voitures en promo</button>
    </a>
    <hr>
    <form action="/create" method="POST">
        @csrf
        <input type="text" name="marque" placeholder="Marque du véhicule">
        <input type="number" name="annee" placeholder="Année de construction">
        <input type="text" name="couleur" placeholder="Couleur du véhicule">
        <input type="number" name="prix" placeholder="Prix de vente">
        <input type="number" name="reduction" placeholder="% de réduction">
        <input type="submit" name="submit">
    </form>
@endsection
