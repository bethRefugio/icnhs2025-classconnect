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

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('No. of Floors') }}</label>
                                <input type="text" name="no_of_floors" class="form-control{{ $errors->has('no_of_floors') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter the no. of floors') }}" value="{{ old('no_of_floors', '') }}">
                                @include('alerts.feedback', ['field' => 'no_of_floors'])
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
