@extends('admin.layouts.master')
@section('title', 'Import')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Import Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Import Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Import Excel
                        </div>
                        <div class="card-body">
                            @if(session('message'))
                                    <div class="alert alert-{{ session('message_type') }}" role="alert" style="width: 346px;">
                                    {{ session('message')  }}
                                </div>
                            @endif

                            <form action="{{ route('import-store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="file" name="file" id="excel_file">
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="card" id="card" style="display: none">
                        <div class="card-header">
                            <h3 class="card-title">Show Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 670px;" id="excel_data">

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        <!-- /.container-fluid -->
        </div>
    </section>
@endsection
@section('foot')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script>
    <script>
        const excel_file = document.getElementById('excel_file');

        excel_file.addEventListener('change', (event) => {

            let reader = new FileReader();

            let filename = event.target.files[0].name;
            reader.readAsArrayBuffer(event.target.files[0]);
            let extension = filename.substring(filename.lastIndexOf(".")).toUpperCase();
            if (extension === '.XLS' || extension === '.XLSX') {

                reader.onload = function (event) {

                    let data = new Uint8Array(reader.result);
                    let work_book = XLSX.read(data, {type: 'array'});
                    let sheet_name = work_book.SheetNames;
                    let sheet_data = XLSX.utils.sheet_to_json(work_book.Sheets[sheet_name[0]], {header:1})

                    if (sheet_data.length > 0)
                    {
                        let table_output = '<table class="table table-head-fixed text-nowrap">';

                        for (let row = 0; row < sheet_data.length; row++)
                        {
                            if (row === 0)
                            {
                                table_output += '<tr style="font-weight: 700">';
                            }

                            for (let cell = 0; cell < sheet_data[row].length; cell++)
                            {
                                table_output += '<td>' +sheet_data[row][cell]+ '</td>';
                            }
                            table_output += '</tr>';
                        }
                        table_output += '</table>';

                        document.getElementById('excel_data').innerHTML = table_output;
                        document.getElementById('card').style.display = 'block';
                    }
                }


            }else{
                alert("Please select a valid excel file.");
            }

        });

        setTimeout(function () {
            $('.alert').slideUp(500);
        }, 3000);
    </script>
@endsection
