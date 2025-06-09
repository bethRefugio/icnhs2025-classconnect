@extends('layouts.app', ['page' => __('Teacher Info'), 'pageSlug' => 'profile', 'pageParent' => 'Profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Teacher Info') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                      <div class="card-body">
                            @csrf
                            @method('put')
                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                                <label>{{ _('First name') }}</label>
                                <input type="text" name="first_name" readonly class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="{{ $teacher->first_name }}">
                                @include('alerts.feedback', ['field' => 'first_name'])
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                <label>{{ _('Last name') }}</label>
                                <input type="text" name="last_name" readonly class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" value="{{ $teacher->last_name }}">
                                @include('alerts.feedback', ['field' => 'last_name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ _('Email') }}</label>
                                <input type="text" name="email" readonly class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ ($teacher->email) }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group{{ $errors->has('mobile_no') ? ' has-danger' : '' }}">
                                <label>{{ _('Mobile No.') }}</label>
                                <input type="text" name="mobile_no" readonly class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" value="{{ ($teacher->mobile_no) }}">
                                @include('alerts.feedback', ['field' => 'mobile_no'])
                            </div>

                            <div class="form-group{{ $errors->has('telephone_no') ? ' has-danger' : '' }}">
                                <label>{{ _('Telephone No.') }}</label>
                                <input type="text" name="telephone_no" readonly class="form-control{{ $errors->has('telephone_no') ? ' is-invalid' : '' }}" value="{{ ($teacher->telephone_no) }}">
                                @include('alerts.feedback', ['field' => 'telephone_no'])
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                <label>{{ _('Gender') }}</label>
                                <input type="text" name="gender" readonly class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" value="{{ ucfirst($teacher->gender) }}">
                                @include('alerts.feedback', ['field' => 'gender'])
                            </div>

                            <div class="form-group{{ $errors->has('grade') ? ' has-danger' : '' }}">
                                <label>{{ _('Grade / Year Level') }}</label>
                                <input type="text" name="grade" readonly class="form-control{{ $errors->has('grade') ? ' is-invalid' : '' }}" value="{{ $teacher->grade }}">
                                @include('alerts.feedback', ['field' => 'grade'])
                            </div>

                            <div class="form-group{{ $errors->has('section') ? ' has-danger' : '' }}">
                                <label>{{ _('Section') }}</label>
                                <input type="text" name="section" readonly class="form-control{{ $errors->has('section') ? ' is-invalid' : '' }}" value="{{ $teacher->section }}">
                                @include('alerts.feedback', ['field' => 'section'])
                            </div>

                            <div class="form-group{{ $errors->has('school_id') ? ' has-danger' : '' }}">
                                <label>{{ _('School') }}</label>
                                <input type="hidden" name="school_id" readonly class="form-control{{ $errors->has('school_id') ? ' is-invalid' : '' }}" value="{{ $teacher->school_id }}">
                                @if( isset($teacher->building->school->name) )
                                    <input type="text" name="school_id" readonly class="form-control{{ $errors->has('school_id') ? ' is-invalid' : '' }}" value="{{  $teacher->building->school->name }}">
                                @endif()
                            </div>

                            <div class="form-group{{ $errors->has('building_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Building') }}</label>
                                <span id="load_building">
                                @if( isset($teacher->building->name) )
                                    <input type="text" name="school_id" readonly class="form-control{{ $errors->has('school_id') ? ' is-invalid' : '' }}" value="{{  $teacher->building->name }}">
                                @endif()
                                </span>
                                @include('alerts.feedback', ['field' => 'building_id'])
                            </div>

                            <div class="form-group{{ $errors->has('classroom_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Classroom') }} <span id="load-classrooms-spinner"></span> </label>
                                <span id="load_classroom">
                                @if( isset($teacher->classroom->name) )
                                    <input type="text" name="school_id" readonly class="form-control{{ $errors->has('school_id') ? ' is-invalid' : '' }}" value="{{  $teacher->classroom->name }}">
                                @endif()
                                </span>
                                @include('alerts.feedback', ['field' => 'classroom_id'])
                            </div>

                            <div class="form-group{{ $errors->has('department_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Department') }}</label>
                                @if( isset($teacher->department->name) )
                                    <input type="text" name="school_id" readonly class="form-control{{ $errors->has('school_id') ? ' is-invalid' : '' }}" value="{{  $teacher->department->name }}">
                                @endif()
                                </select>
                                @include('alerts.feedback', ['field' => 'department_id'])
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                <label>{{ _('Rank / Position') }}</label>
                                <input type="text" readonly class="form-control{{ $errors->has('school_id') ? ' is-invalid' : '' }}" value="{{  $teacher->position }}">
                                @include('alerts.feedback', ['field' => 'gender'])
                            </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i> Connect </a>
                        <a href="#" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i> Send Email </a>
                        <a href="/" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i> Back to Search </a>
                        <!--
                        <button type="submit" class="btn btn-fill btn-primary">{{ _('Save') }}</button>
                        -->
                    </div>
                </form>
            </div>


        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('white') }}/img/emilyz.jpg" alt="">
                                <h5 class="title">{{ $teacher->first_name .' '.$teacher->last_name }}</h5>
                            </a>
                            <p class="description">
                                {{  $teacher->position }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ _('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.') }}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
