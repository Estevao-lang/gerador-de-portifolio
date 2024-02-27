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
        // Lógica para processar o formulário e gerar o portfólio
        // ...

        // Redirecione de volta à página inicial ou para onde desejar
        return redirect('/');
    }
}
