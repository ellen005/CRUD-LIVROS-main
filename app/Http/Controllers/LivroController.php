<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Li;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $livros = Livro::where('user_id', $user->id)->paginate(2); // Aqui, 2 é o número de itens por página
        return view('livros.index', compact('livros'));
    }


    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
       return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'autor' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'nullable|string|max:255',
            'edicao' => 'nullable|string|max:255',
            'editora' => 'nullable|string|max:255',
            'anoPublicado' => 'nullable|string|max:255',
        ]);

        $data['user_id'] = Auth::id();

        Livro::create($data);

        return redirect()->route('livros.index')->with('success', 'Livro criado com sucesso!');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);

        $data = $request->validate([
            'autor' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'nullable|string|max:255',
            'edicao' => 'nullable|string|max:255',
            'editora' => 'nullable|string|max:255',
            'anoPublicado' => 'nullable|string|max:255',
        ]);

        $data['user_id'] = Auth::id();
        $livro->update($data);

        return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);

        if ($livro->user_id !== Auth::id()) {
            return redirect()->route('livros.index')->with('error', 'Você não tem permissão para excluir este livro.');
        }
        $livro->delete();
        return redirect()->route('livros.index')->with('success', 'Livro excluído com sucesso!');
    }
}
