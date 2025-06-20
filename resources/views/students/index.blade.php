@extends('layouts.app', ['page' => __('Student Management '), 'pageSlug' => 'students', 'pageStudent' => 'Student'])

@section('content')

<div class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header card-header-primary">
          <div class="row">
              <div class="col-8">
                <h4 class="card-title">Manage Student</h4>
              </div>
              <div class="col-4 text-right">
                  <a href="/parent/create" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i> Add Student</a>
              </div>
          </div>
        </div>
        @include('alerts.success')
        <div class="card-body">
          <div class="">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <!-- <th scope="col">Id</th> -->
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Contact Number</th>
                  <th scope="col">LRN</th>
                  <th scope="col">Year Level</th>
                  <th scope="col">Adviser</th>
                  <th scope="col">Parent / Guardian</th>
                  <th scope="col">Classroom</th>
                  <th scope="col">Building</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($students as $student)
                  <tr>
                    <!-- <td>{{ $student->id }}</td> -->
                    <td><a href="/student/{{ $student->id }}/edit">{{ $student->name }}</a></td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->contact_no }}</td>
                    <td>{{ $student->LRN }}</td>
                    <td>{{ $student->year_level }}</td>
                    <td>{{ $student->contact_no }}</td>
                    <td>
                      @if($student->teacher)
                        {{ $student->teacher->name }}
                      @endif
                    </td>
                    <td>{{ $student->parent }}</td>
                    <td>
                      @if($teacher->classroom)
                        {{ $teacher->classroom->room_no }}
                      @endif
                    </td>
                    <td>
                      @if($teacher->classroom && $teacher->classroom->building)
                        {{ $teacher->classroom->building->name }}
                      @endif
                    </td>
                    
                    <!-- <td>{{ $parent->account->name }}</td> -->
                    <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="tim-icons icon-bullet-list-67"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="/parent/{{ $parent->id }}/edit">
                              <i class="fas fa-pencil-alt"></i> Edit
                            </a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-backdrop='static' data-keyboard="false" data-target="#exampleModalCenter_{{ $parent->id }}" >
                                <i class="fa fa-trash"></i> Delete
                            </a>
                          </div>
                        </div>

                        <!--Modal -->
                        <div class="modal fade" id="exampleModalCenter_{{ $parent->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLongTitle">
                                            <i class="fa fa-trash"></i> Delete
                                        </h4>
                                    </div>
                                    <div class="modal-body" align="center">
                                        Are you sure you want to delete this parent?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form method="post" action="{{ route('parent.destroy', $parent) }}" autocomplete="off">
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
          <div class="float-right">{{ $parents->links() }}</div>

        </div>

        <div class="card-footer py-4">
          <nav class="d-flex justify-content-end" aria-label="..."></nav>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection
