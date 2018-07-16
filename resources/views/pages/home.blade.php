@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        @forelse($posts as $post)
        <div class="well">
           
            <div class="media-body">
                <h4 class="media-heading">{{$post->title}}</h4>
                <p class="text-right">By: {{$post->user->name}}</p>
                <p>{{ $post->body }}</p>
                <ul class="list-inline list-unstyled">
                    <li class="list-inline-item"><span><i class="glyphicon glyphicon-calendar"></i> {{ $post->created_at->diffForHumans() }}</span></li>
                    <li class="list-inline-item">|</li>
                    @if($post->replies->count() > 0)

                        <li class="list-inline-item">{{ $post->replies->count() }} Comment(s)</li>
                    @else
                        <li class="list-inline-item">Be the first to reply</li>
                    @endif
                </ul>
            </div>
        </div>
        @empty
        <p>No posts found</p>
        @endforelse
    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
