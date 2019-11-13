@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2"></div>

    <div class="col-8">
        <div class="container">
            <div class="row">
                <div class="col-3 p-5">
                    <img src=" {{$user->profile->profileImage()}} " class="img img-responsive rounded-circle" style="height:150px; width:150px;">
                </div>

                <div class="col-9 pt-5">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h1>{{$user->username}}</h1>
                        @can('update', $user->profile)
                        <a href="../p/create">Add New post</a>
                    @endcan
                    </div>
                    @can('update', $user->profile)
                    <a href="../profile/{{$user->id}}/edit">Edit Profile</a>
                    @endcan
                    <div class="d-flex">
                        <div class="pr-4"><strong>{{$user->posts->count()}}</strong> post</div>
                        <div class="pr-4"><strong>200k</strong> followers</div>
                        <div class="pr-4"><strong>400k</strong> followings</div>
                    </div>
                    <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
                    <div>{{$user->profile->description}}</div>
                    <div><a href="#">{{$user->profile->url}}</a></div>
                </div>
            </div>
            <div class="row p-4">
                @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                <a href="../p/{{$post->id}}">
                    <img src="../storage/{{$post->image}}" class="w-100">
                </a>
            </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>
@endsection
