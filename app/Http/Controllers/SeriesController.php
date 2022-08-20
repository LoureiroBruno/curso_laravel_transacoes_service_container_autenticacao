<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Autenticador;
use App\Http\Requests\SeriesFormRequestCreate;
use App\Http\Requests\SeriesFormRequestUpdate;
use App\Models\Series;
use App\Repositories\EloquentSeriesRepository;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Undocumented function
     *
     * @param SeriesRepository $repository
     */
    public function __construct(private EloquentSeriesRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware(Autenticador::class)->except('index');
    }

    /**
     * list series function
     *
     * @return string
     */
    public function index()
    {
        /** configurado na model Serie o metodo booted orderBy */
        // $series = Serie::orderBy('nome', 'asc')->get();

        /** recebendo do model Serie ordenado por nome asc */
        $series = Series::all();

        return view('series.index')->with('series', $series);
    }

    /**
     * create series function
     *
     * @return void
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * store series function
     *
     * @param Request $request
     * @return void
     */
    public function store(SeriesFormRequestCreate $request)
    {
        /**injeção de dependência - retornar o objeto SeriesRepository criado */
        $serie = $this->repository->add($request);

        return to_route('series.index')->with("success", "Cadastrado a série: '{$serie->nome}' com sucesso!");
    }

    public function destroy(Series $series)
    {
        if ($series == null) {
            return to_route('series.index')->with("danger", "Não foi possível realizar exlusão de cadastro");
        }

        $series->delete();

        return to_route('series.index')->with("success", "Excluído o Registro #{$series->id} | nome: '{$series->nome}' com Sucesso!");
    }


    public function edit(Series $series)
    {
        return view('series.edit')->with(
            [
                'series' => $series
            ]
        );
    }


    public function update(SeriesFormRequestUpdate $request, Series $series)
    {
        if ($request->nome == null) {
            return to_route('series.index')->with("danger", "Não foi possível realizar atualização de cadastro");
        }

        $series->fill($request->all());
        $series->save();
        return to_route('series.index')->with("success", "Atualizado a série: '{$series->nome}' com sucesso!");
    }
}
