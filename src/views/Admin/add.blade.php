@extends('newsletter::Admin/layouts.app')

@section('content')
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('store')}}" method="post">
                    <div class="modal-header">						
                        <h4 class="modal-title">Add Email</h4>
                        <a href="{{route('index')}}" class="close" aria-hidden="true">&times;</a>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">                   
                        <a href="{{route('index')}}" class="btn btn-default" >Cancel</a>
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                    {{csrf_field()}}
                    {{method_field('POST')}}                        
                </form>
            </div>
        </div>
    </div>
@endsection
