@extends('layouts.app', ['page' => __('Parent Management '), 'pageSlug' => 'parents', 'pageParent' => 'Parent'])

@section('content')

<div class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header card-header-primary">
          <div class="row">
              <div class="col-8">
                <h4 class="card-title">Manage Parent</h4>
              </div>
              <div class="col-4 text-right">
                  <a href="/parent/create" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i> Add parent</a>
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
                  <th scope="col">Allowed Login?</th>
                  <!-- <th scope="col">Role</th> -->
                  <!-- <th scope="col">Added By</th> -->
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($parents as $parent)
                  <tr>
                    <!-- <td>{{ $parent->id }}</td> -->
                    <td><a href="/parent/{{ $parent->id }}/edit">{{ $parent->name }}</a></td>
                    <td>{{ $parent->email }}</td>
                    <td>{{ $parent->is_allowed_login ? 'True' : 'False' }}</td>
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
