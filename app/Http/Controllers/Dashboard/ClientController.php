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
            ->filterColumn(
                'active',
                function ($q, $keyword) {
                    $formatted_active = strtolower(str_replace(['ã', 'Ã'], ['a', 'A'], $keyword));

                    $q->when($formatted_active == 'sim', function ($q) {
                        $q->where('active', 1);
                    })
                        ->when($formatted_active == 'nao', function ($q) {
                            $q->where('active', 0);
                        });
                }
            )
            ->editColumn(
                'active',
                function ($client) {
                    return $client->present()->getActive;
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

    /** Tela de edição */
    public function edit(int $id): View
    {
        $client = $this->client->findOrFail($id);

        return view('dashboard.client.edit', compact('client'));
    }

    /** Atualiza o registro */
    public function update(ClientRequest $request, int $id): RedirectResponse
    {
        $client = $this->client->findOrFail($id);

        $this->client_service->updateOrCreate($request->all(), $client->id);

        return redirect()
            ->route('client.edit', $id)
            ->with('message', 'Atualização realizada com sucesso.');
    }

    /** Tela de exclusão */
    public function confirmDelete(int $id): View
    {
        $client = $this->client->findOrFail($id);

        return view('dashboard.client.confirm-delete', compact('client'));
    }

    /** Remove o registro */
    public function delete(int $id): RedirectResponse
    {
        $client = $this->client->findOrFail($id);

        $this->client_service->delete($client);

        return redirect()
            ->route('client.index')
            ->with('message', 'Exclusão realizado com sucesso.');
    }
}
