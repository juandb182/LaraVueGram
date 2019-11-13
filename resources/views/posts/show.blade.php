@extends('layouts.app')

@section('content')
<div class="container">


<div class="row">
    <div class="col-8">
        <img src="../storage/{{$post->image}}" class="w-100">
    </div>
    <div class="col-4">
        <div>


        <div class="d-flex align-items-center">
            <div class="pr-3">
                <img src="{{$post->user->profile->profileImage()}}" style="max-width:50px;" class=" rounded-circle w-100">
            </div>
            <div>
                <div class="font-weight-bold">
                    <a class="text-dark" href="../profile/{{$post->user->id}}">{{$post->user->username}}</a>
                    <a class="pl-2" href="$"> Follow</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
        <p>
            <span class="font-weight-bold">
                <a class="text-dark" href="../profile/{{$post->user->id}}">{{$post->user->username}}</a>
            </span>  {{$post->caption}}
        </p>
    </div>
</div>
</div>

@endsection


