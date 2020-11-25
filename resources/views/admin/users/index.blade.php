@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                   

                   <table class="table ">
                       <thead>
                           <tr>
                               <th scope="col">#</th>
                               <th scope="col">Name</th>
                               <th scope="col">Email</th>
                               <th scope="col">Roles</th>
                               <th scope="col">Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach ($users as $item)
                            <tr>
                            
                            <th scope="col">{{$loop->iteration}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{implode(', ', $item->roles()->get()->pluck('name')->toArray())}}</td>
                            <td>
                                @can('edit-users')
                                
                                <a href="{{route('admin.users.edit',$item->id)}}"><button type="button" class="btn btn-info float-left">Edit</button></a>
                                
                                @endcan
                            </td>
                            <td>
                                <form action="{{route('admin.users.destroy',$item)}}" method="POST" class="float-right">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-info">Delete</button>
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
</div>
@endsection
