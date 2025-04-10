@extends('layouts.app', ['page' => __('Edit School'), 'pageSlug' => 'schools', 'pageParent' => 'School'])

@section('content')
    <div class="row">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Edit School') }}</h5>
                </div>
                <form method="post" action="{{ route('school.update', $school) }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')


                            <div class="form-group{{ $errors->has('abbrv') ? ' has-danger' : '' }}">
                                <label>{{ _('Abbrevation') }}</label>
                                <input type="text" name="abbrv" class="form-control{{ $errors->has('abbrv') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter school abbrevation') }}" value="{{ old('abbrv', $school->abbrv) }}">
                                @include('alerts.feedback', ['field' => 'abbrv'])
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('School Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter school name') }}" value="{{ old('name', $school->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('level') ? ' has-danger' : '' }}">
                                <label>{{ _('School Level') }}</label>
                                <select name="level" class="form-control">
                                  <option value=""> --- Select --- </option>
                                  <option value="elementary">Elementary</option>
                                  <option value="highSchool">High School</option>
                                </select>
                                @include('alerts.feedback', ['field' => 'level'])
                            </div>

                            <div class="form-group{{ $errors->has('principal') ? ' has-danger' : '' }}">
                                <label>{{ _('School Principal') }}</label>
                                <input type="text" name="principal" class="form-control{{ $errors->has('principal') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter school principal') }}" value="{{ old('principal', $school->principal) }}">
                                @include('alerts.feedback', ['field' => 'principal'])
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"> <i class="fas fa-save"></i> {{ _('Save') }}</button>
                        <a href="/school" class="btn btn-fill btn-default"> <i class="tim-icons icon-simple-remove"></i> {{ _('Close') }}</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
