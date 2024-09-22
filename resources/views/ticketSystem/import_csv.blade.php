@extends('base')

@section('title', 'Import Page')

@section('content')
<h5 class="mb-5">IMPORT CSV FILE</h5>
    
    <!-- Form for uploading CSV -->
    <form action="{{ route('import_csv') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-3">
            <label for="csv_file">Choose CSV file</label>
            <input type="file" name="csv_file" id="csv_file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary m-3">Upload CSV</button>
    </form>
   
@endsection




