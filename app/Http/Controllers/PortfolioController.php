<?php

// app/Http/Controllers/PortfolioController.php

namespace App\Http\Controllers;
use App\Models\SobreMim;
use App\Models\Projeto;
use App\Models\ExperienciaProfissional;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    public function index()
    {
// Lógica para carregar os dados do portfólio
$projetos = Projeto::all();
$experienciasProfissionais = ExperienciaProfissional::all();

// Recuperar informações pessoais do último registro inserido
$sobreMim = SobreMim::latest()->first();

// Verificar se $sobreMim não é nulo antes de acessar seus atributos
$nomeCompleto = $sobreMim ? $sobreMim->nome . ' ' . $sobreMim->sobrenome : '';
$shortDescription = $sobreMim ? $sobreMim->short_description : '';
$aboutYourself = $sobreMim ? $sobreMim->about_yourself : '';
$additionalInfo = $sobreMim ? $sobreMim->additional_info : '';

// Redes Sociais (exemplo)
$redesSociais = [
    (object)['platform' => 'Facebook', 'url' => 'https://www.facebook.com'],
    (object)['platform' => 'Twitter', 'url' => 'https://twitter.com'],
    // Adicione outros objetos conforme necessário
];

// Definir variáveis para redes sociais específicas
$linkedin = $sobreMim ? $sobreMim->linkedin : '';
$github = $sobreMim ? $sobreMim->github : '';
$youtube = $sobreMim ? $sobreMim->youtube : '';

// Definir variáveis para projetos específicos
$projectImage1 = 'URL_DA_IMAGEM'; // Substitua 'URL_DA_IMAGEM' pela URL real da imagem
$projectLink1 = 'URL_DO_LINK'; // Substitua 'URL_DO_LINK' pela URL real do projeto
$projectDescription1 = 'DESCRIÇÃO_DO_PROJETO'; // Substitua 'DESCRIÇÃO_DO_PROJETO' pela descrição real do projeto

// Remova as variáveis que não são utilizadas na visão

return view('portfolio.index', compact('projetos', 'experienciasProfissionais', 'nomeCompleto', 'shortDescription', 'aboutYourself', 'additionalInfo', 'redesSociais', 'linkedin', 'github', 'youtube', 'projectImage1', 'projectLink1', 'projectDescription1'));
    }
    public function generatePortfolio(Request $request)
    {
        // Validate the form data
        $request->validate([
            'nome' => 'required|string',
            'sobrenome' => 'required|string',
            'email' => 'required|email',
            'projeto' => 'required|string',
            'cargo' => 'required|string',
            // Adicione outras validações conforme necessário
        ]);
    
        // Criar um novo registro de informações pessoais no banco de dados usando o Eloquent
        SobreMim::create([
            'nome' => $request->input('nome'),
            'sobrenome' => $request->input('sobrenome'),
            'email' => $request->input('email'),
            'content' => '', // Adicione conteúdo conforme necessário
        ]);

    // Create a new project in the database using Eloquent
    $projeto = new Projeto();
    $projeto->nome = $request->input('projeto');
    $projeto->descricao_projeto = $request->input('descricao_projeto');
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
