    @if (isset($errors) && $errors->any())
            @component('layouts.notifications.notification',['class'=>'alert-danger'])
                    Please check the form below for errors
                    @foreach($errors->getMessages() as $messageGroupKey => $messageGroup)
                        <p><strong>{{ ucwords($messageGroupKey) }}: </strong>
                            @foreach($messageGroup as $message)
                                {{ $message }}
                            @endforeach
                        </p>
                    @endforeach
            @endcomponent
        </alert>
    @endif

        @if ($message = Session::get('status'))
            @component('layouts.notifications.notification',['class'=>'alert-info'])
                {{ $message }}
            @endcomponent
        @endif

    @if ($message = Session::get('success'))
        @component('layouts.notifications.notification',['class'=>'alert-success'])
                {{ $message }}
        @endcomponent
    @endif

    @if ($message = Session::get('error'))
        @component('layouts.notifications.notification',['class'=>'alert-danger'])
            {{ $message }}
        @endcomponent
    @endif

    @if ($message = Session::get('warning'))
        @component('layouts.notifications.notification',['class'=>'alert-warning'])
            {{ $message }}
        @endcomponent
    @endif

    @if ($message = Session::get('info'))
        @component('layouts.notifications.notification',['class'=>'alert-info'])
            {{ $message }}
        @endcomponent
    @endif