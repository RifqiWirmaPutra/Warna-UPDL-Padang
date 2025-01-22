@php
use App\Models\Admin;
$userRole = auth()->user()->role;
@endphp
@extends('layouts.admin')
@section('content')
{{-- <div class="menu-position">
    <div class="menu-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-2 -2 504 252" id="menu" style="transform-origin: 50% 50% 0px; transform: translate3d(0px, 0px, 0px); -moz-user-select: none;">
            <filter id="dropShadow">
                <feGaussianBlur in="SourceAlpha" stdDeviation="5" />
                <feOffset dx="2" dy="-4" />
                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                <feMerge>
                    <feMergeNode />
                    <feMergeNode in="SourceGraphic" />
                </feMerge>
            </filter>
            <g id="symbolsContainer">
                <symbol class="icon icon-" id="icon-1" viewBox="0 0 40 40">
                    <g fill="currentColor" fill-rule="evenodd">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-sort-down" viewBox="0 0 16 16">
                            <path d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293V2.5zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                          </svg>
					</g>
				</symbol>
				<symbol class="icon icon-" id="icon-2" viewBox="0 0 40 40">
					<g fill="currentColor" fill-rule="evenodd">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-filetype-csv" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.517 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495Zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879l-1.327 4Z"/>
                          </svg>
					</g>
				</symbol>
				<symbol class="icon icon-" id="icon-3" viewBox="0 0 40 40">
                    <g fill="currentColor" fill-rule="evenodd">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-filetype-xlsx bi" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM7.86 14.841a1.13 1.13 0 0 0 .401.823c.13.108.29.192.479.252.19.061.411.091.665.091.338 0 .624-.053.858-.158.237-.105.416-.252.54-.44a1.17 1.17 0 0 0 .187-.656c0-.224-.045-.41-.135-.56a1.002 1.002 0 0 0-.375-.357 2.028 2.028 0 0 0-.565-.21l-.621-.144a.97.97 0 0 1-.405-.176.37.37 0 0 1-.143-.299c0-.156.061-.284.184-.384.125-.101.296-.152.513-.152.143 0 .266.023.37.068a.624.624 0 0 1 .245.181.56.56 0 0 1 .12.258h.75a1.093 1.093 0 0 0-.199-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.552.05-.777.15-.224.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.123.524.082.149.199.27.351.367.153.095.332.167.54.213l.618.144c.207.049.36.113.462.193a.387.387 0 0 1 .153.326.512.512 0 0 1-.085.29.558.558 0 0 1-.255.193c-.111.047-.25.07-.413.07-.117 0-.224-.013-.32-.04a.837.837 0 0 1-.249-.115.578.578 0 0 1-.255-.384h-.764Zm-3.726-2.909h.893l-1.274 2.007 1.254 1.992h-.908l-.85-1.415h-.035l-.853 1.415H1.5l1.24-2.016-1.228-1.983h.931l.832 1.438h.036l.823-1.438Zm1.923 3.325h1.697v.674H5.266v-3.999h.791v3.325Zm7.636-3.325h.893l-1.274 2.007 1.254 1.992h-.908l-.85-1.415h-.035l-.853 1.415h-.861l1.24-2.016-1.228-1.983h.931l.832 1.438h.036l.823-1.438Z"/>
                        </svg>
                    </g>
                </symbol>
				<symbol class="icon icon-" id="icon-4" viewBox="0 0 40 40">
					<svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                      </svg>
				</symbol>
				<symbol class="icon icon-" id="icon-5" viewBox="0 0 40 40">
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                      </svg>
                </symbol>
                
			</g>
			<g id="itemsContainer">
				<a data-toggle="modal" data-target="#downloadFormModal" data-form-type="rencana" class="item" id="item-1" role="link" tabindex="0" xlink:href="#" xlink:title="Download Format Data" transform="matrix(1,0,0,1,0,0)" data-svg-origin="250 250">
					<path fill="none" stroke="#111" d="M330,250 l170,0 A250,250 0 0,0 455.6187738201656,107.79971922428709 l-139.8207661977126,96.69619092748476 A80,80 0 0,1 330,250" class="sector" filter="url(#dropShadow)"></path>
					<use xlink:href="#icon-1" class="use-icon" width="69" height="69" x="385.4165954589844" y="162.46841430664062" transform="rotate(0.66666666666667 419.9165954589844 196.96841430664062)"></use>
				</a>
				<a data-toggle="modal" data-target="#uploadDiklat" data-form-type="rencana" class="item" id="item-2" role="link" tabindex="0" xlink:href="#" xlink:title="Upload Rendiklat CSV" transform="matrix(0.80558,-0.59248,0.59248,0.80558,-99.51641880673253,196.7245555202328)" data-svg-origin="250 250"><path fill="none" stroke="#111" d="M330,250 l170,0 A250,250 0 0,0 455.6187738201656,107.79971922428709 l-139.8207661977126,96.69619092748476 A80,80 0 0,1 330,250" class="sector" filter="url(#dropShadow)"></path><use xlink:href="#icon-2" class="use-icon" width="69" height="69" x="385.4165954589844" y="162.46841430664062" transform="rotate(33.66666666666667 419.9165954589844 196.96841430664062)"></use></a>
			    <a class="item" id="item-3" role="link" tabindex="0" xlink:href="#" xlink:title="Upload rendiklat XLS, XLSX" transform="matrix(0.29793,-0.95458,0.95458,0.29793,-63.129478321553506,414.16433780231245)" data-svg-origin="250 250"><path fill="none" stroke="#111" d="M330,250 l170,0 A250,250 0 0,0 455.6187738201656,107.79971922428709 l-139.8207661977126,96.69619092748476 A80,80 0 0,1 330,250" class="sector" filter="url(#dropShadow)"></path><use xlink:href="#icon-3" class="use-icon" width="69" height="69" x="385.4165954589844" y="162.46841430664062" transform="rotate(67.66666666666667 419.9165954589844 196.96841430664062)"></use></a>
				<a data-toggle="modal" data-target="#downloadArp" class="item" id="item-4" role="link" tabindex="0" xlink:href="#" xlink:title="Download Data" transform="matrix(-0.32556,-0.94551,0.94551,-0.32556,95.0123947144599,567.7716825141183)" data-svg-origin="250 250"><path fill="none" stroke="#111" d="M330,250 l170,0 A250,250 0 0,0 455.6187738201656,107.79971922428709 l-139.8207661977126,96.69619092748476 A80,80 0 0,1 330,250" class="sector" filter="url(#dropShadow)"></path><use xlink:href="#icon-4" class="use-icon" width="69" height="69" x="385.4165954589844" y="162.46841430664062" transform="rotate(110.66666666666667 419.9165954589844 196.96841430664062)"></use></a>
				<a class="item" id="item-5" role="link" tabindex="0" xlink:href="{{ route('arp.create') }}" xlink:title="Tambah Data" transform="matrix(-0.82247,-0.5688,0.5688,-0.82247,313.41849304445253,597.8190545958785)" data-svg-origin="250 250"><path fill="none" stroke="#111" d="M330,250 l170,0 A250,250 0 0,0 455.6187738201656,107.79971922428709 l-139.8207661977126,96.69619092748476 A80,80 0 0,1 330,250" class="sector" filter="url(#dropShadow)"></path><use xlink:href="#icon-5" class="use-icon" width="69" height="69" x="385.4165954589844" y="162.46841430664062" transform="rotate(146.66666666666667 419.9165954589844 196.96841430664062)"></use></a>
			</g>
			<g id="trigger" class="trigger menu-trigger" role="button">
				<circle cx="250" cy="250" r="55"></circle>
				<!-- <text id="label" text-anchor="middle" x="250" y="236" fill="#fff" font-size="2.5em">-</text> -->
				<path fill="#FFFFFF" transform="translate(233 212)" fill-rule="evenodd" d="M0,2.0048815 C0,0.897616023 0.899784928,0 2.00228533,0 L30.9977147,0 C32.1035463,0 33,0.893899798 33,2.0048815 L33,2.9951185 C33,4.10238398 32.1002151,5 30.9977147,5 L2.00228533,5 C0.896453677,5 0,4.1061002 0,2.9951185 L0,2.0048815 Z M0,12.0048815 C0,10.897616 0.899784928,10 2.00228533,10 L30.9977147,10 C32.1035463,10 33,10.8938998 33,12.0048815 L33,12.9951185 C33,14.102384 32.1002151,15 30.9977147,15 L2.00228533,15 C0.896453677,15 0,14.1061002 0,12.9951185 L0,12.0048815 Z M0,22.0048815 C0,20.897616 0.899784928,20 2.00228533,20 L30.9977147,20 C32.1035463,20 33,20.8938998 33,22.0048815 L33,22.9951185 C33,24.102384 32.1002151,25 30.9977147,25 L2.00228533,25 C0.896453677,25 0,24.1061002 0,22.9951185 L0,22.0048815 Z"/>
			</g>
		</svg>
	</div>
</div> --}}
{{--  --}}
    <div class="row">
        <div class="col-12">
            @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar]))
            <div class="btn btn-info btn-group dropend me-1 mb-1">
                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi Tindakan</button>
                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Opsi Tindakan</h6>
                    <a class="dropdown-item" href="{{ route('arp.create') }}">Tambah Data</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#downloadArp">Download Data</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#downloadFormModal" data-form-type="rencana">Download Form</a>
                </div>
            </div>
            <div class="btn btn-info btn-group dropend me-1 mb-1">
                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Upload Rendiklat</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#uploadDiklat" data-form-type="rencana">Upload Rendiklat CSV</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#uploadDiklatExcel" data-form-type="rencana">Upload Rendiklat XLS, XLSX</a>
                </div>
            </div>
            @endif
            <!-- upload rendiklat CSV-->
            <div class="modal fade" id="uploadDiklat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title white" id="myModalLabel130">
                                Upload Rencana Diklat CSV
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('arp.uploadRendiklat') }}" method="POST" enctype="multipart/form-data" class="d-inline-block">
                                @csrf
                                <div class="form-group">
                                    <label for="file">Choose File:</label>
                                    <input type="file" name="file" id="file" class="form-control-file">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-outline-primary" id="uploadBtn">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end upload rendiklat CSV -->
            <!-- upload rendiklat Excel-->
            <div class="modal fade" id="uploadDiklatExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title white" id="myModalLabel130">
                                Upload Rencana Diklat XLS, XLSX
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/arp/import_excel" method="POST" enctype="multipart/form-data" class="d-inline-block">
                                @csrf
                                <div class="form-group">
                                    <label for="fileexcel">Choose File:</label>
                                    <input type="file" name="fileexcel" id="fileexcel" class="form-control-file">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-outline-primary" id="uploadBtn">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- notifikasi form validasi --}}
            @if ($errors->has('file'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('file') }}</strong>
            </span>
            @endif
    
            {{-- notifikasi sukses --}}
            @if ($sukses = Session::get('sukses'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $sukses }}</strong>
            </div>
            @endif

            {{-- notifikasi sukses selesai --}}
            @if ($selesai = Session::get('sukses'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $sukses }}</strong>
            </div>
            @endif
            <!-- end upload rendiklat Excel -->

            <div class="card">
                <!-- Modal untuk download form -->
                <div class="modal fade" id="downloadFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Jenis Form yang Akan Diunduh</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="text-center">
                                    <a href="{{ route('download.form', ['type' => 'rencana']) }}" class="btn btn-outline-primary">Download Form Rencana Diklat</a>
                                    <a href="{{ route('download.form', ['type' => 'peserta']) }}" class="btn btn-outline-primary">Download Form Peserta</a>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal untuk download form -->

                <!-- Modal Download Arp -->
                <div class="modal fade" id="downloadArp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Tipe File yang Akan Diunduh</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                <a href="{{ url('/arp/download/excel') }}" class="btn btn-outline-primary">Download Excel</a>
                                <a href="{{ url('/arp/download/pdf') }}" class="btn btn-outline-primary">Download PDF</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir modal download arp -->

                <div class="card-header fw-bold">
                    Rencana dan Realisasi Pembelajaran
                </div>
                <div class="container">
                <form action="{{ route('arp.index') }}" method="get">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Tanggal Mulai</label>
                                <input type="date" name="date_from" class="form-control" value="{{ old('date_from') }}">
                                <!-- Menggunakan old() untuk menampilkan kembali nilai jika form gagal disubmit -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="date" name="date_to" class="form-control" value="{{ old('date_to') }}">
                                <!-- Menggunakan old() untuk menampilkan kembali nilai jika form gagal disubmit -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary bg-primary" value="Cari">
                        <a href="{{ route('arp.index') }}" class="btn btn-secondary">Reset</a>
                    </div>
                </form>
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
                        <!-- success -->
                        @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible show fade" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
                        </div>
                        @endif
                        <!-- error -->
                        @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible show fade" role="alert">
                            {{ Session::get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        
                        <table class="table table-bordered table-hover" id="table1">
                            <thead class="table-light">
                                <tr>
                                    @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar]))
                                    <th style="min-width: 70px;">Selesai</th>
                                    @endif
                                    <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">Tanggal Mulai</th>
                                    <th style="min-width: 150px;">Tanggal Selesai</th>
                                    <th style="min-width: 150px;">Kode</th>
                                    <th style="min-width: 250px;">Judul</th>
                                    <th style="min-width: 200px;">Jenis Permintaan Diklat</th>
                                    <th style="min-width: 200px;">Jenis Pelaksanaan Diklat</th>
                                    <th style="min-width: 150px;">Angkatan</th>
                                    <th style="min-width: 150px;">Instruktur</th>
                                    <th style="min-width: 150px;">Rencana Peserta</th>
                                    <th style="min-width: 150px;">Realisasi Peserta</th>
                                    <th style="min-width: 150px;">Kelas</th>
                                    <th style="min-width: 150px;">Wisma</th>
                                    <th style="min-width: 150px;">Persiapan</th>
                                    <th style="min-width: 150px;">Pelaksanaan</th>
                                    <th style="min-width: 150px;">Pasca</th>
                                    <th style="min-width: 150px;">Realisasi Biaya</th>
                                    @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar]))
                                    <th style="min-width: 150px;">Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @if ($arp->count() > 0)
                                @foreach ($arp as $rs)
                                    <!-- Input hidden untuk menyimpan ID dari data yang sedang diperbarui -->
                                    <input type="hidden" name="id" value="{{ $rs->id }}">
                                    <tr>
                                        @unless($rs->arsip)
                                        @endunless
                                        @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar]))
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example" style="white-space: nowrap;">
                                                <div class="btn btn-info">
                                                    <button id="btnSelesai{{ $rs->id }}" type="button" data-toggle="modal" data-target="#selesaiModal{{ $rs->id }}" @if($rs->arsip) disabled @endif>Tandai Selesai</button>
                                                </div>
                                            </div>
                                        </td>
                                        @endif
                                        <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                        <td class="align-middle">
                                            {{ date_format(date_create($rs->tanggal_mulai), 'd-m-Y') }}
                                            <input type="hidden" name="tanggal_mulai" value="{{ date_format(date_create($rs->tanggal_mulai), 'Y-m-d') }}" readonly>
                                        </td>
                                        <td class="align-middle">
                                            {{ date_format(date_create($rs->tanggal_selesai), 'd-m-Y') }}
                                            <input type="hidden" name="tanggal_selesai" value="{{ date_format(date_create($rs->tanggal_selesai), 'Y-m-d') }}" readonly>
                                        </td>
                                        <td class="align-middle">
                                            {{ $rs->kode }}
                                            <input type="hidden" name="kode" value="{{ $rs->kode }}">
                                        </td>
                                        <td class="align-middle">
                                            {{ $rs->judul }}
                                            <input type="hidden" name="judul" value="{{ $rs->judul }}">
                                        </td>
                                        <td class="align-middle">
                                            {{ $rs->jenis_permintaan_diklat }}
                                            <input type="hidden" name="jenis_permintaan_diklat" value="{{ $rs->jenis_permintaan_diklat }}">
                                        </td>
                                        <td class="align-middle">
                                            {{ $rs->jenis_pelaksanaan_diklat }}
                                            <input type="hidden" name="jenis_pelaksanaan_diklat" value="{{ $rs->jenis_pelaksanaan_diklat }}">
                                        </td>
                                        <td class="align-middle">
                                            {{ $rs->angkatan }}
                                            <input type="hidden" name="angkatan" value="{{ $rs->angkatan }}">
                                        </td>
                                        <td class="align-middle">
                                            {{ $rs->instruktur }}
                                            <input type="hidden" name="instruktur" value="{{ $rs->instruktur }}">
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('arp.peserta', $rs->id) }}">
                                                {{ $rs->users->count() }}
                                                {{-- {{ $rs->users_count }} --}}
                                                ({{ $rs->confirmed_count }} konfirmasi) <!-- jumlah yang sudah konfirmasi -->
                                            </a>
                                            <input type="hidden" name="rencana_peserta" value="{{ $rs->users->count() }}">
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="{{ route('show.realisasi', $rs->id) }}">
                                                {{ $rs->hitungAbsensiCount() }}
                                                <input type="hidden" name="realisasi_peserta" value="{{ $rs->hitungAbsensiCount() }}">
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar]))
                                                <button type="button" data-toggle="modal" data-target="#editModalkelas{{ $rs->id }}">{{ $rs->kelas }}</button>
                                            @else
                                                {{ $rs->kelas }}
                                            @endif
                                            
                                        </td>
                                        <td class="align-middle">
                                            @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminPelayanan]))
                                                <button type="button" data-toggle="modal" data-target="#editModalWisma{{ $rs->id }}">{{ $rs->wisma }}</button>
                                            @else
                                                {{ $rs->wisma }}
                                            @endif   
                                        </td>
                                        <!-- Kolom Persentase Persiapan (menggunakan fungsi pada model) -->
                                        <td class="align-middle">
                                            <a href="{{ route('persiapan.index', $rs->id) }}">
                                                {{ $rs->persentasePersiapan() }} %
                                                <input type="hidden" name="persiapan" value="{{ $rs->persentasePersiapan() }}">
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('pelaksanaan.index', $rs->id) }}">
                                                {{ $rs->persentasePelaksanaan() }} %
                                                <input type="hidden" name="pelaksanaan" value="{{ $rs->persentasePelaksanaan() }}">
                                            </a>
                                        </td>
                                        <!-- Kolom Persentase Pasca -->
                                        <td class="align-middle">
                                            <a href="{{ route('pasca.index', $rs->id) }}">
                                                {{ $rs->persentasePasca() }} %
                                                <input type="hidden" name="pasca" value="{{ $rs->persentasePasca() }}">
                                            </a>
                                        </td>

                                        <!-- Kolom Total Realisasi Biaya -->
                                        <td class="align-middle">
                                            <a href="{{ route('realisasiBiaya.index', $rs->id) }}">
                                                Rp. {{ number_format($rs->totalRealisasiBiaya(), 0, ',', '.') }}
                                                <input type="hidden" name="realisasi_biaya" value="{{ $rs->totalRealisasiBiaya() }}">
                                            </a>
                                        </td>

                                        @if(in_array($userRole, [Admin::ROLE_SUPERADMIN, Admin::ROLE_AdminJar]))
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example" style="white-space: nowrap;">
                                                <div class="btn btn-warning">
                                                    <a href="{{ route('arp.edit', $rs->id) }}" type="button">Edit</a>
                                                </div>
                                                <div class="btn btn-primary">
                                                    <button type="button" data-toggle="modal" data-target="#editModal{{ $rs->id }}">Simpan</button>
                                                </div>
                                                <div class="btn btn-danger">
                                                    <button type="button" data-toggle="modal" data-target="#deleteModal{{ $rs->id }}">Hapus</button>
                                                </div>
                                                <div class="btn btn-info">
                                                    <button type="button" data-toggle="modal" data-target="#uploadModal" data-arpid="{{ $rs->id }}">Upload Peserta</button>
                                                </div>
                                            </div>
                                        </td>
                                        @endif
                                    </tr>
                                    {{-- modal selesai --}}
                                    <div class="modal fade" id="selesaiModal{{ $rs->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $rs->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered " style="max-width: 30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $rs->id }}">Pembelajaran Selesai</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('store.arsip', $rs->id) }}" method="POST">
                                                        @csrf
                                                        @method ('PUT')
                                                        <input type="hidden" name="tanggal_mulai" value="{{ date_format(date_create($rs->tanggal_mulai), 'Y-m-d') }}" readonly>
                                                        <input type="hidden" name="tanggal_selesai" value="{{ date_format(date_create($rs->tanggal_selesai), 'Y-m-d') }}" readonly>
                                                        <input type="hidden" name="kode" value="{{ $rs->kode }}" readonly>
                                                        <input type="hidden" name="judul" value="{{ $rs->judul }}" readonly>
                                                        <input type="hidden" name="jenis_permintaan_diklat" value="{{ $rs->jenis_permintaan_diklat }}" readonly>
                                                        <input type="hidden" name="jenis_pelaksanaan_diklat" value="{{ $rs->jenis_pelaksanaan_diklat }}" readonly>
                                                        <input type="hidden" name="angkatan" value="{{ $rs->angkatan }}" readonly>
                                                        <input type="hidden" name="instruktur" value="{{ $rs->instruktur }}" readonly>
                                                        <input type="hidden" name="rencana_peserta" value="{{ $rs->users->count() }}" readonly>
                                                        <input type="hidden" name="realisasi_peserta" value="{{ $rs->hitungAbsensiCount() }}" readonly>
                                                        <input type="hidden" name="kelas" value="{{ $rs->kelas }}" readonly>
                                                        <input type="hidden" name="wisma" value="{{ $rs->wisma }}" readonly>
                                                        <input type="hidden" name="persiapan" value="{{ $rs->persentasePersiapan() }}" readonly>
                                                        <input type="hidden" name="pelaksanaan" value="{{ $rs->persentasePelaksanaan() }}" readonly>
                                                        <input type="hidden" name="pasca" value="{{ $rs->persentasePasca() }}" readonly>
                                                        <input type="hidden" name="realisasi_biaya" value="{{ $rs->totalRealisasiBiaya() }}" readonly>
                                                        <input type="hidden" name="arp_id" value="{{ $rs->id }}" readonly>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary bg-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal kelas --}}
                                    <div class="modal text-left" id="editModalkelas{{ $rs->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $rs->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark text-white">
                                                    <h5 class="modal-title text-white" id="editModalLabel{{ $rs->id }}">Simpan Data Kelas</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('arp.updatekelas', $rs->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="kelas" value="{{ $rs->kelas }}" readonly>
                                                        <div class="container-fluid">
                                                            <label for="kelas">Kelas</label>
                                                            <select class="form-control" id="kelas" name="kelas">
                                                                @foreach($kelasOptions as $id => $namakelas)
                                                                <option value="{{ $id }}">{{ $namakelas }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary bg-dark mt-3">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal wisma --}}
                                    <div class="modal text-left" id="editModalWisma{{ $rs->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $rs->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark text-white">
                                                    <h5 class="modal-title text-white" id="editModalLabel{{ $rs->id }}">Simpan Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('arp.updatewisma', $rs->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="wisma" value="{{ $rs->wisma }}" readonly>
                                                        <div class="container-fluid">
                                                            <label for="wisma">Wisma</label><br>
                                                            @foreach($wismaOptions as $id => $nama_wisma)
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="{{ $id }}" id="wisma_{{ $id }}" name="wisma[]">
                                                                <label class="form-check-label" for="wisma_{{ $id }}">
                                                                    {{ $nama_wisma }}
                                                                </label>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary bg-dark mt-3">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Modal Simpan -->
                                    <div class="modal fade" id="editModal{{ $rs->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $rs->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered " style="max-width: 30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $rs->id }}">Simpan Data Id {{ $rs->id }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('arp.update', $rs->id) }}" method="POST">
                                                        @csrf
                                                        @method ('PUT')
                                                        <input type="hidden" name="tanggal_mulai" value="{{ date_format(date_create($rs->tanggal_mulai), 'Y-m-d') }}" readonly>
                                                        <input type="hidden" name="tanggal_selesai" value="{{ date_format(date_create($rs->tanggal_selesai), 'Y-m-d') }}" readonly>
                                                        <input type="hidden" name="kode" value="{{ $rs->kode }}" readonly>
                                                        <input type="hidden" name="judul" value="{{ $rs->judul }}" readonly>
                                                        <input type="hidden" name="jenis_permintaan_diklat" value="{{ $rs->jenis_permintaan_diklat }}" readonly>
                                                        <input type="hidden" name="jenis_pelaksanaan_diklat" value="{{ $rs->jenis_pelaksanaan_diklat }}" readonly>
                                                        <input type="hidden" name="angkatan" value="{{ $rs->angkatan }}" readonly>
                                                        <input type="hidden" name="instruktur" value="{{ $rs->instruktur }}" readonly>
                                                        <input type="hidden" name="rencana_peserta" value="{{ $rs->users->count() }}" readonly>
                                                        <input type="hidden" name="realisasi_peserta" value="{{ $rs->hitungAbsensiCount() }}" readonly>
                                                        <input type="hidden" name="kelas" value="{{ $rs->kelas }}" readonly>
                                                        <input type="hidden" name="wisma" value="{{ $rs->wisma }}" readonly>
                                                        {{-- <input type="hidden" name="wisma" value="{{ $rs->wisma }}" readonly> --}}
                                                        <input type="hidden" name="persiapan" value="{{ $rs->persentasePersiapan() }}" readonly>
                                                        <input type="hidden" name="pelaksanaan" value="{{ $rs->persentasePelaksanaan() }}" readonly>
                                                        <input type="hidden" name="pasca" value="{{ $rs->persentasePasca() }}" readonly>
                                                        <input type="hidden" name="realisasi_biaya" value="{{ $rs->totalRealisasiBiaya() }}" readonly>
                                                        <div class="text-center">
                                                            <button id="btnSimpan{{ $rs->id }}" type="submit" class="btn btn-primary bg-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Konfirmasi Penghapusan -->
                                    <div class="modal fade" id="deleteModal{{ $rs->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan ARP ID: {{ $rs->id }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus Data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                                    <form action="{{ route('arp.destroy', $rs->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-info">
                                                    <h5 class="modal-title" id="exampleModalLabel">Upload File for ARP
                                                        ID: <span id="arpIdSpan"></span></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('arp.uploadPeserta') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <!-- Add a hidden input to store the ARP ID -->
                                                            <input type="hidden" name="arp_id" id="arp_id" value="">
                                                            <div class="form-group">
                                                                <label for="file_peserta">Choose File:</label>
                                                                <input type="file" name="file_peserta" id="file_peserta" class="form-control-file">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-outline-primary" id="uploadBtn">Upload</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal existingData Arsip update --}}
                                    {{-- modal selesai --}}
                                    <div class="modal fade" id="ArsipUpdateModal{{ $rs->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $rs->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered " style="max-width: 30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $rs->id }}">Pembelajaran Selesai</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('update.arsip', $rs->id) }}" method="POST">
                                                        @csrf
                                                        @method ('PUT')
                                                        <input type="text" name="tanggal_mulai" value="{{ date_format(date_create($rs->tanggal_mulai), 'Y-m-d') }}" readonly>
                                                        <input type="text" name="tanggal_selesai" value="{{ date_format(date_create($rs->tanggal_selesai), 'Y-m-d') }}" readonly>
                                                        <input type="text" name="kode" value="{{ $rs->kode }}" readonly>
                                                        <input type="text" name="judul" value="{{ $rs->judul }}" readonly>
                                                        <input type="text" name="jenis_permintaan_diklat" value="{{ $rs->jenis_permintaan_diklat }}" readonly>
                                                        <input type="text" name="jenis_pelaksanaan_diklat" value="{{ $rs->jenis_pelaksanaan_diklat }}" readonly>
                                                        <input type="text" name="angkatan" value="{{ $rs->angkatan }}" readonly>
                                                        <input type="text" name="instruktur" value="{{ $rs->instruktur }}" readonly>
                                                        <input type="text" name="rencana_peserta" value="{{ $rs->users->count() }}" readonly>
                                                        <input type="text" name="realisasi_peserta" value="{{ $rs->hitungAbsensiCount() }}" readonly>
                                                        <input type="text" name="kelas" value="{{ $rs->kelas }}" readonly>
                                                        <input type="text" name="wisma" value="{{ $rs->wisma }}" readonly>
                                                        <input type="text" name="persiapan" value="{{ $rs->persentasePersiapan() }}" readonly>
                                                        <input type="text" name="pelaksanaan" value="{{ $rs->persentasePelaksanaan() }}" readonly>
                                                        <input type="text" name="pasca" value="{{ $rs->persentasePasca() }}" readonly>
                                                        <input type="text" name="realisasi_biaya" value="{{ $rs->totalRealisasiBiaya() }}" readonly>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-outline-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        $(document).ready(function() {
            var filePesertaInput = document.getElementById('file_peserta');
            var arpIdInput = document.getElementById('arp_id');
            var originalFilePesertaValue = filePesertaInput.value;
            $('#arpIdSpan').text(arpIdInput);
            filePesertaInput.addEventListener('change', function() {

            });

            $('#uploadModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var arpId = button.data('arpid');
                arpIdInput.value = arpId;
                $('#arpIdSpan').text(arpId);
            });

            $('#uploadModal').on('hidden.bs.modal', function() {
                filePesertaInput.value = originalFilePesertaValue;
                arpIdInput.value = '';
            });

            $('#uploadBtn').click(function() {
                $('#uploadModal').modal('hide');
            });
        });
    </script>
    
    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            max-width: none;
        }

        .table th {
            white-space: nowrap;
        }

        {{-- menu --}}
        .menu-position {
		  max-width: 320px;
		  width: 100%;
		  margin: 0;
		  /*transform: translate(-50%,0) rotate(180deg);*/
		  transform: translate(-50%, 0);
		  position: fixed;
		  bottom: 0px;
		  left: 50%;
          z-index: 9999;
		}
        
		.menu-wrapper {
		  position: relative;
		  height: 0;
		  width: 100%;
		  /* any width you want */
		  padding-top: 50%;
		  /* if the menu is in full circle mode. 50% if it is in semi-circle mode. */
		}
        #menu {
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  display: block;
		  margin: 0 auto;
		  overflow: visible;
		  /* uncomment this if you are using bouncing animations*/
		}
        a {
		  cursor: pointer;
		  /* SVG <a> elements don't get this by default, so you need to explicitly set it */
		  outline: none;
		}
        .item .sector {
		  transition: transform .1s ease-out, fill 0.6s ease-out;
		  fill: #fff;
		  stroke: transparent;
		  transform-origin: 250px 250px;
		}
        .item:hover .sector,
		.item:focus .sector {
		  fill: #509227;
		  transform: scale(1.05);
		}
		
		.item .use-icon {
		  fill: currentColor;
		  color: #4C423A;
		}
		
		.item:hover .use-icon {
		  fill: currentColor;
		  color: #fff;
		}
		
		.item:hover .icon path {
		  fill: #fff;
		}
		
		.menu-trigger {
		  fill: #509227;
		  transform-origin: 250px 250px;
		  transition: all .2s ease-out;
		  pointer-events: auto;
		}
        .menu-trigger:hover {
		  transform: scale(1.2);
		  fill: #00452E;
		}
        .menu-trigger:hover,
		.menu-trigger:focus {
		  cursor: pointer;
		}
		
		symbol {
		  overflow: visible;
		}
    </style>
    <script src="{{ asset('assets/js/circular-menu/menu.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if($selesai)
                document.getElementById('btnSelesai{{ $rs->id }}').disabled = false; // Mengaktifkan tombol "Selesai"
                document.getElementById('btnSelesai{{ $rs->id }}').classList.remove('btn-secondary'); // Menghapus kelas 'btn-secondary'
                document.getElementById('btnSelesai{{ $rs->id }}').classList.add('btn-primary'); // Menambahkan kelas 'btn-primary'
            @endif
        });
    </script>
    
@endsection