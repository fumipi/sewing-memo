<!-- resources/views/tweets/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Sewing Memo List') }}
      </h2>
    </x-slot>
  
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            @foreach ($memos as $memo)
            <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
              <p class="text-gray-800 dark:text-gray-300">{{ $memo->title }}</p>
              <p class="text-gray-600 dark:text-gray-400 text-sm">Posted by: {{ $memo->user->name }}</p>
              <a href="{{ route('memos.show', $memo) }}" class="text-blue-500 hover:text-blue-700">See details</a>
              <div class="flex">
                @if ($memo->liked->contains(auth()->id()))
                <form action="{{ route('memos.dislike', $memo) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-500 hover:text-red-700">dislike {{$memo->liked->count()}}</button>
                </form>
                @else
                <form action="{{ route('memos.like', $memo) }}" method="POST">
                  @csrf
                  <button type="submit" class="text-blue-500 hover:text-blue-700">like {{$memo->liked->count()}}</button>
                </form>
                @endif
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  
  </x-app-layout>