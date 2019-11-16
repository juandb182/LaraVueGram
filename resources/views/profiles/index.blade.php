@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2"></div>

    <div class="col-8">
        <div class="container">
            <div class="row">
                <div class="col-3 p-5">
                    <img src=" {{$user->profile->profileImage()}} " class="img img-responsive rounded-circle" style="height:180px; width:180px;">
                </div>


                <div class="col-9 pt-5">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="d-flex align-items-center pb-3">
                            <div class="h2">{{$user->username}}</div>
                            <followbutton user-id="{{$user->id}}" follows="{{ $follows }}"></followbutton>
                        </div>

                    @can('update', $user->profile)
                    <a class="btn btn-light" href="../p/create">Add New post</a>
                    @endcan
                    </div>
                    @can('update', $user->profile)
                    <a href="../profile/{{$user->id}}/edit">Edit Profile</a>
                    @endcan
                    <div class="d-flex">
                        <div class="pr-4"><strong>{{$user->posts->count()}}</strong> post</div>
                        <div class="pr-4"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                        <div class="pr-4"><strong>{{$user->following->count()}}</strong> followings</div>
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
