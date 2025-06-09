@extends('layouts.app', ['page' => __('User Management'), 'pageSlug' => 'users', 'pageParent' => 'User'])

@section('content')

<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          <div class="row">
              <div class="col-8">
                  <h4 class="card-title">Users</h4>
              </div>
              <div class="col-4 text-right">
                  <a href="/user/create" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i>  Add user</a>
              </div>
          </div>
        </div>
        <div class="card-body">
          <div class="">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Date Added</th>
                  <th scope="col">Role</th>
                  <th scope="col">Enterprise?</th>
                  <th scope="col">Paid Subscriber?</th>
                  <th scope="col">Transaction ID</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>
                      @if ($user->role == 'admin')
                        {{ $user->name }}
                      @else
                        <a href="/user/{{ $user->id }}/edit">{{ $user->name }}</a>
                      @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                      @if ($user->role != 'admin')
                        {{ $user->is_enterprise ? 'Yes' : 'No' }}
                      @endif
                    </td>
                    <td>{{ $user->is_paid ? 'Yes' : 'No' }}</td>
                    <td>
                      @if (isset($user->braintree))
                        <a href="#" data-toggle="modal" data-backdrop='static' data-keyboard="false" data-target="#BraintreeInfoModal_{{ $user->id }}" >
                          {{ $user->transaction_id }}
                        </a>
                        <!--Modal -->
                        <div class="modal fade" id="BraintreeInfoModal_{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLongTitle">
                                            <i class="fas fa-info"></i> Transaction Info
                                        </h4>
                                    </div>
                                    <div class="modal-body col-md-12">

                                      <div class="card ">
                                        <div class="card-body">
                                          <form class="form-horizontal">
                                            @php
                                            $paymentFull = json_decode($user->braintree->full_result);
                                            $paymentGateway = strtoupper(str_replace('_',' ', $paymentFull->transaction->paymentInstrumentType));
                                            @endphp
                                            <div class="row">
                                              <label class="col-sm-6 col-form-label"> Merchant Account ID: </label>
                                              <label class="col-form-label"> {{ $paymentFull->transaction->merchantAccountId }} </label>
                                            </div>
                                            <div class="row">
                                              <label class="col-sm-6 col-form-label"> Transaction ID: </label>
                                              <label class="col-form-label"> {{ $user->transaction_id }} </label>
                                            </div>
                                            <div class="row">
                                              <label class="col-sm-6 col-form-label"> Payment Gateway: </label>
                                              <label class="col-form-label"> {{ $paymentGateway }} </label>
                                            </div>
                                            <div class="row">
                                              <label class="col-sm-6 col-form-label"> Amount: </label>
                                              <label class="col-form-label"> {{ $paymentFull->transaction->amount }} </label>
                                            </div>
                                            <div class="row">
                                              <label class="col-sm-6 col-form-label"> Currency: </label>
                                              <label class="col-form-label"> {{ $paymentFull->transaction->currencyIsoCode }} </label>
                                            </div>
                                          </form>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      @endif
                    </td>
                    <td class="text-right">
                      @if ($user->role != 'admin')
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="/user/{{ $user->id }}/edit">Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-backdrop='static' data-keyboard="false" data-target="#BraintreeInfoModal_{{ $user->id }}" >Full Info Transcation</a>
                          </div>
                        </div>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="float-right">{{ $users->links() }}</div>

        </div>

        <div class="card-footer py-4">
          <nav class="d-flex justify-content-end" aria-label="..."></nav>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
