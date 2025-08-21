@component('layouts.app')
    <form method="POST" action="{{ route('blogs.update', [ $blog ]) }}" class="flex justify-center items-center">

        @csrf

        <div class="space-y-5 mt-2">

            <div>
                @component('components.input-label')
                    Title*
                @endcomponent

                @component('components.text-input')
                    @slot('name', 'title')
                @endcomponent

                @component('components.input-error')
                    @slot('messages', isset($errors->getMessages()['title']) ? $errors->getMessages()['title'] : []))
                @endcomponent
            </div>

            <div>
                @component('components.input-label')
                    Description*
                @endcomponent

                @component('components.text-input')
                    @slot('name', 'description')
                @endcomponent

                @component('components.input-error')
                    @slot('messages', isset($errors->getMessages()['description']) ? $errors->getMessages()['description'] : [])
                @endcomponent
            </div>

            @component('components.save-button')
            @endcomponent


        </div>

    </form>
@endcomponent
