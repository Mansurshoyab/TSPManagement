@extends('master')

@section('body')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Trainer Information</div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Trainer
                        </button>
                </div>

                <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Trainer</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--form body start here-->
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Name : </label>
                                            <input name="first_name" class="form-control" type="text" placeholder="Enter Your First Name">
                                            <div class="text-danger">
                                                @error('first_name')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Last Name : </label>
                                            <input name="last_name" class="form-control" type="text" placeholder="Enter Your Last Name">
                                            <div class="text-danger">
                                                @error('last_name')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Date Of Birth : </label>
                                            <input name="dob" class="form-control" type="date" placeholder=" Enter Your Date Of Birth">
                                            <div class="text-danger">
                                                @error('dob')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Email : </label>
                                            <input name="email" class="form-control" type="email" placeholder="Enter Your Email">
                                            <div class="text-danger">
                                                @error('email')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Phone : </label>
                                            <input name="phone" class="form-control" type="text" placeholder="Enter Your Number">
                                            <div class="text-danger">
                                                @error('phone')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Experience : </label>
                                            <input name="experience" class="form-control" type="text" placeholder="Enter Your Experience">
                                            <div class="text-danger">
                                                @error('experience')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Specialization :</label>
                                            <input name="specialization" class="form-control" type="text" placeholder="Enter Your Specialization">
                                            <div class="text-danger">
                                                @error('specialization')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Status :</label>
                                            <select name="status" class="form-control">
                                                <option value="">---SELECT---</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                            <div class="text-danger">
                                                @error('status')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>address :</label>
                                            <textarea name="address" class="form-control" placeholder ="address" id="" cols="2"rows="1"></textarea>
                                            <div class="text-danger">
                                                @error('address')
                                                    <strong class="font-weight-bold">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--form body end -->
                                </div>
                                <div class="modal-footer">
                                    <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">specialization</th>
                    <th scope="col">experience</th>
                    <th scope="col">status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $index = 1;
                    @endphp
                    @foreach ($trainers as $trainer)
                  <tr>
                    <th scope="row">{{ $index++ }}</th>
                    <td>{{ $trainer->first_name }}</td>
                    <td>{{ $trainer->last_name }}</td>
                    <td>{{ $trainer->dob }}</td>
                    <td>{{ $trainer->email }}</td>
                    <td>{{ $trainer->phone }}</td>
                    <td>{{ $trainer->address }}</td>
                    <td>{{ $trainer->specialization }}</td>
                    <td>{{ $trainer->experience }}</td>
                    <td>{{ $trainer->status}}</td>
                    <td>
                        <a href="#"><i class="bi bi-arrows-fullscreen text-lg p-1"></i></a>
                        <a href="{{ route('trainer.edit', $trainer->id) }}"><i class="bi bi-pencil-square text-lg p-1"></i></i></a>
                        <form action="{{  route('trainer.destroy', $trainer->id) }}" method="POST">
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
        </div>
    </div> 
</div>

         
@endsection