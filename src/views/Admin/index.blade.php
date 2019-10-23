@extends('newsletter::Admin/layouts.app')

@section('content')
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Newsletter</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('store')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Email</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Send mail</span></a>						
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    <th>Email</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                <label for="checkbox2"></label>
                            </span>
                        </td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{$data->updated_at}}</td>
                        <td>
                            <a href="/admin/data/{{$data->id}}/edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="admin/data/{{$data->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="delete">&#xE872;</i></a>
                        </td>
                    </tr>                        
                @endforeach					 
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text">Showing <b>4</b> out of <b>{{$dd->count()}}</b> entries</div>
            <ul class="pagination">
                {!! $links !!}
            </ul>
        </div>
    </div>
@endsection