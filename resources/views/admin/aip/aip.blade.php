@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Formulir Pencarian Tanggal -->
            <form id="dateSearchForm">
                <div class="form-row align-items-center">
                    <div class="col-md-3">
                        <label for="startDate">Tanggal Mulai:</label>
                        <input type="date" id="startDate" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="endDate">Tanggal Selesai:</label>
                        <input type="date" id="endDate" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-primary" onclick="searchByDate()">Cari</button>
                    </div>
                </div>
            </form>

            <!-- <a href="#" class="btn btn-info mb-2">Download</a> -->
            <div class="card">
                <div class="card-header">
                    Informasi Pembelajaran
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <table class="table table-hover" id="table1">
                            <thead>
                                <tr style="background-color: #f8f9fa; color: #333;">
                                    <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">Tanggal Mulai</th>
                                    <th style="min-width: 150px;">Tanggal Selesai</th>
                                    <th style="min-width: 120px;">Judul</th>
                                    <th style="min-width: 150px;">Angkatan</th>
                                    <th style="min-width: 200px;">Jenis Pelaksanaan Diklat</th>
                                </tr>
                            </thead>
                            <tbody class="scrolling-content">
                                @php
                                    $sortedData = $arp->sortBy('tanggal_mulai');
                                @endphp
                                @if($sortedData->count() > 0)
                                    @foreach($sortedData as $key => $rs)
                                        <tr style="transition: background-color 0.3s ease; cursor: pointer;">
                                            <td class="align-middle text-center">{{ $key + 1 }}</td>
                                            <td class="align-middle text-center">{{ date_format(date_create($rs->tanggal_mulai), 'Y-m-d') }}</td>
                                            <td class="align-middle text-center">{{ date_format(date_create($rs->tanggal_selesai), 'Y-m-d') }}</td>
                                            <td class="align-middle" style="max-width: 500px; overflow: hidden; text-overflow: ellipsis;">{{ $rs->judul }}</td>
                                            <td class="align-middle text-center">{{ $rs->angkatan }}</td>
                                            <td class="align-middle text-center">{{ $rs->jenis_pelaksanaan_diklat }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="5"> Data Tidak Ditemukan</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function searchByDate() {
            var startDate = document.getElementById("startDate").value;
            var endDate = document.getElementById("endDate").value;
            var table = document.querySelector(".table tbody");
            var rows = table.querySelectorAll("tr");

            rows.forEach(function(row) {
                var startDateCell = row.querySelector("td:nth-child(2)").textContent;
                var endDateCell = row.querySelector("td:nth-child(3)").textContent;

                if (startDateCell >= startDate && endDateCell <= endDate) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }
    </script>

@endsection
