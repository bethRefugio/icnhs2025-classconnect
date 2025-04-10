@extends('layouts.app', ['page' => __('Edit Classroom'), 'pageSlug' => 'classrooms', 'pageParent' => 'Classroom'])

@section('content')
    <div class="row">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Edit Classroom') }}</h5>
                </div>
                <form method="post" action="{{ route('classroom.update', $classroom) }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('code') ? ' has-danger' : '' }}">
                                <label>{{ _('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter classroom name') }}" value="{{ old('name', $classroom->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('building_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Building') }}</label>
                                <select name="building_id" class="form-control">
                                  @foreach ($buildings as $building)
                                    <option {{ $classroom->building_id == $building->id ? "selected" : "" }} value="{{ $building->id }}">{{ $building->name }}</option>
                                  @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'building_id'])
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"> <i class="fas fa-save"></i> {{ _('Save') }}</button>
                        <a href="/classroom" class="btn btn-fill btn-default"> <i class="tim-icons icon-simple-remove"></i> {{ _('Close') }}</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
