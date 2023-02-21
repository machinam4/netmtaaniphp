@extends('admin.base')
@section('page-title', 'Edit' . $item->name)
@section('content')


    <div class="mt-10 sm:mt-0">
        <div class="">
            <div class="">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6">Edit {{ $item->name }}</h3>
                </div>
            </div>
            <div class="mt-5 ">
                <form action="{{ Route('music_update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="overgray-500 flow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6 text-gray-700">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" autocomplete="name"
                                        value="{{ $item->name }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
                                    <input type="text" name="genre" id="genre" autocomplete="genre"
                                        value="{{ $item->genre }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="artist" class="block text-sm font-medium text-gray-700">Artist</label>
                                    <input type="text" name="artist" id="artist" autocomplete="artist"
                                        value="{{ $item->artist }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
