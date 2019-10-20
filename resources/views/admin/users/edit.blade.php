@extends('layouts.app')

@section('content')
<div class="flex bg-background-primary w-screen h-screen">
    <div class="w-full h-full text-copy-secondary p-6 lg:p-12 flex justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="header">
                Edit User: {{ $user->name }}
            </div>
                <hr class="pb-6">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.update', $user) }}">
                        {{ method_field('PUT') }}
                        @csrf


                        <div class="form-group row pb-6 ">
                            <label for="roles" class="text-xl sm:text-2xl md:text-2xl">{{ __('Role') }}</label>
                            <div class="flex content-center justify-between">
                                @foreach ($roles as $role)
                                <div>
                                    <label class="text-xl sm:text-2xl md:text-2xl mr-2">{{ $role->name }}</label>
                                    <input type="checkbox" class="py-1 px-2 mr-4 leading-tight" name="roles[]" value="{{ $role->id }}" placeholder="************">
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="px-4 py-2 w-24 border rounded border-white hover:bg-background-accent1 bg-transparent shadow">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
