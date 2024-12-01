@extends('layouts.main')
@section('content')
<div class="body">
    <div class="reports" display>
        @foreach ($reports as $report)
            <div class="report">
                <p>Номер {{$report['number']}}</p>
                <p>Описание <br> {{$report['description']}}</p>
                <p>Дата создания <br> {{$report['added_at']}}</p>
                <form method="POST" action="{{route('reports.destroy', $report['id'])}}">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Удалить">
                </form>
            </div>
        @endforeach
    </div>
    <form method="POST" action="{{route('reports.store')}}" class="report_add">
        @csrf
        <input type="text" placeholder="Номер авто" name="number">
        <textarea placeholder="Описание завявки" name="description"></textarea>
        <input type="submit" value="Добавить заявку">
    </form>
</div>
@endsection