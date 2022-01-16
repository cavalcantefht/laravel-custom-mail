@component('mail::message')
    <div>
        <h1>Olá, {{ $name }}</h1>
        <p>
            Recebemos uma soliciação para restaurar sua senha de acesso.
            <br />
            Se você reconhece essa ação, clique no botão abaixo para prosseguir:
            @component('mail::button', ['url' => $url])
                Recuperar Senha
            @endcomponent
            Atenciosamente, <br />
            <b>{{ config('app.name') }}</b>
        </p>
    </div>
@endcomponent
