<!-- resources/views/tweets/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Sewing Memo') }}
      </h2>
    </x-slot>
  
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <a href="{{ route('memos.show', $memo) }}" class="text-blue-500 hover:text-blue-700 mr-2">Return to Details</a>
            <form method="POST" action="{{ route('memos.update', $memo) }}">
              @csrf
              @method('PUT')
              <div class="mb-4">
                <label for="title" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Edit Title</label>
                <input type="text" name="title" id="title" value="{{ $memo->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('title')
                  <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="photo_path" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Edit Photo URL</label>
                <input type="text" name="photo_path" id="photo_path" value="{{ $memo->photo_path }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('photo_path')
                  <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="pattern" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Edit Pattern</label>
                <input type="text" name="pattern" id="pattern" value="{{ $memo->pattern }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('pattern')
                  <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="pattern_path" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Edit pattern URL</label>
                <input type="text" name="pattern_path" id="pattern_path" value="{{ $memo->pattern_path }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('pattern_path')
                  <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="fabric" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Edit Fabric</label>
                <input type="text" name="fabric" id="fabric" value="{{ $memo->fabric }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('fabric')
                  <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="fabric_path" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Edit fabric URL</label>
                <input type="text" name="fabric_path" id="fabric_path" value="{{ $memo->fabric_path }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('fabric_path')
                  <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="memo" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Edit Memo</label>
                <input type="text" name="memo" id="memo" value="{{ $memo->memo }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('memo')
                  <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>