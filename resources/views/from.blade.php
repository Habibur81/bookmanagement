@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-2">

                <form action="{{ route('insert_info') }}" method="POST">
                    @csrf
                     <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Publication Name:</strong>
                                <input type="text" name="pname" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Age:</strong>
                                <select class="form-control form-control-lg" name="age">
                                    <option selected>Select your age</option>
                                    <option value="20">20</option>
                                    <option value="22">22</option>
                                    <option value="24">24</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date:</strong>
                                <input type="date" name="date" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Page:</strong>
                                <input type="number" name="page" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Book type:</strong>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" name="type1" value="sci-fi">sci-fi
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" name="type1" value="drama">Drama
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input"name="type1" value="novel">Novel
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </div>


            </div>
        </div>
    </div>
</div>
@endsection