@extends('layouts.layout')


@section('content')
    {{--User data display--}}
    <div class="main-heading">
        <h2>Memcache Application</h2>
    </div>
   @if(count($users))
       <?php if(!empty($memcache)){?>
           <p style="text-align: center"><i>{{$memcache}}</i></p>
       <?php }?>
       <div class="seciton">
           <table style="width: 60%;border: 1px solid #ddd;">
               <tr>
                   <th>Id </th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Address</th>
                   <th>Actions</th>
               </tr>
               @foreach($users as $data)
                   <tr>
                       <td>{{$data->id}}</td>
                       <td>{{$data->name}}</td>
                       <td>{{$data->email}}</td>
                       <td>{{$data->address}}</td>
                       <td><a href="<?php echo url('/remove').'/'.$data->id?>">Delete</a></td>
                   </tr>
               @endforeach
           </table>
       </div>
   @else
       <p>No users found</p>
   @endif


@endsection