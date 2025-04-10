@extends('layouts.app', ['page' => __('Add Building'), 'pageSlug' => 'addBuilding', 'pageParent' => 'Building'])

@section('content')
    <div class="row">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Add Building') }}</h5>
                </div>
                <form method="post" action="{{ route('building.store') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('post')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('Building Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter building name') }}" value="{{ old('name', '') }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('school_id') ? ' has-danger' : '' }}">
                                <label>{{ _('School') }}</label>
                                <select name="school_id" class="form-control">
                                    @foreach ($schools as $school)
                                        <option value="{{ $school->id }}">{{ $school->name }}</option>
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
