@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <main>
      <section id="table-train">
        <div class="container">
            <table class="table my-5">
                <thead>
                  <tr>
                    <th scope="col">Codice</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">N. Carrozze</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($trains as $train)
                  <tr>
                    <th scope="row">{{$train->code}}</th>
                    <td>{{$train->on_time}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->company}}</td>
                    <td>{{$train->carriage_number}}</td>
                  </tr>
                  @empty
                    <tr>
                      <th scope="row" colspan="9">Non ci sono treni</th>
                    </tr>
                  @endforelse

                </tbody>
              </table>
        </div>
      </section>
    </main>
@endsection