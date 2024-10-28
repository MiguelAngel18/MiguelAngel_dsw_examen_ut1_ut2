<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script>

        let text = "";
        function subrayar()
        {
            text = document.getElementById('text').value;
            return text = ("<u>" + text + "</u>");

            devolver();
        }

        function negrita()
        {
            text = document.getElementById('text').value;
            
            return text = ("<b>" + text + "</b>");
            
            devolver();
        }

        function devolver()
        {
            if(text == "")
            {
                return document.getElementById('idResultado').innerHTML = "";
            }
            else
            {
                return document.getElementById('idResultado').innerHTML = text;
            }
            
            console.log("Resultado: " + text);
        }
    </script>

</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <ul>
                @foreach($messages as $message)
                    <li>
                        <p id="text">{{ $message->text }}</p>

                        <label for="">Subrayado</label>
                        <input onclick="subrayar()" class="subrayado" type="radio" name="text">
                        
                        <label for="">Negrita</label>
                        <input onclick="negrita()" class="negrita" type="radio" name="text">

                        <form action="{{ route('edit', $message->id) }}" method="PUT">
                            <button type="submit" class="editar">Editar</button>
                        </form>
                    </li>

                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>