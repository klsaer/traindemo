@extends('layouts.main')
@section('content')
<div class="reports" display>
@foreach ($reports as $report)
<div class="report">
<p>Номер {{$report['number']}}</p>
<p>Описание <br> {{$report['description']}}</p>
<p>Дата создания <br> {{$report['added_at']}}</p>
</div>
@endforeach
</div>
@endsection