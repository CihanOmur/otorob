<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />
    <link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
    <title>Otorob - {{ tt('Sign Up') }}</title>
</head>

<body class="bg-login">
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="my-4 text-center">
                            <img src="{{ asset('admin/assets/images/logo-img.png') }}" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">{{ tt('Sign Up') }}</h3>
                                        <p>{{ tt('Already have an account?') }} <a href="{{ route('login') }}">{{ tt('Sign in here') }}</a>
                                        </p>
                                    </div>
                                    
                                    <div class="login-separater text-center mb-4"> <span>{{tt('SIGN UP WITH EMAIL')}}</span>
                                        <hr />
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('register.post') }}">
                                            @csrf
                                            <div class="col-sm-6">
                                                <label for="inputFirstName" class="form-label">{{ tt('First Name') }}</label>
                                                <input type="text" name="fname" class="form-control"
                                                    id="inputFirstName" placeholder="Jhon">
                                                @if ($errors->has('fname'))
                                                    <div class="text-danger">{{ $errors->first('fname') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label">{{ tt('Last Name') }}</label>
                                                <input type="text" name="lname" class="form-control"
                                                    id="inputLastName" placeholder="Deo">
                                                @if ($errors->has('lname'))
                                                    <div class="text-danger">{{ $errors->first('lname') }}</div>
                                                @endif
                                            </div>

                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">{{ tt('Email Address') }}</label>
                                                <input type="email" name="email" class="form-control"
                                                    id="inputEmailAddress" placeholder="example@user.com">
                                                @if ($errors->has('email'))
                                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">{{ tt('Password') }}</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" name="password"
                                                        class="form-control border-end-0" id="inputChoosePassword"
                                                        value="12345678" placeholder="Enter Password"> <a
                                                        href="javascript:;" class="input-group-text bg-transparent"><i
                                                            class='bx bx-hide'></i></a>
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
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="terms" value="1"
                                                        type="checkbox" id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">{{ tt('I read and agree to Terms & Conditions') }} </label>
                                                </div>
                                                @if ($errors->has('terms'))
                                                    <div class="text-danger">{{ $errors->first('terms') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class='bx bx-user'></i>{{ tt('Sign up') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
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
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
</body>

</html>
