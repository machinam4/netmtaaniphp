@extends('admin.base')
@section('content')
    <div class="mt-2 p-5 sm:mt-0 bg-gray-100 shadow rounded-2xl">
        <div class="py-6">
            <table id="data_table" class="sokotable display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Page</th>
                        <th>Views</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Soko section Lists</td>
                        <td>{{ visits('App\Models\Soko_sections')->count() }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Soko categories Lists</td>
                        <td>{{ visits('App\Models\Soko_categories')->count() }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Soko Lists</td>
                        <td>{{ visits('App\Models\Soko')->count() }}</td>
                    </tr>

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
        var Stable = $('.sokotable').DataTable()
        $('.sokotable tbody').on('click', '#delete', function(table) {
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = Stable.row($tr).data();
            document.getElementById('delete-name').innerHTML = data[2]
            itemID = data[0]
            // console.log(data)
            $('#delete-modal').modal({
                show: 'true'
            });


        })
        $('#confirm-delete').on('click', function() {
            $.ajax({
                url: `soko/delete/${itemID}`,
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
