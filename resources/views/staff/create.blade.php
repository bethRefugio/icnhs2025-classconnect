@extends('layouts.app', ['page' => __('Add Staff'), 'pageSlug' => 'addStaff', 'pageParent' => 'Staff'])

@section('content')
    <div class="row">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Add Staff') }}</h5>
                </div>
                <form method="post" action="{{ route('staff.store') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('post')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter name') }}" value="{{ old('name', '') }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ _('Email') }}</label>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter email') }}" value="{{ old('email', '') }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label>{{ _('Password') }}</label>
                                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter password') }}" value="{{ old('password', '') }}">
                                @include('alerts.feedback', ['field' => 'password'])
                            </div>

                            <div class="form-group{{ $errors->has('is_allowed_login') ? ' has-danger' : '' }}">
                                <label>{{ _('Allowed Login?') }}</label>
                                <select name="is_allowed_login" class="form-control{{ $errors->has('is_allowed_login') ? ' is-invalid' : '' }}">
                                    <option value="1" @php (old('is_allowed_login', '') ==1) ? 'selected="selected"' : ''; @endphp>True</option>
                                    <option value="0" @php (old('is_allowed_login', '') ==0) ? '' : 'selected="selected"'; @endphp>False</option>
                                </select>
                                @include('alerts.feedback', ['field' => 'is_allowed_login'])
                            </div>

                            <div class="form-group{{ $errors->has('account_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Allowed Login?') }}</label>
                                <select name="account_id" class="form-control{{ $errors->has('account_id') ? ' is-invalid' : '' }}">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">
                                          {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'account_id'])
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"> <i class="fas fa-save"></i> {{ _('Save') }}</button>
                        <a href="/staff" class="btn btn-fill btn-default"> <i class="tim-icons icon-simple-remove"></i> {{ _('Close') }}</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
