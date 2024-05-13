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
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NoKp</th>
                                        <th>No Fail</th>
                                        <th>No Fail Lain</th>
                                        <th>Tarikh Buka</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($app as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ strtoupper($value->name) }}</td>
                                            <td>{{ $value->nokp }}</td>
                                            <td>{{ strtoupper($value->new_file_no) }}</td>
                                            <td>{{ strtoupper($value->other_file_no) }}</td>
                                            <td>{{ $value->file_date }}</td>
                                            <td>
                                                <a class='btn btn-info btn-xs' href="{{ route('anggota-perkhidmatan.edit', $value->id) }}"><i class="fas fa-edit"></i> Kemaskini</a> 
                                                <a href="{{ route('anggota-perkhidmatan.destroy', $value->id) }}" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</x-app-layout>
