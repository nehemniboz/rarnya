<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        Judul buku:
        <input type="text" name="title" value="{{ old('title') }}" />

        <br>

        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Penulis:
        <select name="penulis_id">
            @foreach ($penulis as $penulis)
                <option value="{{ $penulis->id }}">{{ $penulis->name }}</option>
            @endforeach
        </select>

        <br>

        @error('penulis')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Deskripsi:
        <textarea name="description">{{ old('description') }}</textarea>

        <br>

        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>