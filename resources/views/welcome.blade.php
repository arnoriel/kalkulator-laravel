@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <br>
            <form action="/kalkulator" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                     <h5>Kalkulator</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-md-3">
                            <input type="number" name="first" class="form-control">
                        </div>
                        <br>
                        <div class="col-md-3">
                            <input type="number" name="second" class="form-control">
                        </div>
                        <br>
                        <div class="col-md-3">
                            <select name="operasi" class="form-control">
                                <option selected>Operasi</option>
                                <option value="tambah"> Tambah (+) </option>
                                <option value="kurang"> Kurang (-) </option>
                                <option value="bagi"> Bagi (:) </option>
                                <option value="kali"> Kali (x) </option>
                            </select>
                        </div>
                        <br>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-info">Cari Hasil</button>
                        </div>
                        <br>
                        @if (isset($hasil))
                        <div>
                            Hasilnya <b>{{$hasil}}</b>
                        </div>
                        @endif
                    </div>
                  </div>
            </div>
            </form>
        </div>
</div>
@endsection
