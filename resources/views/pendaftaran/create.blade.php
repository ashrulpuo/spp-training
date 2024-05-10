
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

                            <form>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
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

</x-app-layout>
