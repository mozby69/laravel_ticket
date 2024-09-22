@extends('base')

@section('title', 'Import DBF')

@section('content')
<h5 class="mb-5">IMPORT DBF FILE</h5>
    
<form action="{{ route('import_dbf') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="dbf_file">Choose DBF file</label>
        <input type="file" name="dbf_file" id="dbf_file" required>
    </div>
    <button type="submit" class="btn btn-primary">Upload DBF</button>
</form>

   
@endsection


