@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('experience.index') }}" class="btn btn-secondary">
            << kembali</a>
    </div>
    <form action={{ route('experience.store') }} method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Position</label>
            <input
                type="text"
                class="form-control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Position" value="{{ Session::get('judul') }}"
            />
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Company's Name</label>
            <input
                type="text"
                class="form-control-sm"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Company's Name" value="{{ Session::get('info1') }}"
            />
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Start Date</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm/yyyy" value="{{ Session::get('tgl_mulai') }}"></div>
                <div class="col-auto">End Date</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm/yyyy" value="{{ Session::get('tgl_akhir') }}"></div>
                </div>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" name="isi">{{ Session::get('isi') }}</textarea>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
    @endsection

