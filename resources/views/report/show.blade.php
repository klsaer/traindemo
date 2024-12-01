@extends('layouts.main')
@section('content')
<div class="body">
    <form method="POST" action="{{route('reports.store')}}" class="report_add">
        @csrf
        <input type="text" name="number" value="{{$report['number']}}" required>
        <textarea value="Привет" name="description" required></textarea>
        <input type="submit" value="Обновить">
    </form>
</div>
@endsection