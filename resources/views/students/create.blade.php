@extends('layouts.app', ['page' => __('Add Student'), 'pageSlug' => 'addStudent', 'pageParent' => 'Student'])

@section('content')
    <div class="row">
        <div class="col col-md-8">

            <div class="card">
              <form method="post" action="{{ route('student.store') }}" autocomplete="off">
                  <div class="col ">

                      <div class="card-header"><h5 class="title">{{ _('Add Student') }}</h5></div>
                      <div class="card-body">
                            @csrf
                            @method('post')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ _('Full name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter full name') }}" value="{{ old('name', '') }}">
                                @include('alerts.feedback', ['field' => 'name'])
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

                            <div class="form-group{{ $errors->has('LRN') ? ' has-danger' : '' }}">
                                <label>{{ _('LRN') }}</label>
                                <input type="text" name="LRN" class="form-control{{ $errors->has('LRN') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter your LRN') }}" value="{{ old('LRN', '') }}">
                                @include('alerts.feedback', ['field' => 'LRN'])
                            </div>

                            <div class="form-group{{ $errors->has('year_level') ? ' has-danger' : '' }}">
                                <label>{{ _('Grade / Year Level') }}</label>
                                <select name="year_level" id="year_level" class="form-control">
                                <option value=""> --- Select --- </option>
                                @for ($i = 7; $i <= 12; $i++)
                                    <option>Grade {{ $i }}</option>
                                @endfor
                                </select>
                                @include('alerts.feedback', ['field' => 'year_level'])
                            </div>

                            <div class="form-group">
                              <label>Building</label>
                              <select id="building_id" name="building_id" class="form-control">
                                  <option value="">Select Building</option>
                                  @foreach($buildings as $building)
                                      <option value="{{ $building->id }}">{{ $building->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Floor</label>
                              <select id="floor_no" class="form-control">
                                  <option value="">Select Floor</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>Room</label>
                              <select id="room_id" name="room_id" class="form-control">
                                  <option value="">Select Room</option>
                              </select>
                          </div>

                                               
                            

                            <div class="form-group{{ $errors->has('teacher_id') ? ' has-danger' : '' }}">
                                <label>{{ _('Adviser') }}</label>
                                <select name="teacher_id" class="form-control">
                                  <option value=""> --- Select --- </option>
                                  @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                  @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'teacher_id'])
                            </div>

                             <div class="form-group{{ $errors->has('parent') ? ' has-danger' : '' }}">
                                <label>{{ _('Parent/Guardian') }}</label>
                                <input type="text" name="parent" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" placeholder="{{ _('Enter full name') }}" value="{{ old('name', '') }}">
                                @include('alerts.feedback', ['field' => 'parent'])
                            </div>

                            

                         </div>
                       <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"> <i class="fas fa-save"></i> {{ _('Save') }}</button>
                        <a href="/student" class="btn btn-fill btn-default"> <i class="tim-icons icon-simple-remove"></i> {{ _('Close') }}</a>
                      </div>
                  </div>

              </form>
            </div> <!-- card -->

        </div>
    </div>
    
    <script>
const classrooms = @json($classrooms);
const buildings = @json($buildings);
console.log('buildings:', buildings);
console.log('classrooms:', classrooms);

document.addEventListener('DOMContentLoaded', function() {
  const buildingSelect = document.getElementById('building_id');
  const floorSelect = document.getElementById('floor_no');
  const roomSelect = document.getElementById('room_id');

  if (buildingSelect) {
    buildingSelect.addEventListener('change', function() {
      let buildingId = this.value;
      let building = buildings.find(b => String(b.id) === String(buildingId));
      floorSelect.innerHTML = '<option value="">Select Floor</option>';
      roomSelect.innerHTML = '<option value="">Select Room</option>';
      if (building && building.no_of_floors) {
        for (let i = 1; i <= parseInt(building.no_of_floors); i++) {
          floorSelect.innerHTML += `<option value="${i}">${i}</option>`;
        }
      }
      // Debug: log selected building
      console.log('Selected building:', building ? building.name : 'None', 'ID:', buildingId);
    });
  }

  if (floorSelect) {
    floorSelect.addEventListener('change', function() {
      let buildingId = buildingSelect.value;
      let floorNo = this.value;
      let rooms = classrooms.filter(
        c => String(c.building_id) === String(buildingId) && String(c.floor_no) === String(floorNo)
      );
      roomSelect.innerHTML = '<option value="">Select Room</option>';
      rooms.forEach(room => {
        roomSelect.innerHTML += `<option value="${room.id}">${room.room_no}</option>`;
      });
      // Debug: log selected floor
      console.log('Selected floor_no:', floorNo, 'in building ID:', buildingId);
    });
  }

  if (roomSelect) {
    roomSelect.addEventListener('change', function() {
      let roomId = this.value;
      let room = classrooms.find(r => String(r.id) === String(roomId));
      // Debug: log selected room
      console.log('Selected room:', room ? room.room_no : 'None', 'ID:', roomId);
    });
  }
});
</script>
    <script src="{{ config('app.url') }}/js/vanilla.js"></script>
    
@endsection
