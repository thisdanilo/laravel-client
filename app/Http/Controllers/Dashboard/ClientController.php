<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Services\ClientServiceInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Yajra\DataTables\DataTables;

class ClientController extends Controller
{
    public function __construct(
        protected Client $client,
        protected ClientServiceInterface $client_service,
    ) {
    }

    /** Tela inicial */
    public function index(): View
    {
        return view('dashboard.client.index');
    }

    /** Datatable */
    public function dataTable()
    {
        $clients = $this->client->query();

        return DataTables::of($clients)
            ->editColumn(
                'active',
                function ($client) {
                    return 'sim';
                }
            )
            ->addColumn('action', function ($model) {
                return view('dashboard.client.partials._action', compact('model'))->render();
            })
            ->rawColumns([
                'active',
                'action',
            ])
            ->make(true);
    }

    /** Tela de visualização */
    public function show(int $id): View
    {
        $client = $this->client->findOrFail($id);

        return view('dashboard.client.show', compact('client'));
    }

    /** Tela de cadastro */
    public function create(): View
    {
        return view('dashboard.client.create');
    }

    /** Cria o registro */
    public function store(ClientRequest $request): RedirectResponse
    {
        $this->client_service->updateOrCreate($request->all());

        return redirect()
            ->route('client.index')
            ->with('message', 'Cadastro realizado com sucesso.');
    }
}
