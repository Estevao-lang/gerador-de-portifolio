<?php
namespace App\Http\Controllers;

use App\Models\SobreMim;
use App\Models\Projeto;
use App\Models\ExperienciaProfissional;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projetos = Projeto::all();
        $experienciasProfissionais = ExperienciaProfissional::all();

        // Utilizar firstOrFail() para garantir um modelo válido ou lançar exceção
        $sobreMim = SobreMim::latest()->firstOrFail();

        $nomeCompleto = $sobreMim->nome . ' ' . $sobreMim->sobrenome;
        $shortDescription = $sobreMim->short_description;
        $aboutYourself = $sobreMim->about_yourself;
        $additionalInfo = $sobreMim->additional_info;

        $redesSociais = [
            (object)['platform' => 'Facebook', 'url' => 'https://www.facebook.com'],
            (object)['platform' => 'Twitter', 'url' => 'https://twitter.com'],
            // Adicione outros objetos conforme necessário
        ];

        $linkedin = $sobreMim->linkedin;
        $github = $sobreMim->github;
        $youtube = $sobreMim->youtube;

        $projectImage1 = 'URL_DA_IMAGEM';
        $projectLink1 = 'URL_DO_LINK';
        $projectDescription1 = 'DESCRIÇÃO_DO_PROJETO';

        return view('portfolio.index', compact(
            'projetos',
            'experienciasProfissionais',
            'nomeCompleto',
            'shortDescription',
            'aboutYourself',
            'additionalInfo',
            'redesSociais',
            'linkedin',
            'github',
            'youtube',
            'projectImage1',
            'projectLink1',
            'projectDescription1'
        ));
    }

    public function generatePortfolio(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'sobrenome' => 'required|string',
            'email' => 'required|email',
            'projeto' => 'required|string',
            'cargo' => 'required|string',
            // Adicione outras validações conforme necessário
        ]);
    
        // Atribuir as descrições adicionais corretamente
        $sobreMim = SobreMim::create([
            'nome' => $request->input('nome'),
            'sobrenome' => $request->input('sobrenome'),
            'email' => $request->input('email'),
            'short_description' => $request->input('shortDescription'),
            'about_yourself' => $request->input('aboutYourself'),
            'additional_info' => $request->input('additionalInfo'),
        ]);
    
        // Resto do código para criar projetos, experiências profissionais, etc.
    
        // Redirecionar para a página de portfólio ou outra página apropriada
        return redirect()->route('portfolio.index', compact('sobreMim'));
    }
}    