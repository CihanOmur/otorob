  @extends('Admin.layouts.app')
  @section('style')
      <link href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('admin/assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
  @endsection
  @section('wrapper')
      <div class="container">
          <div class="main-body">
              <div class="row">
                  <div class="col-lg-4">
                      <div class="card">
                          <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                  <img src="{{ asset('admin/assets/images/avatars/avatar-2.png') }}" alt="Admin"
                                      class="rounded-circle p-1 bg-primary" width="110">
                                  <div class="mt-3">
                                      <h4>{{ $user->full_name }}</h4>
                                      <p class="text-secondary mb-1">{{ $user->getRoleNames()[0] }}</p>
                                      <a href="{{ route('admin.user.delete', [$user]) }}" class="btn btn-outline-danger">Delete User</a>
                                  </div>
                              </div>
                              <hr class="my-4" />
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="feather feather-globe me-2 icon-inline">
                                              <circle cx="12" cy="12" r="10"></circle>
                                              <line x1="2" y1="12" x2="22" y2="12"></line>
                                              <path
                                                  d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                              </path>
                                          </svg>Website</h6>
                                      <span class="text-secondary">https://codervent.com</span>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="feather feather-github me-2 icon-inline">
                                              <path
                                                  d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                              </path>
                                          </svg>Github</h6>
                                      <span class="text-secondary">codervent</span>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="feather feather-twitter me-2 icon-inline text-info">
                                              <path
                                                  d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                              </path>
                                          </svg>Twitter</h6>
                                      <span class="text-secondary">@codervent</span>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="feather feather-instagram me-2 icon-inline text-danger">
                                              <rect x="2" y="2" width="20" height="20"
                                                  rx="5" ry="5"></rect>
                                              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                          </svg>Instagram</h6>
                                      <span class="text-secondary">codervent</span>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="feather feather-facebook me-2 icon-inline text-primary">
                                              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                              </path>
                                          </svg>Facebook</h6>
                                      <span class="text-secondary">codervent</span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-8">
                      <div class="card">
                          <div class="card-body">
                            <form method="POST" action="{{ route('admin.user.update', [$user]) }}" class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputLastName1" class="form-label">First Name</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class='bx bxs-user'></i></span>
                                        <input type="text" class="form-control border-start-0"
                                            value="{{ !is_null($user->fname) ? $user->fname : '' }}" name="fname" id="inputLastName1"
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
                                        <input type="text" class="form-control border-start-0"
                                            value="{{ !is_null($user->lname) ? $user->lname : '' }}" name="lname" id="inputLastName2"
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
                                        <input type="text" class="form-control border-start-0"
                                            value="{{ !is_null($user->phone) ? $user->phone : '' }}" name="phone" id="inputPhoneNo"
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
                                        <input type="email" class="form-control border-start-0"
                                            value="{{ !is_null($user->email) ? $user->email : '' }}" name="email" id="inputEmailAddress"
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
                                            @if ($user->getRoleNames() != '[]' && $user->getRoleNames()[0] == $role)
                                                <option selected value="{{ $role }}">{{ $role }}</option>
                                            @else
                                                <option value="{{ $role }}">{{ $role }}</option>
                                            @endif
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
                                    <textarea class="form-control" id="inputAddress3" name="address" placeholder="Enter Address" rows="3">{{ !is_null($user->address) ? $user->address : '' }}</textarea>
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
                  </div>
              </div>
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
