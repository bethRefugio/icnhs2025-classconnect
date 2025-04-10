@extends('layouts.app', ['page' => __('Edit Building'), 'pageSlug' => 'buildings', 'pageParent' => 'Building'])

@section('content')
    <div class="row">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Edit Building') }}</h5>
                </div>
                <form method="post" action="{{ route('building.update', $building) }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter building name') }}" value="{{ old('name', $building->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('school_id') ? ' has-danger' : '' }}">
                                <label>{{ _('School') }}</label>
                                <select name="school_id" class="form-control">
                                    @foreach ($schools as $school)
                                        <option {{ $building->school_id == $school->id ? "selected" : "" }} value="{{ $school->id }}">{{ $school->name }}</option>
                                    @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'school_id'])
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"> <i class="fas fa-save"></i> {{ _('Save') }}</button>
                        <a href="/building" class="btn btn-fill btn-default"> <i class="tim-icons icon-simple-remove"></i> {{ _('Close') }}</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
