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
                                    <input type="text" name="name" class="form-control" placeholder="Enter Course Name">
                                    <div class="text-danger">
                                        @error('name')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Course Description : </label>
                                    <textarea name="description" class="form-control" placeholder ="Course Description" id="description" cols="10"rows="5"></textarea>
                                    <div class="text-danger">
                                        @error('description')
                                            <strong class="font-weight-bold">{{ $message }}</strong>
                                        @enderror
                                    </div>
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

                <div class="container">
                    <table>
                        <table class="table" id="myTable">
                            <thead class="">
                              <tr class="mt-5">
                                <th class="col-md-2">ID</th>
                                <th class="col-md-2">Name</th>
                                <th class="col-md-6">Description</th>
                                <th class="col-md-2">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td scope="row">{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <a href="{{ route('category.show', $category->id) }}"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a>
                                            <a href="{{ route('category.edit', $category->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                                            <form action="{{  route('category.destroy', $category->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash3 text-lg"></i></i>
                                                </button>
                                            </form>
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

         
@endsection