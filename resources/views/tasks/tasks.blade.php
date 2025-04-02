@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Task List</h1>

        @if (empty($tasks))
            <p class="text-gray-600">No tasks to do at the moment.</p>
        @else
            <p class="text-gray-600">List of tasks to do:</p>
            <ul class="list-none">
                @foreach ($tasks as $task)
                    <li class="flex items-center py-2">
                        <span class="w-8 text-center">
                            @if ($task['status'])
                                <i class="fas fa-check text-green-500"></i>
                            @else
                                <i class="fas fa-times text-red-500"></i>
                            @endif
                        </span>
                        <span class="{{ $task['status'] ? 'text-green-500' : 'text-red-500' }} font-semibold">{{ $task['title'] }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection