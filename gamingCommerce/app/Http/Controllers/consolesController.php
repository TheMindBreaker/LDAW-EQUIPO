<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateconsolesRequest;
use App\Http\Requests\UpdateconsolesRequest;
use App\Repositories\consolesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class consolesController extends AppBaseController
{
    /** @var  consolesRepository */
    private $consolesRepository;

    public function __construct(consolesRepository $consolesRepo)
    {
        $this->consolesRepository = $consolesRepo;
    }

    /**
     * Display a listing of the consoles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $consoles = $this->consolesRepository->all();

        return view('consoles.index')
            ->with('consoles', $consoles);
    }

    /**
     * Show the form for creating a new consoles.
     *
     * @return Response
     */
    public function create()
    {
        return view('consoles.create');
    }

    /**
     * Store a newly created consoles in storage.
     *
     * @param CreateconsolesRequest $request
     *
     * @return Response
     */
    public function store(CreateconsolesRequest $request)
    {
        $input = $request->all();

        $consoles = $this->consolesRepository->create($input);

        Flash::success('Consoles saved successfully.');

        return redirect(route('consoles.index'));
    }

    /**
     * Display the specified consoles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consoles = $this->consolesRepository->find($id);

        if (empty($consoles)) {
            Flash::error('Consoles not found');

            return redirect(route('consoles.index'));
        }

        return view('consoles.show')->with('consoles', $consoles);
    }

    /**
     * Show the form for editing the specified consoles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $consoles = $this->consolesRepository->find($id);

        if (empty($consoles)) {
            Flash::error('Consoles not found');

            return redirect(route('consoles.index'));
        }

        return view('consoles.edit')->with('consoles', $consoles);
    }

    /**
     * Update the specified consoles in storage.
     *
     * @param int $id
     * @param UpdateconsolesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateconsolesRequest $request)
    {
        $consoles = $this->consolesRepository->find($id);

        if (empty($consoles)) {
            Flash::error('Consoles not found');

            return redirect(route('consoles.index'));
        }

        $consoles = $this->consolesRepository->update($request->all(), $id);

        Flash::success('Consoles updated successfully.');

        return redirect(route('consoles.index'));
    }

    /**
     * Remove the specified consoles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consoles = $this->consolesRepository->find($id);

        if (empty($consoles)) {
            Flash::error('Consoles not found');

            return redirect(route('consoles.index'));
        }

        $this->consolesRepository->delete($id);

        Flash::success('Consoles deleted successfully.');

        return redirect(route('consoles.index'));
    }
}
