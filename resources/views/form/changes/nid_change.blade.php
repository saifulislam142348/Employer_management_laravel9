@extends('layouts.layout')
@section('content')
@include('user.pages.include.userHeader')
<div class="jumbotron">
    <h2  class="text-center alert-danger bg-light">****NID Change***</h2>
    <hr>
    <div class="table">
        <form action="{{route('update.nid')}}" method="post">
            @csrf
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __(' New NID') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="old_nid" value="{{Auth::user()->nid}}" readonly>

                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('New NID') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="new_nid">

                </div>
                <div class="d-flex justify-content-center">
                    @if (session('nid'))
                        <hr>
                        <span class="text-danger  ">{{ session('nid') }}</span>
                        <hr>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('New Confirm NID') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="confirm_nid">

                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end"></label>

                <div class="col-md-6">
                    <input type="submit" class="form-control btn btn-danger btn-outline-success " value="Update NID">

                </div>
            </div>

        </form>
    </div>
</div>
@endsection
