@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success text-center" style="padding: 0px 0px 0px 0px;">
                        <p style="padding-top: 2px;">{{ $message }}</p>
                    </div>
                 @endif

            <div class="col-md-4">
                <a class="btn btn-primary m-1" href="{{ route('home') }}" role="button">Create</a>
            </div>

            <div class="card">
                <table class="table table-border">
                    <thead>
                        <tr class="table-warning">
                          <td>Name</td>
                          <td>Publication Name</td>
                          <td>Age</td>
                          <td>Date</td>
                          <td>Page</td>
                          <td>Type</td>
                          <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $b_data)
                        <tr>
                            <td>{{$b_data->name}}</td>
                            <td>{{$b_data->pname}}</td>
                            <td>{{$b_data->age}}</td>
                            <td>{{$b_data->date}}</td>
                            <td>{{$b_data->page}}</td>
                            <td>{{$b_data->booktype}}</td>
                            <td class="text-center">
                                <a href="{{ route('edit_book', $b_data->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ route('delete_info', $b_data->id) }}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>


            </div>
        </div>
    </div>
</div>
@endsection