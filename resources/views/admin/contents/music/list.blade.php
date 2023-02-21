@extends('admin.base')
@section('page-title', 'Music')
@section('content')
    <div class="mt-2 p-5 sm:mt-0 bg-gray-100 shadow rounded-2xl">
        {{-- <a href="#addCategoryModal" rel="modal:open"
            class="m-5 px-6 py-2 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
            <i class='bx bx-plus '></i>Add Advert
        </a> --}}
        <a href="{{ Route('music_create') }}"
            class="m-5 px-6 py-2 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
            <i class='bx bx-plus '></i>Add Music
        </a>
        <div class="py-6">
            <table id="data_table" class="advertsTable display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Thumbnail</th>
                        <th>Name</th>
                        <th>Media</th>
                        <th>Type</th>
                        <th>Genre</th>
                        <th>Artist</th>
                        <th>Link</th>
                        <th>Views</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($musics as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><img class="w-28 h-20 flex-shrink-0 mr-4 object-cover rounded-md"
                                    src="{{ url($item->thumbnail) }}" alt="{{ $item->name }}" /></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->media }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->genre }}</td>
                            <td>{{ $item->artist }}</td>
                            <td>{{ $item->link }}</td>
                            <td>{{ visits($item)->count() }}</td>
                            <td class="flex space-x-2 justify-center">
                                {{--  --}}
                                <button type="button" id="delete"
                                    class="delete inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                                    <i class='bx bx-trash '></i>

                                </button>
                                <a href="{{ Route('music_edit', $item->id) }}" id="edit"
                                    class="edit inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out">
                                    <i class='bx bx-edit'></i></a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    {{-- start delete modal --}}
    <div id="delete-modal" class="modal text-gray-700">
        <div class="px-4 mb-5 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-700">Delete</h3>
        </div>
        <p class="mt-1 text-md text-gray-700">Are you sure you want to delete <span id="delete-name"
                class="text-red-500"></span></p>

        <button id="confirm-delete"
            class="justify-center w-full rounded-md border border-transparent bg-red-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete</button>
    </div>
@endsection

@section('page-scripts')
    <script>
        var itemID
        var itemName
        var Stable = $('.advertsTable').DataTable()
        $('.advertsTable tbody').on('click', '#delete', function(table) {
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = Stable.row($tr).data();
            document.getElementById('delete-name').innerHTML = data[0]
            itemID = data[0]
            // console.log(data)
            $('#delete-modal').modal({
                show: 'true'
            });


        })
        $('#confirm-delete').on('click', function() {
            $.ajax({
                url: `music/delete/${itemID}`,
                type: 'GET',
                // headers: {
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // },
                success: (data) => {
                    $.toast({
                        text: 'Deleted Successfully',
                        icon: 'Error'
                    })
                    // location.reload();
                },
                error: (err) => {
                    // console.log(err)
                }
            })
        })
    </script>
@endsection
