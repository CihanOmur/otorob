@extends('Admin.layouts.app')

@section('style')
    <link href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
@endsection

@section('wrapper')
    <div class="card border-top border-0 border-4 border-danger col-9 m-auto">
        <div class="card-body p-5">
            <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                </div>
                <h5 class="mb-0 text-danger">Add a New User</h5>
            </div>
            <hr>
            <form method="POST" action="{{ route('admin.user.create') }}" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="inputLastName1" class="form-label">First Name</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                class='bx bxs-user'></i></span>
                        <input type="text" class="form-control border-start-0" name="fname" id="inputLastName1"
                            placeholder="First Name" />
                    </div>
                    @if ($errors->has('fname'))
                        <div class="text-danger">{{ $errors->first('fname') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="inputLastName2" class="form-label">Last Name</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                class='bx bxs-user'></i></span>
                        <input type="text" class="form-control border-start-0" name="lname" id="inputLastName2"
                            placeholder="Last Name" />
                    </div>
                    @if ($errors->has('lname'))
                        <div class="text-danger">{{ $errors->first('lname') }}</div>
                    @endif
                </div>
                <div class="col-12">
                    <label for="inputPhoneNo" class="form-label">Phone No</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                class='bx bxs-microphone'></i></span>
                        <input type="text" class="form-control border-start-0" name="phone" id="inputPhoneNo"
                            placeholder="Phone No" />
                    </div>
                    @if ($errors->has('phone'))
                        <div class="text-danger">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
                <div class="col-12">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                class='bx bxs-message'></i></span>
                        <input type="email" class="form-control border-start-0" name="email" id="inputEmailAddress"
                            placeholder="Email Address" />
                    </div>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="col-12">
                    <label class="form-label">{{ tt('Role') }}</label>
                    <select name="role" class="single-select">
                        @foreach ($roles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('role'))
                        <div class="text-danger">{{ $errors->first('role') }}</div>
                    @endif
                </div>
                <div class="col-12" id="show_hide_password">
                    <label for="inputChoosePassword" class="form-label">Choose Password</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                class='bx bxs-lock-open'></i></span>
                        <input type="password" class="form-control border-start-0" name="password" id="inputChoosePassword"
                            placeholder="Choose Password" />
                        <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                    </div>
                    @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="col-12">
                    <label class="form-label">{{ tt('Country') }}</label>
                    <select name="country" class="single-select">
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Aland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>

                    </select>
                    @if ($errors->has('country'))
                        <div class="text-danger">{{ $errors->first('country') }}</div>
                    @endif
                </div>
                <div class="col-12">
                    <label for="inputAddress3" class="form-label">Address</label>
                    <textarea class="form-control" id="inputAddress3" name="address" placeholder="Enter Address" rows="3"></textarea>
                    @if ($errors->has('address'))
                        <div class="text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-danger px-5">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <script src="{{ asset('admin/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $('.single-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    </script>
@endsection
