<!-- resources/views/tweets/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Sewing Memo Details') }}
      </h2>
    </x-slot>
  
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <a href="{{ route('memos.index') }}" class="text-blue-500 hover:text-blue-700 mr-2">Return to index</a>
            <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $memo->title }}</p>
            <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $memo->photo_path }}</p>
            <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $memo->pattern }}</p>
            <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $memo->pattern_path }}</p>
            <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $memo->fabric }}</p>
            <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $memo->fabric_path }}</p>
            <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $memo->memo }}</p>
            <p class="text-gray-600 dark:text-gray-400 text-sm">Posted by: {{ $memo->user->name }}</p>
            <div class="text-gray-600 dark:text-gray-400 text-sm">
              <p>Created at: {{ $memo->created_at->format('Y-m-d H:i') }}</p>
              <p>Updated at: {{ $memo->updated_at->format('Y-m-d H:i') }}</p>
            </div>
            @if (auth()->id() == $memo->user_id)
            <div class="flex mt-4">
              <a href="{{ route('memos.edit', $memo) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
              <form action="{{ route('memos.destroy', $memo) }}" method="POST" onsubmit="return confirm('Do you really delete the post?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
              </form>
            </div>
            @endif
            <div class="flex mt-4">
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
        </div>
      </div>
    </div>
  </x-app-layout>