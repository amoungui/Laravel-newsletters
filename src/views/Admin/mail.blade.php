@extends('newsletter::Admin/layouts.app')

@section('content')
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('mail')}}" method="post">
                    <div class="modal-header">						
                        <h4 class="modal-title">Send Email</h4>
                        <a href="{{route('index')}}" class="close" aria-hidden="true">&times;</a>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="{{$emails}}" required>
                        </div>
                        <textarea name="message" class="form-control" rows="5" cols="33"></textarea>
                    </div>
                    <div class="modal-footer">                   
                        <a href="{{route('index')}}" class="btn btn-default" >Cancel</a>
                        <input type="submit" class="btn btn-success" value="Send">
                    </div>
                    {{csrf_field()}}
                    {{method_field('POST')}}                        
                </form>
            </div>
        </div>
    </div>
@endsection