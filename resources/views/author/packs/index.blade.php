@extends('layouts.app')
@section('content')
    <div class=" bg-background-primary min-w-screen min-h-screen">
        <div class="w-full text-copy-secondary p-6 lg:px-12 lg:pt-12  flex justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="header">
                    Packs
                </div>
                <hr class="pb-6">

                <div class="bg-background-secondary p-4 mb-8">
                    <h1>
                        You are logged in as an {{ implode(', ', Auth::user()->roles()->get()->pluck('name')->toArray()) }}
                    </h1>
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <table class="table-auto text-copy-secondary w-3/4 py-6 pb-6">
                <thead >
                    <tr >
                        <th class="px-4 py-2">id</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Desc</th>
                        <th class="px-4 py-2">Author</th>
                        <th class="px-4 py-2">Tags</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packs as $pack)
                        <tr>
                            <td class="border px-4 py-2">{{ $pack->id }}</td>
                            <td class="border px-4 py-2">{{ $pack->name }}</td>
                            <td class="border px-4 py-2">{{ $pack->description }}</td>
                            <td class="border px-4 py-2">{{ $pack->author->name }}</td>

                            {{-- loop over all tags and seperate them with a comma --}}
                            <td class="border px-4 py-2">{{ implode(', ', $pack->tags()->get()->pluck('name')->toArray()) }}</td>

                            <td class="border px-4 py-2 ">
                                <div class="inline-flex">
                                    @can('edit-packs')
                                        <a href="{{ route('author.packs.edit', $pack) }}" class="mr-2">
                                            <button class="px-4 py-2 w-24 border rounded border-white hover:bg-background-accent1 bg-background-secondary shadow">Edit</button>
                                        </a>
                                    @endcan
                                    @can('delete-packs')
                                        <form method="POST" action="{{ route('author.packs.destroy', $pack) }}">
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
@endsection
