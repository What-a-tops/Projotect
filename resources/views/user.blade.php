
@extends('layouts.app')

@include('partials/sidebar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 body_list">
                 <div class="card-header"><h3>User List</h3></div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                          {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success">
                      <p>Your're logged in as {{ucfirst(Auth::user()->name)}}</p>
                    </div>
                </div> --}}

                 <table class="table table-hover-bordered">
                      <thead>
                          <tr>
                              <th width="5">No.</th>
                              <th>Member Name</th>
                              <th>Email</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $key => $row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{ucfirst($row->name)}}</td>
                                <td>{{$row->email}}</td>
                                <td>

                                </td>
                            </tr>
                          @endforeach
                      </tbody>
                </table>
        </div>
    </div>
</div>

@endsection
