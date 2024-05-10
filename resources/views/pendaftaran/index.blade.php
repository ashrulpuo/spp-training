<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary text-white">SENARAI ANGGOTA PERKHIDMATAN PENDIDIKAN</div>
                        <div class="card-body">
                            <div class="mb-3 text-right">
                                <a href="{{ route('anggota-perkhidmatan.create') }}" class="btn btn-primary">Daftar</a>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Jawatan</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>Teacher</td>
                                        <td>
                                            <a class='btn btn-info btn-xs' href="#"><i class="fas fa-edit"></i> Kemaskini</a> 
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>Principal</td>
                                        <td>
                                            <a class='btn btn-info btn-xs' href="#"><i class="fas fa-edit"></i> Kemaskini</a> 
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</x-app-layout>
