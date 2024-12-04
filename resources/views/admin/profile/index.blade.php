@extends('layouts.admin.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Academic /</span> Vision And Mision</h4>

    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Mission</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('mission.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="nameBasic" class="form-label">Mission</label>
                                <textarea name="mission" class="form-control" cols="10" rows="3"></textarea>
                            </div>
                            <div class="modal-footer mt-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Table of Mission</h5>
                </div>
                <!-- Table for cuti Data -->
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover" id="example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mission</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($mission as $data)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ Str::limit($data->mission, 30, '...') }}</td>
                                <td>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <button class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#updateModalMission{{ $data->id }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </button>
                                        </li>
                                        <li>
                                            <form id="delete-form-{{ $data->id }}"
                                                action="{{ route('mission.destroy', $data->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" onclick="confirmDelete({{ $data->id }})"
                                                class="dropdown-item">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </button>
                                        </li>
                                    </ul>
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
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">
            <button type="button" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#createModal"
                style="float: right; padding-left: 20px; padding-right: 20px; padding-top: 7px; padding-bottom: 7px">
                <i class="bi bi-person-fill-add" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="left"
                    data-bs-html="true" title="Add Profile"></i>
                Add Profile Piksi
            </button>
            Table of Profile Piksi
        </h5>

        <!-- Table for cuti Data -->
        <div class="table-responsive text-nowrap">
            <table class="table table-hover" id="example2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Goals</th>
                        <th>Vision</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($profile as $data)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ Str::limit($data->goals, 30, '...') }}</td>
                        <td>{{ Str::limit($data->vission, 30, '...') }}</td>
                        <td>
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#updateModalProfile{{ $data->id }}">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </button>
                                </li>
                                <li>
                                    <form id="delete-form-{{ $data->id }}"
                                        action="{{ route('profile.destroy', $data->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" onclick="confirmDelete({{ $data->id }})"
                                        class="dropdown-item">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- Create Modal --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="nameBasic" class="form-label">Goals</label>
                            <textarea name="goals" class="form-control" cols="10" rows="3"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="nameBasic" class="form-label">Vision</label>
                            <textarea name="vission" class="form-control" cols="10" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Update Modal Profile --}}
@foreach ($profile as $data)
<div class="modal fade" id="updateModalProfile{{ $data->id }}" tabindex="-1" aria-hidden="true"
    data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Faculties</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('profile.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="nameBasic" class="form-label">Goals</label>
                            <textarea name="goals" class="form-control" cols="10"
                                rows="3">{{ old('goals', $data->goals) }}</textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="nameBasic" class="form-label">Vision</label>
                            <textarea name="vission" class="form-control" cols="10"
                                rows="3">{{ old('vision', $data->vission) }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
{{-- Update Modal Mission --}}
@foreach ($mission as $data)
<div class="modal fade" id="updateModalMission{{ $data->id }}" tabindex="-1" aria-hidden="true"
    data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mission Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('mission.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <label for="nameBasic" class="form-label">Mission</label>
                            <textarea name="mission" class="form-control" cols="10" rows="3">
                                {{ old('mission', $data->mission) }}
                            </textarea>
                        </div>
                        <div class="modal-footer mt-2">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

<script>
    $(document).ready(function() {
    $('#example1').DataTable({
        "pageLength": 2, // Menampilkan 10 data per halaman
        "lengthMenu": [2, 10, 25, 50] // Opsi jumlah data yang ditampilkan di dropdown
    });
});
</script>
<script>
    new DataTable('#example2')
</script>
@endpush
