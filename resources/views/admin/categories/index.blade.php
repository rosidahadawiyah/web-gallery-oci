@extends('admin.layout')
@section('content')
<div class="container">
<div class="card">
    <div class="card-body">
        <a href="/categories/create" class="btn btn-primary">+ Kategori</a>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>

                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->title }}</td>
                    <td class="d-flex">
                        <a href="/categories/{{ $category->id }}/edit" class="btn btn-warning me-2">
                            <i data-feather="edit"></i>Edit
                        </a>
                        <form action="/categories/{{ $category->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">
                                <i data-feather="trash-2"></i>Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
