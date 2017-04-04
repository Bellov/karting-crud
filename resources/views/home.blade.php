@extends('layouts.master')
@section('content')

    <h3>Картинг</h3>
    <table class="table table-bordered">
        <thead>
        <th>Номер</th>
        <th>Картинг</th>
        <th>Номер на картинг</th>
        <th>Дата на закупуване</th>
        <th>Цена</th>
        <th>Изминати километри</th>
        <th>Часове на каране</th>

        </thead>

      {{-- test karting
      {{ dump ( $kartings ) }}
      --}}

        <tbody>
        @foreach ($kartings as $karting)

            @if(  count( $karting['karting_information']) > 0  )

                @foreach ($karting['karting_information'] as $Kart)

                    <tr>
                        <td> {{ $karting['id'] }}</td>
                        <td> {{ $karting['name'] }}</td>
                        <td> {{ $Kart['karting_number'] }}
                        <td> {{ $Kart['created_at'] }}</td>
                        <td> {{ $Kart['price'] }} лв.</td>
                        <td> {{ $Kart['km'] }} км</td>
                        <td> {{ $Kart['karting_hours'] }}</td>

                        <td><a class="btn btn-large btn-success" href="{{url('kartingRepair/'. $karting['id']) }}">Ремонти</a></td>

                       <td><a  class="btn btn-large btn-danger" href="{{url('karting/delete_info/'. $karting['id'].'/'.$Kart['karting_number']   ) }}">Изтрий</a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td> {{ $karting['id'] }}</td>
                    <td> {{ $karting['name'] }}</td>
                   {{--<td><a class="btn btn-large btn-danger" href="/home">Изтрий</a></td>--}}

                    <td><a class="btn btn-large btn-success" href="{{  url('kartingRepair/'. $karting['id']) }}">Ремонти</a></td>

                   <td><a  class="btn btn-large btn-danger" href="{{  url('karting/delete/'. $karting['id']) }}">Изтрий</a></td>
                </tr>
            @endif
            {{--    <td> {{ $karting['karting_information']['karting_number'] }}
                <td> {{ $karting['karting_information']['created_at'] }}</td>
                <td> {{ $karting['karting_information']['price'] }}</td>
                <td> {{ $karting['karting_information']['km'] }}</td>
                <td> {{ $karting['karting_information']['karting_hours'] }}</td>--}}






        @endforeach

        </tbody>
    </table>



    <a class="btn btn-large btn-warning" href="create">Добави картинг</a>
    <a class="btn btn-large btn-info" href="/">Назад</a>



@endsection


