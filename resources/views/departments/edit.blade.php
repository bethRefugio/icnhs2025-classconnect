@extends('layouts.app', ['page' => __('Edit Department'), 'pageSlug' => 'departments', 'pageParent' => 'Department'])

@section('content')
    <div class="row">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Edit Department') }}</h5>
                </div>
                <form method="post" action="{{ route('department.update', $department) }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')


                            <div class="form-group{{ $errors->has('abbrv') ? ' has-danger' : '' }}">
                                <label>{{ _('Abbrevation') }}</label>
                                <input type="text" name="abbrv" class="form-control{{ $errors->has('abbrv') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter department abbrevation') }}" value="{{ old('abbrv', $department->abbrv) }}">
                                @include('alerts.feedback', ['field' => 'abbrv'])
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('Department Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter department name') }}" value="{{ old('name', $department->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('head') ? ' has-danger' : '' }}">
                                <label>{{ _('Department Head') }}</label>
                                <input type="text" name="head" class="form-control{{ $errors->has('head') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter department head') }}" value="{{ old('head', $department->head) }}">
                                @include('alerts.feedback', ['field' => 'head'])
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"> <i class="fas fa-save"></i> {{ _('Save') }}</button>
                        <a href="/department" class="btn btn-fill btn-default"> <i class="tim-icons icon-simple-remove"></i> {{ _('Close') }}</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
