@extends('layouts.master')

@section('content')
  <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                        <h2 class="title mb-3 mb-sm-0">@role('User')
    User Dashboard
@else
    Admin Dashboard
@endrole</h2>
                    </div>
@endsection
