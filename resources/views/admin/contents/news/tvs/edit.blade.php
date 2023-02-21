@extends('admin.base')
@section('page-title', 'Edit' . $item->channel)
@section('content')


    <div class="mt-10 sm:mt-0">
        <div class="">
            <div class="">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6">Edit {{ $item->channel }}</h3>
                </div>
            </div>
            <div class="mt-5 ">
                <form action="{{ Route('tv_update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="overgray-500 flow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6 text-gray-700">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                    <input type="text" name="country" id="country" autocomplete="country"
                                        value="{{ $item->country }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="channel" class="block text-sm font-medium text-gray-700">Channel</label>
                                    <input type="text" name="channel" id="channel" autocomplete="channel"
                                        value="{{ $item->channel }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="url" class="block text-sm font-medium text-gray-700">Url</label>
                                    <input type="text" name="url" id="url" autocomplete="url"
                                        value="{{ $item->url }}"
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
