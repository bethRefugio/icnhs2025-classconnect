@extends('layouts.app', ['page' => __('Teachers'), 'pageSlug' => 'teachers', 'pageParent' => 'Teacher'])

@section('content')

<div class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header card-header-primary">
          <div class="row">
              <div class="col-8">
                <h4 class="card-title">List of Teachers</h4>
              </div>

              <div class="col-4 text-right">
                  <!--
                  <a href="/teacher/create" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i> Add teacher</a>
                  -->
              </div>

          </div>
        </div>
        @include('alerts.success')
        <div class="card-body">
          <div class="">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <!--
                  <th scope="col">Id</th>
                  -->
                  <th scope="col">Fullname</th>
                  <th scope="col">Grade</th>
                  <th scope="col">Section</th>
                  <th scope="col">Classroom</th>
                  <th scope="col">Building</th>
                  <th scope="col">School</th>
                  <th scope="col">View</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($teachers as $teacher)
                  <tr>
                    <!--
                    <td>{{ $teacher->id }}</td> 
                    -->
                    <td>
                      {{ $teacher->first_name .' '.$teacher->last_name }}
                    </td>
                    <td>{{ $teacher->grade }}</td>
                    <td>{{ $teacher->section }}</td>
                    <td>
                      @if( isset($teacher->classroom->name) )
                        {{  $teacher->classroom->name }}
                      @endif()
                    </td>
                    <td>
                      @if( isset($teacher->building->name) )
                        {{  $teacher->building->name }}
                      @endif()
                    </td>
                    <td>
                      @if( isset($teacher->building->school->name) )
                        {{  $teacher->building->school->name }}
                      @endif()
                    </td>
                    <td class="text-right">
                        <a href="/view-teacher/{{ $teacher->teacher_id }}" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i> View Info </a>
                        @php /*
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="tim-icons icon-bullet-list-67"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">
                              <i class="fas fa-pencil-alt"></i> View
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-trash"></i> Connect
                            </a>
                          </div>
                        </div>
                        */ @endphp

                        <!--Modal -->
                        <div class="modal fade" id="exampleModalCenter_{{ $teacher->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLongTitle">
                                            <i class="fa fa-trash"></i> Delete
                                        </h4>
                                    </div>
                                    <div class="modal-body" align="center">
                                        Are you sure you want to delete this teacher?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form method="post" action="{{ route('teacher.destroy', $teacher) }}" autocomplete="off">
                                          {{ csrf_field() }}
                                          {{ method_field('DELETE') }}
                                          <button type="submit" class="btn btn-danger"> Delete </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="float-right">{{ $teachers->links() }}</div>

        </div>

        <div class="card-footer py-4">
          <nav class="d-flex justify-content-end" aria-label="..."></nav>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
