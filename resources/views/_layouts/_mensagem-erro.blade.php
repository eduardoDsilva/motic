<div class="center-align">
    <div class="chip green">
        {{Session::get('mensagem')}}
        <i class="close material-icons">close</i>
    </div>
</div>
{{Session::forget('mensagem')}}
