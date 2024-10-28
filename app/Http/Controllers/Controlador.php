<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class Controlador extends Controller
{

    public function showMessages()
    {
        $messages = Message::all();

        return view('messages', compact('messages'));
    }

    public function editMessage($id)
    {
        $message = Message::findOrFail($id); 
        return view('editar', compact('message')); 
    }

    public function updateMessage(Request $request, $id)
    {
        $validated = $request->validate([
            'text' => 'required|string|max:300|not_regex:/^\d+$/',
            'subrayado',
            'negrita',
        ]);

        $message = Message::findOrFail($id);
        $message->update($validated);

        return redirect()->route('messages')->with('success', 'Message actualizado correctamente.');
    }
}