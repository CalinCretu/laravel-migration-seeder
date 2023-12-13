@extends('layouts.default')

@section('content')
    <section>
        <div class="container d-flex align-content-center flex-column main-section">
            <h1 class="text-center">
                Treni in Partenza Oggi
            </h1>
            <table>
                <thead>
                    <tr>
                        <th>Azienda</th>
                        <th>Partenza</th>
                        <th>Arrivo</th>
                        <th>Orario Partenza</th>
                        <th>Orario Arrivo</th>
                        <th>Codice Treno</th>
                        <th>Numero Carrozze</th>
                        <th>In Orario</th>
                        <th>Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->azienda }}</td>
                            <td>{{ $train->partenza }}</td>
                            <td>{{ $train->arrivo }}</td>
                            <td>{{ $train->orario_partenza }}</td>
                            <td>{{ $train->orario_arrivo }}</td>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->numero_carrozze }}</td>
                            <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                            <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
