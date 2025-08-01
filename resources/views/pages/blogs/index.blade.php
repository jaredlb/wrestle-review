@component('layouts.app')

    <div class="space-y-5">
        @foreach($blogs as $blog)
            {{-- Blog Card Component --}}
            @component('components.card')
                @slot('title', $blog->title)
                @slot('subtext', $blog->description)
                @slot('tinytext', 'Posted by ' . $blog->user->name)
                @slot('date', $blog->created_at->format('d-m-Y H:i')->forHumans())
                @slot('href', 'Read')
            @endcomponent
        @endforeach
    </div>

@endcomponent
