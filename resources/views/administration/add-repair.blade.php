    @extends('master')
    @section('content')

        <h2> Описване на ремонт</h2>

        <form class="form-horizontal" action="/addRepair" method="post">

            <input class="form-control" name="karting_id" type="hidden" id="formGroupInputLarge" placeholder="id" value="{{ $kartId}}">

            {{ csrf_field() }}

            <div class="form-group form-group-lg">

                <div class="col-sm-6">
                    <label for="comment">Описание на ремонт</label>
                    <textarea class="form-control" rows="3" id="comment" name="repair_description"></textarea>
                </div>

                <div class="col-sm-2">
                    <label for="comment">Цена на ремонт</label>
                    <input class="form-control" type="text" name="repair_price" id="formGroupInputLarge" placeholder="цена">
                </div>

            </div>

            <div class="form-group form-group-lg">
                <div class="col-sm-3">
                    <input class="form-control" name="created_at" type="date"  id="formGroupInputLarge" placeholder="date">
                </div>
                </div>



                <button name="subject" type="submit"  class="btn btn-success">Добави</button>

                <a class="btn btn-large btn-danger" href="/garage">Назад</a>


        </form>






        <h3>Направени ремонти до този момент</h3>


        <table class="table table-responsive">
            <thead>
            {{--<th>Картинг</th>--}}
            <th>Описание на ремонта</th>
            <th>Цена на ремонта</th>
            <th>Дата на извършеният ремонт</th>

            </thead>
            <tbody>

        @foreach($repair as $repairs)

            <tr>
                <td>{{ $repairs-> repair_description}}</td>
                <td>{{ $repairs-> repair_price}} лв</td>
                <td>{{ $repairs-> created_at}}</td>
            </tr>
            
        @endforeach

            </tbody>


        </table>

        @stop