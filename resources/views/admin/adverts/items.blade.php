@extends('admin.base')
@section('content')
    <div class="mt-2 p-5 sm:mt-0 bg-gray-100 shadow rounded-2xl">
        {{-- <a href="#addCategoryModal" rel="modal:open"
            class="m-5 px-6 py-2 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
            <i class='bx bx-plus '></i>Add Advert
        </a> --}}
        <a href="{{ Route('advert_create') }}"
            class="m-5 px-6 py-2 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
            <i class='bx bx-plus '></i>Add Advert
        </a>
        <div class="py-6">
            <table id="data_table" class="advertsTable display">
                <thead>
                    <tr>
                        <th>Advert</th>
                        <th>Advert_No</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Owner</th>
                        <th>start Date</th>
                        <th>End Date</th>
                        <th>Position</th>
                        <th>status</th>
                        <th>Views</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><img class="w-28 h-20 flex-shrink-0 mr-4 object-cover rounded-md" src="{{ url($item->link) }}"
                                    alt="{{ $item->name }}" /></td>
                            <td>{{ $item->advert_no }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->owner }}</td>
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                            <td>{{ $item->position }}</td>
                            @if ($item->status == '1')
                                <td class="text-green-500">Active</td>
                            @else
                                <td class="text-red-500">Disabled</td>
                            @endif
                            <td>{{ visits($item)->count() }}</td>
                            <td class="flex space-x-2 justify-center">
                                {{--  --}}
                                <button type="button" id="delete"
                                    class="delete inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                                    <i class='bx bx-trash '></i>

                                </button>
                                <a href="{{ Route('advert_edit', $item->id) }}" id="edit"
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
            document.getElementById('delete-name').innerHTML = data[1]
            itemID = data[1]
            // console.log(data)
            $('#delete-modal').modal({
                show: 'true'
            });


        })
        $('#confirm-delete').on('click', function() {
            $.ajax({
                url: `adverts/delete/${itemID}`,
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
        let modalData
    </script>
@endsection
