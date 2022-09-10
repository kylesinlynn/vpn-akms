@extends('layouts.app')
@section('content')
    <div class="bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('server.create') }}" class="my-3 inline-flex items-center rounded border border-transparent bg-indigo-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add New Server</a>
        </div>

        <div class="mb-5 flex select-none flex-col items-center">
            @foreach($servers as $server)
                <div class="my-2 w-11/12 overflow-hidden rounded-lg border-2 border-green-500 bg-white p-3 shadow" v-for="vpn in vpnList" key="vpn.id">
                    <div class="grid grid-cols-1 divide-y divide-green-500">
                        <h3 class="select-none py-2 text-lg font-medium leading-6 text-gray-700">
                            {{ $server->name }}
                            Server
                        </h3>

                        <div class="py-2 font-semibold text-green-700">
                            @if($server->status == 1)
                                Active
                            @else
                                <span class="text-red-700">Closed</span>
                            @endif
                        </div>

                        <div class="py-2 font-semibold text-green-700">
                            <form action="{{ route('server.destroy', $server->id) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="my-3 inline-flex items-center rounded border border-transparent bg-red-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete</button>
                            </form>
                        </div>

                        <div class="py-2 font-semibold text-green-700">
                            <a href="{{ route('server.edit', $server->id) }}" class="my-3 inline-flex items-center rounded border border-transparent bg-purple-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">Edit</a>
                        </div>
                    </div>

                    <div class="my-3 select-all overflow-x-auto rounded-xl bg-green-50 p-3 text-gray-800">
                        {{ $server->key }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
