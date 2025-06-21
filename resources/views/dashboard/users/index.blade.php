<x-layout>
    <x-slot name="page_content">
        <div class="dashboard-body">
            <table id="studentTable" class="table table-striped">
                <thead>
                    <tr>
                        <th class="fixed-width"></th>
                        <th class="h6 text-gray-300">Nama Pengguna</th>
                        <th class="h6 text-gray-300" style="text-align: center;">Email</th>
                        <th class="h6 text-gray-300" style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="fixed-width"></td>
                            <td style="text-align: center; vertical-align: middle;">
                                <div class="flex-align gap-8">
                                    <img src="{{ asset('admin/images/6.svg')}}" alt="" class="w-40 h-40 rounded-circle">
                                    <span class="h6 mb-0 fw-medium text-gray-300">{{ $user->name }}</span>
                                </div>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <span class="h6 mb-0 fw-medium text-gray-300">{{ $user->email }}</span>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a>

                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-delete">
                                        <i class="far fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-layout>
