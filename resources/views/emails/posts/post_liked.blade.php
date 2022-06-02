@component('mail::message')
# Your post was liked

{{$liker->name}} liked your posts

@component('mail::button', ['url' => route('posts.show', $post)])
view post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
