@extends('layouts.main')
@section('content')
<div class="body">
    <form method="POST" action="{{route('reports.update', $report['id'])}}" class="report_add">
        @csrf
        <input type="text" name="number" value="{{$report['number']}}" required>
        <textarea name="description" required>{{$report['description']}}</textarea>
        <input type="submit" value="Обновить">
    </form>
</div>
@endsection