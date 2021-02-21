<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Server-side processing</title>

       {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    </head>
    <body>
    <br>
    <br>
        <div class="container">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Category Order</th>
                    <th>Category Status</th>
                    <th>Category Image</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
            </table>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                processing : true,
                serverSide : true,
                ajax : {
                    url : '{{ route('category.fetch') }}',
                    dataType : 'json',
                    type : 'GET'
                },
                columns : [
                    { data : 'id' },
                    { data : 'cname' },
                    { data : 'corder' },
                    { data : 'cstatus' },
                    { data : 'cimage' },
                    { data : 'created_at' },
                    { data : 'updated_at' },
                ]
            });
        } );
    </script>
</html>
