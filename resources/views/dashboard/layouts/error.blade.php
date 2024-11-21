@if(session()->has('message'))
    <script>
        //Notify
        $.notify({
            icon: 'icon-bell',
            title: 'success',
            message: '{{ session()->get('message')  }}',
        },{
            type: 'success',
            placement: {
                from: "bottom",
                align: "right"
            },
            time: 1000,
        });
    </script>
    @php
        session()->forget('message');
    @endphp
@elseif(session()->has('message_false'))
    <script>
        //Notify
        $.notify({
            icon: 'icon-bell',
            title: 'problem',
            message: '{{ session()->get('message_false')  }}',
        },{
            type: 'danger',
            placement: {
                from: "bottom",
                align: "right"
            },
            time: 1000,
        });
    </script>
    @php
        session()->forget('message_false');
    @endphp
@endif
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@yield('error')
