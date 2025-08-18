@component('layouts.app')
    <div class="mt-5 w-full">
        <div class="flex items-center justify-center w-full">
            @component('components.button')
                @slot('href', route('blogs.form'))
                Create new blog.
            @endcomponent
        </div>
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
    </div>
@endcomponent
