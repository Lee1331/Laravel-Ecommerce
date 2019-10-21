@extends('layouts.app')

@section('content')
<div class="flex bg-background-primary w-full h-full">
    <div class="w-full h-full text-copy-secondary p-6 lg:p-12 flex justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="header">
                Users
            </div>
            <hr class="pb-6">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="bg-background-secondary p-4 mb-8">
                    <h1>
                        You are logged in as an {{ implode(', ', Auth::user()->roles()->get()->pluck('name')->toArray()) }}
                    </h1>
                </div>

                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">id</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Role(s)</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="border px-4 py-2">{{ $user->id }}</td>
                                <td class="border px-4 py-2">{{ $user->name }}</td>
                                <td class="border px-4 py-2">{{ $user->email }}</td>

                                {{-- loop over all roles and seperate them with a comma --}}
                                <td class="border px-4 py-2">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td class="border px-4 py-2 ">
                                    <div class="inline-flex">
                                        @can('edit-users')
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="mr-2">
                                                <button class="px-4 py-2 w-24 border rounded border-white hover:bg-background-accent1 bg-background-secondary shadow">Edit</button>
                                            </a>
                                        @endcan
                                        @can('delete-users')
                                            <form method="POST" action="{{ route('admin.users.destroy', $user) }}">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" class="px-4 py-2 w-24 border rounded border-white hover:bg-background-accent1 bg-transparent shadow">Delete</button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
