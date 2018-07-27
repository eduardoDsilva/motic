@if( isset($errors) && count($errors) > 0 )
    <div class="center-align">
        @foreach( $errors->all() as $error )
            <div class="chip red">
                {{$error}}
                <i class="close material-icons">close</i>
            </div>
        @endforeach
    </div>
@endif