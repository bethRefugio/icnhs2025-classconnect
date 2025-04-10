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

                            <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                                <label>{{ _('First name') }}</label>
                                <input type="text" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter first name') }}" value="{{ old('first_name', '') }}">
                                @include('alerts.feedback', ['field' => 'first_name'])
                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                <label>{{ _('Last name') }}</label>
                                <input type="text" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter last name') }}" value="{{ old('last_name', '') }}">
                                @include('alerts.feedback', ['field' => 'last_name'])
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                <label>{{ _('Gender') }}</label>
                                <select name="gender" class="form-control">
                                  <option value=""> --- Select --- </option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                </select>
                                @include('alerts.feedback', ['field' => 'gender'])
                            </div>

                            <div class="form-group{{ $errors->has('grade') ? ' has-danger' : '' }}">
                                <label>{{ _('Grade / Year Level') }}</label>
                                <select name="grade" id="grade" class="form-control">
                                  @for ($i = 1; $i < 12; $i++)
                                    <option>Grade {{ $i }}</option>
                                  @endfor
                                  @for ($i = 1; $i < 3; $i++)
                                    <option>Kinder {{ $i }}</option>
                                  @endfor
                                  @for ($i = 1; $i < 2; $i++)
                                    <option>Nursery {{ $i }}</option>
                                  @endfor
                                  </select>
                                @include('alerts.feedback', ['field' => 'grade'])
                            </div>

                            <div class="form-group{{ $errors->has('section') ? ' has-danger' : '' }}">
                                <label>{{ _('Section') }}</label>
                                <input type="text" name="section" class="form-control{{ $errors->has('section') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter section') }}" value="{{ old('section', '') }}">
                                @include('alerts.feedback', ['field' => 'section'])
                            </div>

                            <div class="form-group{{ $errors->has('school_id') ? ' has-danger' : '' }}">
                                <label>{{ _('School') }}</label>
                                <select name="school_id" id="school_id" class="form-control" onchange="getBuilding($(this))">
                                  <option value=""> --- Select --- </option>
                                  @foreach ($schools as $school)
                                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                                  @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'building_id'])
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

                            <div class="form-group{{ $errors->has('classroom_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Classroom') }} <span id="load-classrooms-spinner"></span> </label>
                                <span id="load_classroom">
                                  <select name="classroom_id" class="form-control">
                                    <option value=""> --- Select --- </option>
                                    @php /*
                                    @foreach ($classrooms as $classroom)
                                      <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                    @endforeach
                                    */ @endphp
                                  </select>
                                </span>
                                @include('alerts.feedback', ['field' => 'classroom_id'])
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

                            <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                <label>{{ _('Rank / Position') }}</label>
                                <select name="position" class="form-control">
                                  <option value=""> --- Select --- </option>
                                  <option value="Teacher I">Teacher I</option>
                                  <option value="Teacher II">Teacher II</option>
                                  <option value="Teacher III">Teacher III</option>
                                  <option value="Master Teacher I">Master Teacher I</option>
                                  <option value="Master Teacher II">Master Teacher II</option>
                                  <option value="Master Teacher III">Master Teacher III</option>
                                  <option value="Head Teacher I">Head Teacher I</option>
                                  <option value="Head Teacher II">Head Teacher II</option>
                                  <option value="Head Teacher III">Head Teacher III</option>
                                  <option value="Head Teacher IV">Head Teacher IV</option>
                                  <option value="Head Teacher V">Head Teacher V</option>
                                </select>
                                @include('alerts.feedback', ['field' => 'gender'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ _('Email') }}</label>
                                <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter email') }}" value="{{ old('email', '') }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group{{ $errors->has('mobile_no') ? ' has-danger' : '' }}">
                                <label>{{ _('Mobile Number') }}</label>
                                <input type="text" name="mobile_no" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter mobile number') }}" value="{{ old('mobile_no', '') }}">
                                @include('alerts.feedback', ['field' => 'mobile_no'])
                            </div>

                            <div class="form-group{{ $errors->has('telephone_no') ? ' has-danger' : '' }}">
                                <label>{{ _('Telephone number') }}</label>
                                <input type="text" name="telephone_no" class="form-control{{ $errors->has('telephone_no') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter telephone number') }}" value="{{ old('telephone_no', '') }}">
                                @include('alerts.feedback', ['field' => 'telephone_no'])
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
