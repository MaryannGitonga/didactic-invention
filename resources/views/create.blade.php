@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto mt-20">
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route('create') }}" method="POST">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="item" class="block text-sm font-medium text-gray-700">Item Name</label>
                            <input type="text" name="name" id="item" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save Item
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
