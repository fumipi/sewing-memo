<!-- resources/views/tweets/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Create Sewing Memo') }}
      </h2>
    </x-slot>
  
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <form method="POST" action="{{ route('memos.store') }}">
              @csrf
              <div class="mb-4">
                <label for="title" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('memo')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="photo_path" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Photo</label>
                <input type="text" name="photo_path" id="photo_path" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('photo_path')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="pattern" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Pattern</label>
                <input type="text" name="pattern" id="pattern" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('pattern')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="pattern_path" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Pattern URL</label>
                <input type="text" name="pattern_path" id="pattern_path" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('pattern_path')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="fabric" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Fabric</label>
                <input type="text" name="fabric" id="fabric" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('fabric')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="fabric_path" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Fabric URL</label>
                <input type="text" name="fabric_path" id="fabric_path" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('fabric_path')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-4">
                <label for="memo" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Memo</label>
                <input type="text" name="memo" id="memo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('memo')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
              </div>
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Record</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>