@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.admin')
@endsection

@section('content')
    <section class="news">
        <div class="container">
            <div class="row btn-wrapper">
                <a href="{{ route('admin.parser') }}" class="btn btn-warning w-100">
                        Заполнить базу новостями
                </a>
            </div>
            <div class="row btn-wrapper">
                <button class="btn btn-success w-100" id="formDisplay">
                    Добавить ресурс
                </button>
                <div class="card w-100 resource-form {{ $errors->has('link') ?: 'inactive' }}" id="addForm">
                    <div class="card-header">Добавить ресурс</div>
                    <div class="card-body">
                        <form enctype="multipart/form-data"
                              action="{{ route('admin.resources.store')}}"
                              method="post">
                            @csrf
                            @method('post')
                            <div class="form-group row">
                                <label for="resourceLink" class="col-md-4 col-form-label text-md-right">
                                    Ссылка на ресурс </label>
                                <div class="col-md-6">
                                    @if($errors->has('link'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            @foreach($errors->get('link') as $error)
                                                {{ $error }}
                                            @endforeach
                                            <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <input
                                        type="text"
                                        id="resourceLink"
                                        class="form-control"
                                        name="link"
                                        value="{{old('link') ?? ''}}"
                                    >
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Добавить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @forelse($resources as $resource)
                <div class="card" id="resource{{$resource->id}}">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <p>{{$resource->link}}</p>
                            <form action="{{ route('admin.resources.destroy', $resource->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit"
                                       class="btn btn-danger delete-btn"
                                       data-id="{{$resource->id}}"
                                       value="Удалить"
                                >
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <h1>Нет ресурсов</h1>
            @endforelse
        </div>
        <div class="row justify-content-center btn-wrapper">
            {{ $resources->links() }}
        </div>
    </section>
    <script>
        window.onload = () => {
            // document.querySelector('.news').addEventListener('click', event => {
            //     if (!event.target.classList.contains('delete-btn')) {
            //         return;
            //     }
            //     const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            //     const id = event.target.dataset.id;
            //     (async () => {
            //         const response = await fetch(`/api/resources/${id}/destroy`, {
            //             headers: {
            //                 'X-CSRF-TOKEN': csrf,
            //                 'Content-type': 'application/json'
            //             },
            //             method: 'delete',
            //             body: JSON.stringify({
            //                 id
            //             })
            //         });
            //         console.log(response);
            //         const data = await response.json();
            //         if (data) {
            //             console.log(data);
            //         }
            //     })();
            // });
            document.getElementById('formDisplay').addEventListener('click', () => {
                const form = document.getElementById('addForm');
                form.classList.toggle('inactive');
            })
        }
    </script>
@endsection

