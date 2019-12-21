<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Incidents;

class IncidentsController extends Controller
{

    private $incident;
    public function __construct(Incidents $incident)
    {
        $this->incident = $incident;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->incident->with('type')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title'            => 'required|string',
                'description'      => 'required|string',
                'criticality'      => 'required|string',
                'type_incident_id' => 'required|numeric',
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $newIncident = $request->all();
        $this->incident->create($newIncident);
        return response()->json(['msg' => 'Incidente incluido com sucesso.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  Incidents $incident
     * @return \Illuminate\Http\Response
     */
    public function show(Incidents $incident)
    {
        $result = $incident->where('id', '=', $incident->id)->with('type')->first();
        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Incidents $incident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidents $incident)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title'            => 'required|string',
                'description'      => 'required|string',
                'criticality'      => 'required|string',
                'type_incident_id' => 'required|numeric',
                'status'           => 'required|string',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $changedPost = $request->all();
        $incident->update($changedPost);
        return response()->json(['msg' => 'Incidente alterado com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Incidents $incident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidents $incident)
    {
        $incident->delete();
        return response()->json(['msg' => 'Incidente deletado com sucesso.']);
    }
}
