@extends('layouts.app', ['page' => __('Add Teacher'), 'pageSlug' => 'addTeacher', 'pageParent' => 'Teacher'])

@section('content')
    <div class="row">
        <div class="col col-md-8">

            <div class="card">
              <form method="post" action="{{ route('teacher.store') }}" autocomplete="off">
                  <div class="col ">

                      <div class="card-header"><h5 class="title">{{ _('Add Teacher') }}</h5></div>
                      <div class="card-body">
                            @csrf
                            @method('post')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('Full name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter full name') }}" value="{{ old('name', '') }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>
                            
                            <div class="form-group{{ $errors->has('building_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Building') }}</label>
                                <span id="load_building">
                                  <select name="building_id" id="building_id" class="form-control" onchange="getClassroom($(this))">
                                    <option value=""> --- Select --- </option>
                                    @foreach ($buildings as $building)
                                      <option value="{{ $building->id }}">{{ $building->name }}</option>
                                    @endforeach
                                  </select>
                                </span>
                                @include('alerts.feedback', ['field' => 'building_id'])
                            </div>

                            <div class="form-group{{ $errors->has('room_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Classroom') }} <span id="load-classrooms-spinner"></span> </label>
                                <span id="load_classroom">
                                  <select name="room_id" class="form-control">
                                    <option value=""> --- Select --- </option>
                                    @php /*
                                    @foreach ($classrooms as $classroom)
                                      <option value="{{ $classroom->id }}">{{ $classroom->room_no }}</option>
                                    @endforeach
                                    */ @endphp
                                  </select>
                                </span>
                                @include('alerts.feedback', ['field' => 'room_id'])
                            </div>

                            <div class="form-group{{ $errors->has('department_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Department') }}</label>
                                <select name="department_id" class="form-control">
                                  <option value=""> --- Select --- </option>
                                  @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                  @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'department_id'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ _('Email') }}</label>
                                <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter email') }}" value="{{ old('email', '') }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group{{ $errors->has('contact_no') ? ' has-danger' : '' }}">
                                <label>{{ _('Contact Number') }}</label>
                                <input type="text" name="contact_no" class="form-control{{ $errors->has('contact_no') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter contact number') }}" value="{{ old('contact_no', '') }}">
                                @include('alerts.feedback', ['field' => 'contact_no'])
                            </div>

                         </div>
                       <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"> <i class="fas fa-save"></i> {{ _('Save') }}</button>
                        <a href="/teacher" class="btn btn-fill btn-default"> <i class="tim-icons icon-simple-remove"></i> {{ _('Close') }}</a>
                      </div>
                  </div>

              </form>
            </div> <!-- card -->

        </div>
    </div>


    <script src="{{ config('app.url') }}/js/vanilla.js"></script>
    
@endsection
