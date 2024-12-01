@extends('layouts.main')
@section('content')
<div class="body">
    <form method="POST" action="{{route('reports.update', $report['id'])}}" class="report_add">
        @csrf
        <input type="text" name="number" value="{{$report['number']}}" required>
        <textarea name="description" required>{{$report['description']}}</textarea>
        {{--<select name="status_id">
            @foreach($statuses as $status)
                <option value="{{ $status->id }}">{{ $status->name }}</option>
            @endforeach
        </select>--}}
        <input type="submit" value="Обновить">
    </form>
</div>
@endsection