<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Server;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum', ['only' => ['store', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['servers' => Server::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required',
            'hosting' => 'required',
            'ip' => 'required|ip',
            'port' => 'required|min:2|max:5',
            'status' => 'required',
        ]);

        $server = Server::create($request->all());

        return response()->json([
            'server' => $server,
            'message' => 'Server was created'
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Server $server)
    {
        return $server;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Server $server)
    {
        $request->validate([
            'location' => 'required',
            'hosting' => 'required',
            'ip' => 'required|ip',
            'port' => 'required|min:2|max:5',
            'status' => 'required',
        ]);

        $server->update($request->all());

        return response()->json([
            'message' => 'Server was updated'
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Server $server)
    {
        $server->delete();
        return response()->noContent();
    }
}
