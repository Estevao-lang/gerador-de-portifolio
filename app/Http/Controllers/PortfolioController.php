<?php

// app/Http/Controllers/PortfolioController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\ExperienciaProfissional;
use App\Models\SobreMim;
use App\Models\RedesSociais;

class PortfolioController extends Controller
{
    public function index()
    {
        // Lógica para carregar os dados do portfólio
        // ...

        return view('portfolio.index', compact('projetos', 'experienciasProfissionais', 'sobreMim', 'redesSociais'));
    }

 public function generatePortfolio(Request $request)
 {
    // Validate the form data
    $request->validate([
        'projeto' => 'required|string',
        'cargo' => 'required|string',
        // Add other validations as needed
    ]);

    // Create a new project in the database using Eloquent
    $projeto = new Projeto();
    $projeto->nome = $request->input('projeto');
    $projeto->descricao = $request->input('descricao_projeto');
    // Add other fields as needed
    $projeto->save();

    // Create a new professional experience in the database using Eloquent
    $experienciaProfissional = new ExperienciaProfissional();
    $experienciaProfissional->cargo = $request->input('cargo');
    $experienciaProfissional->empresa = $request->input('empresa');
    $experienciaProfissional->descricao = $request->input('descricao');
    // Add other fields as needed
    $experienciaProfissional->save();

    // Redirect to the portfolio page or another appropriate page
    return redirect()->route('portfolio.index');
}


}
