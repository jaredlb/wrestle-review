@component('layouts.app')
    <div class="mt-5 w-full">
        <div class="flex items-center justify-center w-full">
            @component('components.button')
                @slot('href', route('blogs.form'))
                Create new blog.
            @endcomponent
        </div>
        <div class="flex items-center justify-center w-full py-5">
            <div class="space-y-5">
                @foreach($blogs as $blog)
                    {{-- Blog Card Component --}}
                    @component('components.card')
                        @slot('title', $blog->title)
                        @slot('subtext', $blog->description)
                        @slot('tinytext', 'Posted by Jared Beasley')
                        @slot('date', $blog->created_at->format('d-m-Y'))
                        @slot('href', route('blogs.read', [ $blog ]))
                    @endcomponent
                @endforeach
            </div>
        </div>
    </div>
@endcomponent
