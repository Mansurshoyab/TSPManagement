@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Course Category</div>
                </div>

                <div class="" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        @csrf
                        <div class="container">
                            <!--form body start here-->
                            <div class="row mt-3">
                                <div class="col-sm-12 form-group">
                                    <label>Course Name :</label>
                                    <select name="name" class="form-control" id="">
                                        <option value="">---SELECT---</option>
                                        <option value="Java">Java</option>
                                        <option value="JavaScript">Java Script</option>
                                        <option value="C">C</option>
                                        <option value="C++">C++</option>
                                        <option value="PHP">PHP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Course Description : </label>
                                    <textarea name="description" class="form-control" placeholder ="Course Description" id="description" cols="10"rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-12 form-group text-right">
                                    <input type="submit" value="Add Category" class="btn btn-primary">
                                </div>
                            </div>
                            <!--form body end -->
                        </div>
                    </form>
                </div>
            </div>

            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Course Category</div>
                </div>
                <div class="container">
                    <table>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td scope="row">{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <a href="{{ route('course_cat.show', $category->id) }}"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a>
                                            <a href="{{ url('edit_course_cat') }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                            <a href="{{ url('update_course_cat') }}"><i class="bi bi-trash3 text-lg p-1"></i></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </table>
                </div>
            </div>
        </div>
    </div> 
</div>

         
@endsection