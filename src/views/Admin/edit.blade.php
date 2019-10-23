@extends('newsletter::Admin/layouts.app')

@section('content')
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['method' => 'PUT', 'route' => ['update', $data->id]]) !!}
                    <div class="modal-header">						
                        <h4 class="modal-title">Edit Email</h4>
                        <a href="{{route('index')}}" class="close" aria-hidden="true">&times;</a>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{$data->email}}" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('index')}}" class="btn btn-default" >Cancel</a>
                        <input type="submit" class="btn btn-info" value="Update">                        
                    </div>
                    {{csrf_field()}} 
                    {{method_field('PUT')}}                                                                                
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
