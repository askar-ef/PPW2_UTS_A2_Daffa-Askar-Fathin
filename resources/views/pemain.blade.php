@extends('layouts.navbar')

@section('container')

<body>
    <div class="container mx-auto p-4">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-indigo-200">No</th>
                    <th class="px-4 py-2 bg-indigo-200">Nama</th>
                    <th class="px-4 py-2 bg-indigo-200">No Punggung</th>
                    <th class="px-4 py-2 bg-indigo-200">Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_pemain as $pemain)
                <tr>
                    <td class="px-4 py-2 border border-indigo-300">{{ ++$no }}</td>
                    <td class="px-4 py-2 border border-indigo-300">{{ $pemain->nama_pemain }}</td>
                    <td class="px-4 py-2 border border-indigo-300">{{ $pemain->no_punggung }}</td>
                    <td class="px-4 py-2 border border-indigo-300">{{ $pemain->posisi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('layouts.footer')
</body>
    


@endsection