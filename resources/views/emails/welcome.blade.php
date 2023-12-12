@component('mail::message')
<div style="text-align: center;">
    <img src="https://m.media-amazon.com/images/I/810D98lEBaL._AC_UF894,1000_QL80_.jpg" alt="Banner" class="w-full h-auto mb-6">
</div>

# Bem-vindo ao Nosso Site

Olá {{ $user->name }},

Seja bem-vindo ao nosso site! Estamos felizes em tê-lo(a) como nosso(a) novo(a) usuário(a).

Obrigado,<br>
Equipe do {{ config('app.name') }}
@endcomponent
