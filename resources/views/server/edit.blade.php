@extends('layouts.app')
@section('content')
    @foreach($errors->all() as $error)
    @if($error)
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">

                <div class="rounded-md bg-red-50 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" x-description="Heroicon name: solid/x-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <div class="mt-2 text-sm text-red-700">

                                {{$error}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
    @endforeach
  <div class="my-12 bg-white flex">
    <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
      <div class="mx-auto w-full max-w-sm lg:w-96">
          <div class="mt-6">
            <form action="{{route('server.update',$server->id)}}" method="POST" class="space-y-6">
                @csrf
                @method('PATCH')
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700">
                  Server Name
                </label>
                <div class="mt-1">
                  <input id="name" name="name" type="text" value="{{$server->name}}" autocomplete="off" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="space-y-1">
                <label for="key" class="block text-sm font-medium text-gray-700">
                  Server SSH Key
                </label>
                <div class="mt-1">
                  <input id="key" name="key" type="text" value="{{$server->key}}"  required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <select id="status" name="status" autocomplete="status" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                <option value="1">Active</option>
                <option value="0"
                @if($server->status == 0)
                selected
                @endif
                >Close</option>
              </select>
            </div>


              <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Update Server
                </button>
              </div>
            </form>
          </div>
        
      </div>
    </div>
  </div>

@endsection