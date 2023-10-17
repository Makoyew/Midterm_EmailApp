@extends('base')

@include('navbar')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="my-4">Log List</h1>
    </div>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th class="text-center">Timestamp</th>
                <th class="text-center">Log Entry</th>
            </tr>
        </thead>
        <tbody>
            @if ($logEntries->isEmpty())
                <tr>
                    <td colspan="2">No log entries found.</td>
                </tr>
            @else
                @foreach ($logEntries as $logEntry)
                    <tr>
                        <td>{{ $logEntry->formattedCreatedAt }}</td>
                        <td>{{ $logEntry->log_entry }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection
