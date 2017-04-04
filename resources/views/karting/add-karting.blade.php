@extends('karting.master')
@section('content')
    <h3>Добавяне на картинг</h3>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/karting/add') }}" enctype="multipart/form-data">


    {{ csrf_field() }}




    <div class="form-horizontal">
        <div class="form-group form-group-lg">
           {{-- <label class="col-sm-1 control-label" for="formGroupInputLarge">Модел</label> --}}
            <div class="col-sm-3">Модел на картинг
                <input class="form-control" name="name" type="text" id="formGroupInputLarge" placeholder="име/модел">
            </div>
        </div>
    </div>

    <div class="form-horizontal">
        <div class="form-group form-group-lg">

            <div class="col-sm-3">Рег.номер
                <input class="form-control" name="karting_number" type="number" id="formGroupInputLarge" placeholder="рег.номер">
            </div>
        </div>
    </div>

    <div class="form-horizontal">
        <div class="form-group form-group-lg">

            <div class="col-sm-3">Цена
                <input class="form-control" name="price" type="number" id="formGroupInputLarge" placeholder="цена">
            </div>
        </div>
    </div>

    <div class="form-horizontal">
        <div class="form-group form-group-lg">

            <div class="col-sm-3">Изминати километри
                <input class="form-control" name="km" type="number" id="formGroupInputLarge" placeholder="изминати км">
            </div>
        </div>
    </div>
        <div class="form-horizontal">
            <div class="form-group form-group-lg">

                <div class="col-sm-3">Изминати часове с картинга
                    <input class="form-control" name="karting_hours" type="number" id="formGroupInputLarge" placeholder="изминати км">
                </div>
            </div>
        </div>
    <div class="form-horizontal">
        <div class="form-group form-group-lg">

            <div class="col-sm-3">Дата за закупуване
                <input class="form-control" name="created_at" type="date"  id="formGroupInputLarge" placeholder="дата на закупуване">
            </div>
        </div>
    </div>


       {{--<input type="submit" name="name" class="btn btn-success">--}}
        <button name="subject" type="submit"  class="btn btn-success" >Запази</button>
        <a class="btn btn-large btn-warning" href="/home">Назад</a>
    </form>




  {{--<a class="btn btn-large btn-warning" href="/home">Назад</a>
    <a class="btn btn-large btn-danger" href="/home">Запази</a>--}}


@endsection

