@extends('layouts.app', ['class' => 'register-page', 'page' => _('Register'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-md-5 ml-auto">
            @php /*
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-wifi"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ _('Marketing') }}</h3>
                    <p class="description">
                        {{ _('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.') }}
                    </p>
                </div>
            </div>

            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ _('Fully Coded in HTML5') }}</h3>
                    <p class="description">
                        {{ _('We\'ve developed the website with HTML5 and CSS3. The client has access to the code using GitHub.') }}
                    </p>
                </div>
            </div>
            */ @endphp

            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ _('Built Audience') }}</h3>
                    <p class="description">
                        {{ _('We\'ve just recently develop the Teacher Information System for you using the latest LEMP stack with the aid of Laravel as the PHP web application framework.
                        ') }}
                    </p>
                    <br>
                    <p class="description">
                        {{ _('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                    <img class="card-img" src="{{ asset('white') }}/img/card-primary.png" alt="Card image">
                    <h4 class="card-title">{{ _('Register') }}</h4>
                </div>
                @php /*
                <form class="form" method="post" action="{{ route('register') }}">
                */ @endphp
                <form class="form" method="post" action="{{ route('doRegister') }}">
                    @csrf

                    <div class="card-body">
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Name') }}" value="{{ old('name') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Email') }}" value="{{ old('email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ _('Password') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ _('Confirm Password') }}">
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>

                            @php
                              $accounts = App\Models\Account::where('name', '<>', 'Administrator')
                                                              ->where('name', '<>', 'Staff')
                                                              ->get();
                            @endphp
                            <select name="account_id" class="form-control">
                                @foreach ($accounts as $account)
                                  <option value="{{ $account->id }}">{{ $account->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-check text-left {{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label class="form-check-label">
                                <input class="form-check-input {{ $errors->has('agree_terms_and_conditions') ? ' is-invalid' : '' }}" name="agree_terms_and_conditions"  type="checkbox"  {{ old('agree_terms_and_conditions') ? 'checked' : '' }}>
                                <span class="form-check-sign"></span>
                                {{ _('I agree to the') }}
                                <a href="#">{{ _('terms and conditions') }}</a>.
                                @include('alerts.feedback', ['field' => 'agree_terms_and_conditions'])
                            </label>
                        </div>




                        <span>
                            {!! \Session::get('success') !!}
                            @include('alerts.feedback', ['field' => 'success'])
                        </span>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ _('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
