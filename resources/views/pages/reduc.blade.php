@extends('layout.index')

@section('content')
    <table>
        <tr>
            <th>Marque du véhicule</th>
            <th>Année de construction</th>
            <th>Couleur</th>
            <th>Prix de vente</th>
            <th>Réduction</th>
            <th>Prix promo</th>
        </tr>
        @foreach ($promoCar as $item)
            <tr>
                <td>{{ $item->marque }}</td>
                <td>{{ $item->annee }}</td>
                <td>{{ $item->couleur }}</td>
                <td>{{ $item->prix }}</td>
                <td>{{ $item->reduction }}</td>
                <td>{{ $item->prix - ($item->prix * $item->reduction) / 100 }}</td>
                <td>
                    <form action="/{{$item->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprime</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
