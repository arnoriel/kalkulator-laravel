@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <br>
    <center>
            <form action="/kalkulator" method="POST">
                @csrf
                <div class="card bg-primary mb-3" style="width: 18rem">
                    <div class="card-header">
                    <h5 class="text-white">KALKULATOR</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <input type="number" name="first" class="form-control" placeholder="Pilih Angka">
                        </div>
                        <br>
                        <div>
                            <input type="number" name="second" class="form-control" placeholder="Pilih Angka">
                        </div>
                        <br>
                        <div>
                            <select name="operasi" class="form-control">
                                <option selected>Operasi</option>
                                <option value="tambah"> Tambah (+) </option>
                                <option value="kurang"> Kurang (-) </option>
                                <option value="bagi"> Bagi (:) </option>
                                <option value="kali"> Kali (x) </option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-danger" style="width: 16rem">Cari Hasil</button>
                        </div>
                        <br>
                        @if (isset($hasil))
                        <div class="card">
                            <div class="card-body">
                            Hasilnya <b>{{$hasil}}</b>
                            </div>
                        </div>
                        @endif
                    </div>
                  </div>
            </div>
            </form>
        </div>
    </center>
</div>
@endsection
