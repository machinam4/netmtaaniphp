@extends('admin.base')
@section('content')
    <div class="mt-2 sm:mt-0 bg-gray-100 shadow rounded-2xl">
        <div class="">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium  leading-6">Edit <span class="text-red-500">{{ $item->name }}</span>
                    </h3>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="{{ Route('advert_update', $item->id) }}" method="POST" id="item-form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="overgray-500 flow-hidden shadow sm:rounded-md">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6 text-gray-700">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="advert_no" class="block text-sm font-medium text-gray-700">Advert
                                        ID</label>
                                    <input type="text" name="advert_no" id="advert_no"
                                        autocomplete="advert_no"value="{{ $item->advert_no }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="name"
                                        autocomplete="name"value="{{ $item->name }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="owner" class="block text-sm font-medium text-gray-700">Owner</label>
                                    <input type="text" name="owner" id="last-name" autocomplete="owner"
                                        value="{{ $item->owner }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="start_date" class="block text-sm font-medium text-gray-700">Start
                                        Date</label>
                                    <input type="text" name="start_date" id="first-name" autocomplete="start_date"
                                        value="{{ $item->start_date }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="end_date" class="block text-sm font-medium text-gray-700">End
                                        Date</label>
                                    <input type="text" name="end_date" id="first-name" autocomplete="end_date"
                                        value="{{ $item->end_date }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                                    <input type="text" name="position" id="position" autocomplete="position"
                                        value="{{ $item->position }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
                                    <input type="number" min="1" name="duration" id="first-name"
                                        autocomplete="duration" value="{{ $item->duration }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <select id="status" name="status" autocomplete="status" value="{{ $item->status }}"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="1" {{ $item->status == '1' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="0" {{ $item->status == '0' ? 'selected' : '' }}>
                                            Disabled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-left sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <Script></Script>
@endsection
