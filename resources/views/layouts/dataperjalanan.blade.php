@extends('layouts.master')

@section('judul')
  Data Perjalanan &mdash; Peduli Diri
@endsection

@section('title', 'Data Perjalanan')

@section('content')
@php
  $no=1
@endphp
<div class="card-body">
    <div class="section-title mt-0">Data Perjalanan</div>
    <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">
                <div class="row justify-content-around">
                    <div class="col align-self-center">Tanggal</div>
                    <form action="/order" method="GET">
                        @csrf
                        <button class="col btn" name="tanggalDesc" value="Desc" href="/order" title="Terbaru"><i class="fas fa-angle-up"></i></button>
                        <button class="col btn" name="tanggalAsc" value="Asc" href="/order" title="Terlama"><i class="fas fa-angle-down"></i></button>
                    </form>
                </div>
            </th>
            <th scope="col">
              <div class="row justify-content-around">
                  <div class="col align-self-center">Jam</div>
                  <form action="/order" method="GET">
                      @csrf
                      <button class="col btn" name="jamDesc" value="Desc" href="/order" title="PM"><i class="fas fa-angle-up"></i></button>
                      <button class="col btn" name="jamAsc" value="Asc" href="/order" title="AM"><i class="fas fa-angle-down"></i></button>
                  </form>
              </div>
          </th>
            <th scope="col">Lokasi</th>
            <th scope="col">
              <div class="row justify-content-around">
                  <div class="col align-self-center">Suhu</div>
                  <form action="/order" method="GET">
                      @csrf
                      <button class="col btn" name="suhuDesc" value="Desc" href="/order" title="Tertinggi"><i class="fas fa-angle-up"></i></button>
                      <button class="col btn" name="suhuAsc" value="Asc" href="/order" title="Terendah"><i class="fas fa-angle-down"></i></button>
                  </form>
              </div>
          </th>
                <th scope="col">Delete</th>
                  <th scope="col">
                    <div class="row justify-content-around">
                    </div>
                    </th>
            </tr>
        </thead>
            @foreach ($data as $item)    
            <tr>
              <th scope="row">{{ ($data->currentPage()-1) * $data->perPage() + $loop->iteration }}</th>
              <td>{{ $item->tanggal }}</td>
              <td>{{ $item->jam }}</td>
              <td>{{ $item->lokasi }}</td>
              <td>{{ $item->suhu }}</td>
              {{-- <td>
                <form method="POST" action="/deletePerjalanan" class="needs-validation">
                  {{ csrf_field() }}
                  <button name="delete" id="delete" class="btn btn-danger align-center" type="submit" value="{{ $item->id }}" style="color:#fff; :75px; height:35px;">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </form>
              </td> --}}
              <td>
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#delete-modal-{{ $item->id }}">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
          </td>
          <div class="modal mt-5" id="delete-modal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus data?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Catatan perjalanan akan dihapus selamanya. </div>
                <div class="modal-footer">
                  <form method="POST" action="/deletePerjalanan" class="needs-validation">
                    {{ csrf_field() }}
                    <button class="btn btn-danger" type="button" data-dismiss="modal">
                      Tidak
                    </button>
                    <button name="delete" id="delete" class="btn btn-success align-center" type="submit"  value="{{ $item->id }}">
                      Ya
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
            </tr>
            @endforeach
        </table>
        {{ $data->links() }}
      </div>
    </div>
@endsection