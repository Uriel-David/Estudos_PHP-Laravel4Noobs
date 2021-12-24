<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de rotas</title>
</head>
<body>
    <!-- <marquee>
        {{ $username }}

        @if(1 == 1)
            - deu certo
        @else
            - deu errado
        @endif

        {{-- @foreach($args as $arg)
            {{ $arg }}
        @endforeach --}}
    </marquee> -->

    <!-- @if($username == "Uriel David")
        <h1>teste do mais brabo da casa dele em PHP</h1>
    @elseif($username == 'outroPHPdev')
        <h1>teste do dev que mora logo ali</h1>
    @else
        <h2>O username ai é brabo</h2>
    @endif

    @unless($username == "Uriel David")
        testei unless
    @endunless

    @isset($args[1])
        <h3>Args está sendo "setado"</h3>
    @endisset

    @empty($args['a'])
        <h3>Args está vazio</h3>
    @endempty

    <table>
    @for($i = 0; $i < 10; $i++)
        <tr>
            <td>{{$i}}</td>
        </tr>
    @endfor
    </table>

    @while($whilezada)
        {{-- dump($whilezada) --}}
        @if($whilezada)
            {{ $whilezada = false }}
        @endif
    @endwhile

    @foreach($chaters as $key => $chatter)
        <tr>
            <td>{{ " | ".$key." => ".$chatter." | " }}</td>
        </tr>
    @endforeach -->


</body>
</html>
