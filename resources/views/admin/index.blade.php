@extends('layouts.app')
@section('content')
<div class="bg-gray-100">
    <div class="container mx-auto  px-4 sm:px-6 lg:px-8">
        <!-- Create New Server Page -->
        <a href="{{route('server.create')}}" class="inline-flex items-center my-3 px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Add New Server
        </a>

    </div>

    <!-- Servers List -->

    <div class="flex flex-col items-center mb-5 select-none">
        <!-- VPN Data -->
        @foreach($servers as $server)
        <div class="bg-white overflow-hidden shadow rounded-lg my-2 w-11/12 p-3 border-2 border-green-500"
            v-for="vpn in vpnList"
            key="vpn.id"
            >
            <div class="grid grid-cols-1 divide-y divide-green-500">
                <h3 class="text-lg leading-6 font-medium text-gray-700 py-2 select-none">
                 {{$server->name}} Server
                </h3>

                <div class="py-2 text-green-700 font-semibold">
                    @if($server->status == 1)
                    Active
                    @else
                    <span class="text-red-700">
                        Closed
                    </span>
                    @endif
                </div>

                <div class="py-2 text-green-700 font-semibold">
                    <form action="{{ route('server.destroy', $server->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="inline-flex items-center my-3 px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Delete
                        </button>
                    </form>
                </div>
                
                <div class="py-2 text-green-700 font-semibold">
                        <a href="{{route('server.edit',$server->id)}}"
                    class="inline-flex items-center my-3 px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            Edit
                        </a>
                    
                </div>



            </div>
            <div class="my-3 overflow-x-auto text-gray-800 bg-green-50 p-3 rounded-xl select-all">
                {{$server->key}}
            </div>
        </div>
        @endforeach
    </div>


</div>

@endsection