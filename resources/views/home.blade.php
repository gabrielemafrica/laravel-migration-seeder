@extends('layouts.main-layout')

@section('pageName')
    Home
@endsection

@section('content')
    <main class="py-4">
        <div class="container">
            <h1 class="text-center my-5">RIEPILOGO TRENI</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">azienda</th>
                        <th scope="col">stazione di partenza</th>
                        <th scope="col">stazione di arrivo</th>
                        <th scope="col">orario di partenza</th>
                        <th scope="col">orario di arrivo</th>
                        <th scope="col">codice treno</th>
                        <th scope="col">numero di carrozze</th>
                        <th scope="col">in orario</th>
                        <th scope="col">cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{ $train->azienda }}</th>
                            <td>{{ $train->stazione_di_partenza }}</td>
                            <td>{{ $train->stazione_di_arrivo }}</td>
                            <td>{{ $train->orario_di_partenza }}</td>
                            <td>{{ $train->orario_di_arrivo }}</td>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->numero_carrozze }}</td>
                            @if ($train->in_orario)
                                <td>in orario</td>
                            @else
                                <td>RITARDO</td>
                            @endif
                            @if ($train->cancellato)
                                <td>SOPPRESSO</td>
                            @else
                                <td>REGOLARE</td>
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
