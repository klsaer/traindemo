@extends('layouts.main')
@section('content')
<div class="body">
    <div class="reports" display>
        @foreach ($reports as $report)
            <div class="report">
                <a href="{{route('reports.show', $report['id'])}}"><p>Номер {{$report['number']}}</p></a>
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
        <input type="text" placeholder="Номер авто" name="number" required>
        <textarea placeholder="Описание завявки" name="description" required></textarea>
        <input type="submit" value="Добавить заявку">
    </form>
</div>
@endsection