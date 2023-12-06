@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Course Modiul</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="{{ route('modiul.index') }}" method="POST" id="modiul" class="modiul">
                        @csrf
                        <div class="container">
                            <!--form body start here-->
                            <div class="row ">
                                <div class="col-sm-6 form-group">
                                    <label>Course Name : </label>
                                    <select name="course_id" id="" class="form-control">
                                        @foreach ($course as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('course_id')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Modiul Name : </label>
                                    <input name="modiul_name" class="form-control" type="text" placeholder="Modiul Name">
                                    <div class="text-danger">
                                        @error('modiul_name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Modiul Description : </label>
                                    <textarea name="description" class="form-control" placeholder ="Modiul Description" id="description" cols="10"rows="5"></textarea>
                                    <div class="description">
                                        @error('modiul_name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 form-group text-right">
                                    <button type="submit" id="submit" class="btn btn-primary" >Add Modiul</button>
                                </div>
                            </div>
                        </div>
                        <!--form body end -->
                    </form>
                </div>
            </div>
            <table>
                <table class="table" id="myTable">
                    <thead>
                      <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-2">Course Name</th>
                        <th class="col-md-2">Modiul</th>
                        <th class="col-md-5">Description</th>
                        <th class="col-md-2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $index = 1;
                        @endphp
                        @foreach ($modiuls as $modiul)
                            <tr>
                                <td scope="row">{{ $index++ }}</td>
                                <td>{{ $modiul->course->course_name }}</td>
                                <td>{{ $modiul->modiul_name }}</td>
                                <td>{{ $modiul->description }}</td>
                                <td>
                                    {{-- <a href="{{ route('category.show', $category->id) }}"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a> --}}
                                    <a href="{{ route('modiul.edit', $modiul->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                    <form action="{{  route('modiul.destroy', $modiul->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash3 text-lg"></i></i>
                                        </button>
                                    </form>
                                    {{-- <a href="{{ route('modiul.destroy', $modiul->id) }}"><i class="bi bi-trash3 text-lg p-1"></i></i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </table>
        </div>
    </div> 
</div>

{{-- <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    $("#modiul").submit(function(event){
        event.preventDefault();
        var formArray = $(this).serializeArray();
        $("button[type='submit']").prop('disabled',true);
        $.ajax ({
            url: '{{ route("modiul.store") }}',
            type: 'post',
            data: formArray,
            datatype: 'json',
            success: function(response){
                $("button[type='submit']").prop('disabled',false);
            }
        });

    });




});
</script> --}}


<script>
    $(document).ready(function () {
        $("#modiul").submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            var formArray = $(this).serializeArray();
            $("button[type='submit']").prop('disabled', true);

            $.ajax({
                url: '{{ route("modiul.store") }}',
                type: 'post',
                data: formArray,
                dataType: 'json', // Corrected typo: 'datatype' to 'dataType'
                success: function (response) {
                    $("button[type='submit']").prop('disabled', false);

                    // Handle the response here
                    if (response.success) {
                        // If the server responds with success
                        // You can update the table or perform any other necessary actions
                        // For example, you can append the new row to the table
                        var newRow = '<tr>' +
                            '<td>' + response.data.id + '</td>' +
                            '<td>' + response.data.course_name + '</td>' +
                            '<td>' + response.data.modiul_name + '</td>' +
                            '<td>' + response.data.description + '</td>' +
                            '<td>' +
                            // Add your action buttons here
                            '</td>' +
                            '</tr>';

                        $('#myTable tbody').append(newRow);

                        // Clear the form fields if needed
                        $('#modiul')[0].reset();
                    } else {
                        // Handle errors if the server responds with an error
                        // You can display an error message or take appropriate action
                        console.log('Error: ' + response.error);
                    }
                },
                error: function (xhr, status, error) {
                    // Handle AJAX errors here
                    console.log('AJAX Error: ' + error);
                }
            });
        });
    });
    error: function (xhr, status, error) {
    console.log('AJAX Error: ' + error);
    console.log(xhr.responseText); // Log the response text for more details
}

</script>
@endsection