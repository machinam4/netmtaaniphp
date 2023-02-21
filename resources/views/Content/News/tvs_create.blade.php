@extends('Content.Layouts.base')
@section('page_title', 'News')
@section('contents')


    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-white">Add News TV station</h3>
                    <p class="mt-1 text-sm text-white">add a new TV to the Database.</p>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="{{ Route('tvs_save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="overgray-500 flow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6 text-gray-700">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                    <input type="text" name="country" id="country" autocomplete="country"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="channel" class="block text-sm font-medium text-gray-700">Channel</label>
                                    <input type="text" name="channel" id="channel" autocomplete="channel"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="url" class="block text-sm font-medium text-gray-700">Youtube Channel
                                        ID</label>
                                    <input type="text" name="url" id="url" autocomplete="url"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                                    <input type="file" name="thumbnail" id="thumbnail" autocomplete="thumbnail"
                                        accept=".jpeg, .png, .jpg, .gif"
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
