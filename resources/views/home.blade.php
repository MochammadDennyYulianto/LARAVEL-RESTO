@extends('template.main')
@section('cont')

<div>
    <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
        @error('category')
            <p> {{ $message }} </p>
        @enderror
        <input class="border @error('category') 
                border-merah text-merah
        @enderror" type="text" name="category">

        <input type="file" name="image">
        <input type="submit" name="btn" value="Simpan">
    </form>
</div>

<h1 class="text-merah font-bold text-3xl">Home</h1> 

@foreach ($categories as $isi)
<li> {{ $isi->category }} -- <a href="/store/{{ $isi->id }}">Hapus</a> </li>
@endforeach
@endsection