@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{route('posts')}}" method="post" class="mb-4">
            @csrf
            <div class="mb-4">
                <label for="body" class="sr-only">body</label>
                <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>
            
            @error('body')
            <div class="text-red-500 mt-2 text-sm">
            {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium" type="submit">Post</button>
        </div>
        </form>
        @if ($posts->count())
            @foreach ($posts as $post)
                <div class="mb-4">
                    <a href="" class="font-bold">{{$post->user->name}} <span class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span></a>
                    <p class="mb-2">{{$post->body}}</p>
                </div>
            @endforeach
            

            @else
                
            There are not posts
        @endif
        </div>
    </div>
@endsection