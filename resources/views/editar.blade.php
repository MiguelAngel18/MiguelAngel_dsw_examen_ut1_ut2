<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Message</title>
</head>
<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('update', $message->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="text">Message: </label>
        <input id="text" name="text" value="{{ old('text', $message->text) }}" required>
    
        <button type="submit" class="button">Actualizar Nota</button>
    </form> 
</body>
</html>