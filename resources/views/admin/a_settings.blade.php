    @extends('admin.headerFooter')
    @section('body')

    <div class="container my-5">
        <main>
            <!-- toggleable dynamic tab starts here -->
            <div class="other-section">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a data-toggle="pill" class="nav-link active" href="#edu">Profile Details</a></li>
                    <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#skill">Edit Details</a></li>
                </ul>

                <div class="tab-content">
                    <div id="edu" class="tab-pane active">
                         <div class="col-md-12 col-sm-12 ">
                                    <h3 class="text-center ">Profile Details Info</h3>
                                    <h5 class="text-center text-success">{{Session::get('msg')}}</h5>
                                    <table class="table table-bordered  text-center">
                                        <tr>
                                            <th>Name:</th>
                                            <td>{{$user->username}}</td>
                                        </tr>

                                          <tr>
                                            <th>Email:</th>
                                            <td>{{$user->email}}</td>
                                        </tr>

                                          <tr>
                                            <th>Mobile:</th>
                                            <td>{{$user->mobile}}</td>
                                        </tr>

                                          <tr>
                                            <th>division:</th>
                                            <td>{{$user->division}}</td>
                                        </tr>

                                    </table>
                           </div>
                    </div>

                    <div id="skill" class="tab-pane fade">
                        <div class="col-lg-6 mx-auto">
                          <form class="form-group" action="{{route('registerUpdate')}}" method="POST">
                                @csrf
                                <div>
                                    <h1 class="text-center">Edit Here</h1>
                                </div>

                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="form-group">
                                    <!-- Username -->
                                    <label>Username</label>
                                    <div>
                                        <input type="text" id="username" name="username" class="form-control" value="{{$user->username}}" required readonly="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- E-mail -->
                                    <label>E-mail</label>
                                    <div>
                                        <input type="text" id="email" name="email"  class="form-control" value="{{$user->email}}" required readonly="">
                                        
                                    </div>
                                </div>


                                <div class="form-group">

                                    <label>Mobile</label>
                                    <div>
                                        <input type="tel" id="mobile" name="mobile" class="form-control" value="{{$user->mobile}}" required>
                                        <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile'): ' '}}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Division</label>
                                    <select class="form-control" name="division" required>
                                        <option value="{{$user->division}}">{{$user->division}}</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Comilla">Comilla</option>
                                        <option value="Rangpur">Rangpur</option>
                                    </select>
                                </div>

          
                                <div class="control-group mt-2">
                                    <!-- Button -->
                                    <div>
                                        <button class="btn btn-block btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- toggleable dynamic tab ends here -->
        </main>
    </div>

@endsection