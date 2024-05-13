
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Borang Pendaftaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary text-white">PENDAFTARAN ANGGOTA PERKHIDMATAN PENDIDIKAN</div>
                        <div class="card-body">
                            <h4 class="mb-4"><u>Sila isi semua maklumat dibawah</u></h4>

                            <form action="{{ route('anggota-perkhidmatan.store') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" value="" placeholder="Sila isi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">No Fail</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="new_file_no" name="new_file_no" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">No Fail Lain</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="other_file_no" name="other_file_no">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group row col-md-6">
                                        <label for="inputPassword" class="col-sm-4 col-form-label">NoKp</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nokp" name="nokp">
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-6">
                                        <label for="inputPassword" class="col-sm-4 col-form-label">NoKp Lama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="old_kp" name="old_kp">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Tarikh Lahir</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date">
                                            <input type="text" class="form-control" name="dob" id="datepicker" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Jawatan</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-control" aria-label="Default select example" id="position_category_id" name="position_category_id">
                                            <option selected>Sila pilih</option>

                                            @foreach($lookup as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Tarikh Buka Fail</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="file_date" name="file_date" value="{{ \Carbon\Carbon::now()->format('d/m/Y') }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">                                        
                                        <select class="form-select form-control" aria-label="Default select example" id="location" name="location">
                                            <option selected>Sila pilih lokasi</option>
                                            <option value="1">Sabah</option>
                                        </select>                                  
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 text-right">
                                        <button type="submit" class="btn btn-primary">Hantar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="card-footer text-muted">
                                <a href="{{ route("anggota-perkhidmatan.index") }}" type="button" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            // Initialize datepicker
            $('#datepicker').datepicker({
                format: 'dd-mm-yyyy', // Adjust date format as needed
                autoclose: true
            });
        });
    </script>
</x-app-layout>
