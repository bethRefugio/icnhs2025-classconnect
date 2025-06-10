@extends('layouts.app', ['page' => __('Edit Teacher'), 'pageSlug' => 'teachers', 'pageParent' => 'Teacher'])

@section('content')
    <div class="row">
        <div class="col col-md-8">

            <div class="card">
              <form method="post" action="{{ route('teacher.update', $teacher) }}" autocomplete="off">
                  <div class="col ">

                      <div class="card-header"><h5 class="title">{{ _('Edit Teacher') }}</h5></div>
                      <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                             <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('Fullname') }}</label>
                                <input type="text" name="name" class="form-control" required value="{{ old('name', $teacher->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>
                            
                            {{--
                            <div class="form-group{{ $errors->has('building_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Building') }}</label>
                                <select name="building_id" class="form-control">
                                  @foreach ($buildings as $building)
                                    <option value="{{ $building->id }}" {{ old('building_id', $teacher->building_id) == $building->id ? 'selected' : '' }}>
                                      {{ $building->name }}
                                    </option>
                                  @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'building_id'])
                            </div> 
                            

                            <div class="form-group{{ $errors->has('room_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Classroom') }} </label>
                                  <select name="room_id" class="form-control">
                                    @php /*
                                    @foreach ($classrooms as $classroom)
                                      <option value="{{ $classroom->id }}">{{ $classroom->room_no }}</option>
                                    @endforeach
                                    */ @endphp
                                  </select>
                                @include('alerts.feedback', ['field' => 'room_id'])
                            </div>
                            --}}

                            <div class="form-group{{ $errors->has('department_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Department') }}</label>
                                <select name="department_id" class="form-control">
                                  @foreach ($departments as $department)
                                    <option value="{{ $department->id }}" {{ old('department_id', $teacher->department_id) == $department->id ? 'selected' : '' }}>
                                      {{ $department->name }}
                                    </option>
                                  @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'department_id'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ _('Email') }}</label>
                                <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter email') }}" value="{{ old('email', $teacher->email) }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group{{ $errors->has('mobile_no') ? ' has-danger' : '' }}">
                                <label>{{ _('Contact Number') }}</label>
                                <input type="text" name="contact_no" class="form-control{{ $errors->has('contact_no') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter contact number') }}" value="{{ old('contact_no', $teacher->contact_no) }}">
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
