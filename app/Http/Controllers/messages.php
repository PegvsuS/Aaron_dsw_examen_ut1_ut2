<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class messages extends Controller
{
            public function listarMensaje() 
            {
                $messages = Message::all();
                return view('messages', compact('messages'));
            }
            


            public function mostrarEdicion($id) 
            {
                $message = Message::findOrFail($id); 
                return view('editar', compact('message'));
            }
            
            public function actualizarMessage(Request $request, $id) // Método para actualizar la duda
            {
                $request->validate([ // Validación de los campos
                    'message' => ['required', 'min:2', 'max:300'],
                    'subrayado' => 'required',
                    'negrita' => 'required',
                    
                ]);
            
                $message = Message::findOrFail($id); // Encuentra la duda por ID
                $message->update([ // Actualiza la duda con los nuevos datos
                    'text' => $request->input('message'),
                    'subrayado' => $request->input('subrayado'),
                    'negrita' => $request->input('negrita'),
                    
                ]);
            
                return redirect()->route('messages')->with('success', 'Duda actualizada correctamente.'); // Redirige a la lista de dudas
            }
            
            
                }
