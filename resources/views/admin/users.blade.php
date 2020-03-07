@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.admin')
@endsection

@section('content')
    <section class="news">
        <div class="container">
            @forelse($users as $user)
                @if(Auth::id() !== $user->id)
                <div class="card" id="user-{{ $user->id }}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <p>{{ $user->is_admin ? 'Администратор' : 'Пользователь' }}</p>
                            </div>
                            <div class="col-md-3">
                                <p>Имя: {{ $user->name}}</p>
                            </div>
                            <div class="col-md-3">
                                <p>email: {{ $user->email}}</p>
                            </div>
                            <div class="col-md-3">
                                <p>{{ $user->created_at}}</p>
                            </div>
                        </div>
                        <a href="{{ route('admin.users.show', $user->id) }}">
                            <button type="button" class="btn btn-warning">Изменить</button>
                        </a>
                        <a href="{{ route('admin.users.edit', $user->id) }}">
                            <button type="button" class="btn {{ $user->is_admin ? 'btn-danger' : 'btn-success' }}">
                                {{ $user->is_admin ? 'Убарть из администраторов' : 'Сделать администратором' }}
                            </button>
                        </a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="post"
                              class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <input
                                type="submit"
                                class="btn btn-danger delete-btn"
                                value="Удалить"
                            >
                        </form>
                    </div>
                </div>
                @endif
            @empty
                <h1>Нет пользователей</h1>
            @endforelse
        </div>
    </section>
@endsection
