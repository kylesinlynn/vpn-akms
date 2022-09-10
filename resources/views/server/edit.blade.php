@extends('layouts.app')
@section('content')
    @foreach($errors->all() as $error)
        @if($error)
            <div class="bg-white">
                <div class="mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-4xl">
                        <div class="rounded-md bg-red-50 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-400" x-description="Heroicon name: solid/x-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <div class="ml-3">
                                    <div class="mt-2 text-sm text-red-700">
                                        {{ $error }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    <div class="my-12 flex bg-white">
        <div class="flex flex-1 flex-col justify-center px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div class="mt-6">
                    <form action="{{ route('server.update', $server->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PATCH')

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Server Name</label>

                            <div class="mt-1">
                                <input id="name" name="name" type="text" value="{{ $server->name }}" autocomplete="off" required="" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" />
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label for="key" class="block text-sm font-medium text-gray-700">Server SSH Key</label>

                            <div class="mt-1">
                                <input id="key" name="key" type="text" value="{{ $server->key }}" required="" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" />
                            </div>
                        </div>

                        <div class="mt-1 sm:col-span-2 sm:mt-0">
                            <select id="status" name="status" autocomplete="status" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                <option value="1">Active</option>
                                <option value="0" @if($server->status == 0) selected @endif>Close</option>
                            </select>
                        </div>

                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update Server</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
