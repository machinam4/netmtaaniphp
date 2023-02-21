@extends('admin.base')
@section('page-title', 'News')
@section('content')
    <div class="mt-2 p-5 sm:mt-0 bg-gray-100 shadow rounded-2xl">
        {{-- <a href="#addCategoryModal" rel="modal:open"
            class="m-5 px-6 py-2 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
            <i class='bx bx-plus '></i>Add Advert
        </a> --}}
        <a href="{{ Route('scrape') }}"
            class="m-5 px-6 py-2 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
            <i class='bx bx-plus '></i>Do Webscraping
        </a>
        <div class="py-6">
            <table id="data_table" class="advertsTable display">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        {{-- <th>Thumbnail</th> --}}
                        <th>Headline</th>
                        <th>Description</th>
                        <th>URL</th>
                        <th>Views</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $item)
                        <tr>
                            {{-- <td>{{ $item->id }}</td> --}}
                            {{-- <td><img class="w-28 h-20 flex-shrink-0 mr-4 object-cover rounded-md"
                                    src="{{ url($item->thumbnail) }}" alt="{{ $item->headline }}" /></td> --}}
                            <td>{{ Str::limit($item->headline, 50, '...') }}</td>
                            <td>{{ Str::limit($item->description, 100, '...') }}</td>
                            <td>{{ Str::limit($item->url, 100, '...') }}</td>
                            <td>{{ visits($item)->count() }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script>
        var Stable = $('.advertsTable').DataTable()
    </script>
@endsection
