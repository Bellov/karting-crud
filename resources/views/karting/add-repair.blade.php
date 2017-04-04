@extends('karting.master')
@section('content')
    <h2>Ремонти </h2>



  {{--

  <div class="form-group">
        <label for="comment">Описание на ремонта който е направен</label>
        <textarea class="form-control" rows="3" id="comment"></textarea>
    </div>


  test

    {{ dump($repairs->toArray())}}
    {{ dump($kartId)}}
--}}
    <form class="form-horizontal" action="/addRepair" method="post">


        <input class="form-control" name="kartings_id" type="hidden" id="formGroupInputLarge" placeholder="id" value="{{ $kartId}}">

        {{ csrf_field() }}

        <div class="form-group form-group-lg">

            <div class="col-sm-6">
                <label for="comment">Описание на ремонт</label>
                <textarea class="form-control" rows="3" id="comment" name="repairs_description"></textarea>
            </div>

            <div class="col-sm-2">
                <label for="comment">Цена на ремонт</label>
                <input class="form-control" type="text" name="repairs_price" id="formGroupInputLarge" placeholder="цена">
            </div>

        </div>

        <div class="form-group form-group-lg">
            <div class="col-sm-3">
                <input class="form-control" name="created_at" type="date"  id="formGroupInputLarge" placeholder="date">
            </div>
        </div>



        <button name="subject" type="submit"  class="btn btn-success">Добави</button>
        <a class="btn btn-large btn-danger" href="/home">Назад</a>

    </form>


   {{--<a class="btn btn-large btn-danger" href="/addRepair">Запазване на направеният ремонт</a>--}}








    <h3>Направени ремонти до този момент</h3>



    <table class="table table-responsive">
        <thead>
       {{--<th>Картинг</th>--}}
        <th>Описание на ремонта</th>
        <th>Цена на ремонта</th>
        <th>Дата на извършеният ремонт</th>
        </thead>
        <tbody>

        @foreach($repairs as $repair)
            <tr>
          {{--<td>{{ $repair-> kartings_id }}</td>--}}

            <td>{{ $repair-> repairs_description }}</td>
            <td>{{ $repair-> repairs_price}} лв</td>
            <td>{{ $repair-> created_at}}</td>
            </tr>
         @endforeach

        </tbody>


    </table>


   {{--
   <div class="form-group">

        <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>



   --}}
@endsection