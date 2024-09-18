<?php



use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArpController;
use App\Http\Controllers\ArpRencanaPeController;
use App\Http\Controllers\ArealisasiPesertaController;
use App\Http\Controllers\AdaftarHadirController;
use App\Http\Controllers\UdaftarHadirController;
use App\Http\Controllers\UabsensiPesertaController;
use App\Http\Controllers\TelatAbsenController;
use App\Http\Controllers\AboutDashboardController;
use App\Http\Controllers\ContactDashboardController;
use App\Http\Controllers\InformasiDashboardController;
use App\Http\Controllers\InformasiDetailsDashboardController;
use App\Http\Controllers\KomunitasDashboardController;
use App\Http\Controllers\SaranaDashboardController;
use App\Http\Controllers\JasadanLayananDashboardControllerController;
use App\Http\Controllers\PenginapanDashboardControllerController;
use App\Http\Controllers\RuanganDashboardControllerController;
use App\Http\Controllers\PeralatanDashboardControllerController;
use App\Http\Controllers\PembelajaranDashboardControllerController;
use App\Http\Controllers\SettingHariController;
use App\Http\Controllers\PersiapanController;
use App\Http\Controllers\PelaksanaanController;
use App\Http\Controllers\PascaController;
use App\Http\Controllers\RealisasiBiayaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\WismaController;
use App\Http\Controllers\DownloadFormController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\BEpenginapanController;
use App\Http\Controllers\BEruanganController;
use App\Http\Controllers\BEperalatanController;
use App\Http\Controllers\BEbookingPeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\InfoSarapanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\ArsipUserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\KwtController;
use App\Http\Controllers\DashboardKulinerController;
use App\Http\Controllers\Kwt\WisataController;
use App\Http\Controllers\Kwt\KafeController;
use App\Http\Controllers\Kwt\HotelController;
use App\Http\Controllers\Kwt\TransportasiController;
use App\Http\Controllers\Kwt\PolehController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FedbackAdminController;
use App\Http\Controllers\DashboardBookingController;
use App\Http\Controllers\Jdl\PenginapanController;
use App\Http\Controllers\PeBookingController;
use App\Http\Controllers\PeBookingController as ControllersPeBookingController;
use App\Http\Controllers\PenginapanDashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminMiddleware;
use App\Models\Penginapan;

// Rute-rute standar
Route::get('/', function () {
    return view('welcome');
})->name('wlcm');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/uinformasi-pembelajaran', 'App\Http\Controllers\IpController@viewindex')->name('uip.viewindex');
    Route::get('/konfirmasi-peserta', 'App\Http\Controllers\UdaftarHadirController@index')->name('udh.index');
    Route::post('/ukonfirmasi', 'App\Http\Controllers\UdaftarHadirController@store')->name('udh.store')->middleware('checkAbsensi');

    // absensi
    Route::get('/absensi', 'App\Http\Controllers\UabsensiPesertaController@index')->name('absensi.create')->middleware('checkAbsensiHarian');
    Route::post('/absensi', 'App\Http\Controllers\UabsensiPesertaController@store')->name('absensi.store')->middleware('checkAbsensiHarian');
    Route::get('/late-attendance', [TelatAbsenController::class, 'index'])->name('telat.absen');
    Route::post('/telat-absen/ajukan', [TelatAbsenController::class, 'ajukan'])->name('telat-absen.ajukan');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Layout
    Route::get('/user/layout', [LayoutController::class, 'index'])->name('layout.index');

    //Informasi Sarapan
    Route::get('/user/infosarapan', [InfoSarapanController::class, 'index'])->name('infosarapan.index');

    // feedback peserta
    Route::get('/feedback-dashboard', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::post('/feedback-dashboard/store', [FeedbackController::class, 'store'])->name('feedback.store');
});

require __DIR__ . '/auth.php';

// Rute-rute admin
Route::middleware(['auth:admin'])->group(function () {
    Route::middleware([AdminMiddleware::class . ':super-admin,pelayanan-admin'])->group(function () {
        Route::put('/arp/wisma/{id}', [ArpController::class, 'updatewisma'])
            ->name('arp.updatewisma');
    });
    Route::get('/arp', [ArpController::class, 'index'])->name('arp.index');

    Route::middleware([AdminMiddleware::class . ':super-admin,jar-admin'])->group(function () {
        Route::get('/arp/create', [ArpController::class, 'create'])->name('arp.create');
        Route::post('/arp/store', [ArpController::class, 'store'])->name('arp.store');
        Route::post('/upload-rendiklat', 'App\Http\Controllers\ArpController@uploadRendiklat')->name('arp.uploadRendiklat');
        Route::post('/arp/import_excel', [ArpController::class, 'import_excel']);

        Route::get('/edit/{id}', [ArpController::class, 'edit'])->name('arp.edit');
        Route::put('/arp/{id}', [ArpController::class, 'update'])->name('arp.update');
        Route::put('/arp/edit/{id}', [ArpController::class, 'updatearp'])->name('updatearp');
        Route::put('/arp/kelas/{id}', [ArpController::class, 'updatekelas'])->name('arp.updatekelas');
        Route::post('/upload-peserta', 'App\Http\Controllers\ArpController@uploadPeserta')->name('arp.uploadPeserta');
        Route::delete('/destroy/{id}', [ArpController::class, 'destroy'])->name('arp.destroy');

        // rencana peserta
        Route::get('/arp/peserta/{id}', [ArpController::class, 'showPeserta'])->name('arp.peserta');
        // realisasi Peserta
        Route::get('/arp/realisasipeserta/{id}', [ArealisasiPesertaController::class, 'showRealisasi'])->name('show.realisasi');
        Route::post('/arp/realisasipeserta/store', [ArealisasiPesertaController::class, 'storeRealisasi'])->name('store.realisasi');
        // Rute pengaturan absensi
        Route::get('/settings/absensi', 'App\Http\Controllers\SettingHariController@settings')->name('settings.absensi');
        Route::put('/settings/absensi', 'App\Http\Controllers\SettingHariController@updateSettings')->name('settings.absensi.update');

        Route::get('/setting-kelas', [KelasController::class, 'index'])->name('kelas.index');
        Route::post('/setting-kelas/store', [KelasController::class, 'store'])->name('kelas.store');
        Route::put('/setting-kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
        Route::delete('/setting-kelas/delete/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

        Route::get('/warna/peserta', [UserController::class, 'index'])->name('index.user');
        Route::put('/warna/peserta/update', [UserController::class, 'update'])->name('user.updateAll');

        Route::get('/admin/rendiklat/arsip', [ArsipController::class, 'index'])->name('index.arsip');
        Route::delete('/arsip/destroy/{id}', [ArsipController::class, 'destroy'])->name('destroy.arsip');
        Route::match(['put', 'post'], '/admin/rendiklat/arsip/store', [ArsipController::class, 'store'])->name('store.arsip');
        Route::match(['put', 'post'], '/admin/rendiklat/arsip/update', [ArsipController::class, 'update'])->name('update.arsip');
        Route::get('/admin/rendiklat/arsip/arsip-user/{arp_id}', [ArsipController::class, 'arsipUser'])->name('index.arsipuser');
        Route::get('/admin/rendiklat/arsip/arsip-realisasi/{arp_id}', [ArsipController::class, 'realisasiPeserta'])->name('index.realisasiPeserta');
        Route::match(['put', 'post'], '/admin/rendiklat/arsipuser/store', [ArsipUserController::class, 'store'])->name('store.arsipuser');
    });

    Route::post('/import-excel', [ExcelController::class, 'import'])->name('import.excel');
    Route::get('/admin/aip', 'App\Http\Controllers\ArpController@aipView')->middleware(['verified'])->name('admin.aip.view');
    // AdaftarHadirController routes
    Route::resource('Adh', AdaftarHadirController::class);
    Route::get('admin/adh/pengajuanabsensipeserta', [AdaftarHadirController::class, 'pengajuan'])->name('adh.pengajuan');
    Route::post('admin/adh/pengajuanabsensipeserta/store', [AdaftarHadirController::class, 'terimaAjukan'])->name('adh.terimaAjukan');
    Route::get('/admin/adh', 'App\Http\Controllers\AdaftarHadirController@index')->name('adh');
    Route::get('admin/daftarhadir/download/excel', [AdaftarHadirController::class, 'download']);




    // PERSIAPAN
    // Route::get('/admin/arp/persiapan', 'App\Http\Controllers\PersiapanController@index')->name('persiapan.index');
    // Route::get('/persiapan/inputpersiapan', [PersiapanController::class, 'inputview'])->name('persiapan.input');
    Route::prefix('persiapan')->group(function () {
        Route::get('/{arpId}', [PersiapanController::class, 'index'])->name('persiapan.index');
        Route::post('/{arpId}', [PersiapanController::class, 'store'])->name('persiapan.store');
        // Route::get('/{arpId}/edit/{persiapanId}', [PersiapanController::class, 'edit'])->name('persiapan.edit');
        Route::put('/persiapan/{arpId}/update/{persiapanId}', [PersiapanController::class, 'update'])->name('persiapan.update');
        Route::delete('/{arpId}/{kegiatanId}', [PersiapanController::class, 'destroy'])->name('persiapan.destroy');



    });

    // PELAKSANAAN
    Route::prefix('pelaksanaan')->group(function () {
        Route::get('/{arpId}', [PelaksanaanController::class, 'index'])->name('pelaksanaan.index');
        Route::post('/{arpId}', [PelaksanaanController::class, 'store'])->name('pelaksanaan.store');
        // Route::get('/{arpId}/edit/{persiapanId}', [PersiapanController::class, 'edit'])->name('persiapan.edit');
        Route::put('/pelaksanaan/{arpId}/update/{pelaksanaanId}', [PelaksanaanController::class, 'update'])->name('pelaksanaan.update');
        Route::delete('/{arpId}/{kegiatanId}', [PelaksanaanController::class, 'destroy'])->name('pelaksanaan.destroy');
    });

    // PASCA
    Route::prefix('pasca')->group(function () {
        Route::get('/{arpId}', [PascaController::class, 'index'])->name('pasca.index');
        Route::post('/{arpId}', [PascaController::class, 'store'])->name('pasca.store');
        Route::put('/pasca/{arpId}/update/{pascaId}', [PascaController::class, 'update'])->name('pasca.update');
        Route::delete('/{arpId}/{kegiatanId}', [PascaController::class, 'destroy'])->name('pasca.destroy');
    });
    Route::prefix('realisasiBiaya')->group(function () {
        Route::get('/{arpId}', [RealisasiBiayaController::class, 'index'])->name('realisasiBiaya.index');
        Route::post('/{arpId}', [RealisasiBiayaController::class, 'store'])->name('realisasiBiaya.store');
        Route::put('/realisasiBiaya/{arpId}/update/{pascaId}', [RealisasiBiayaController::class, 'update'])->name('realisasiBiaya.update');
        Route::delete('/{arpId}/{kegiatanId}', [RealisasiBiayaController::class, 'destroy'])->name('realisasiBiaya.destroy');

    });






    // Download Form
    Route::get('download/form/{type}', [DownloadFormController::class, 'downloadForm'])->name('download.form');
    Route::get('arp/download/excel', [ArpController::class, 'downloadExcel']);
    Route::get('arp/download/pdf', [ArpController::class, 'downloadPDF']);

    Route::middleware(['createAccount'])->group(function () {
        Route::get('/create-account', [AccountController::class, 'create'])->name('accounts.create');
        Route::post('/create-account', [AccountController::class, 'store'])->name('accounts.store');
    });
    Route::middleware([AdminMiddleware::class . ':super-admin'])->group(function () {
        // sarana
        Route::get('/sarana-admin', [SaranaController::class, 'index'])->name('sarana.admin');
        Route::post('/sarana-admin/store', [SaranaController::class, 'store'])->name('sarana.store');
        Route::put('/sarana-admin/edit/{id}', [SaranaController::class, 'edit'])->name('sarana.edit');
        Route::delete('/sarana-admin/delete/{id}', [SaranaController::class, 'destroy'])->name('sarana.destroy');



        Route::get('/setting-wisma', [WismaController::class, 'index'])->name('wisma.index');
        Route::post('/setting-wisma/store', [WismaController::class, 'store'])->name('wisma.store');
        Route::put('/setting-wisma/edit/{id}', [WismaController::class, 'edit'])->name('wisma.edit');
        Route::delete('/setting-wisma/delete/{id}', [WismaController::class, 'destroy'])->name('wisma.destroy');

        // informasi
        Route::get('/informasi-admin', [InformasiController::class, 'index'])->name('informasiadmin.admin');
        Route::post('/informasi-admin/store', [InformasiController::class, 'store'])->name('informasiadmin.store');
        Route::put('/informasi-admin/edit/{id}', [InformasiController::class, 'edit'])->name('informasiadmin.edit');
        Route::delete('/informasi-admin/delete/{id}', [InformasiController::class, 'destroy'])->name('informasiadmin.destroy');

        // Menampilkan daftar penginapan
        Route::get('/penginapan', [BEpenginapanController::class, 'index'])->name('admin.penginapan.index');
        Route::post('/penginapan/store', [BEpenginapanController::class, 'store'])->name('admin.penginapan.store');
        Route::put('/penginapan/edit/{id}', [BEpenginapanController::class, 'edit'])->name('admin.penginapan.edit');
        Route::delete('/penginapan/delete/{id}', [BEpenginapanController::class, 'destroy'])->name('admin.penginapan.destroy');
        
        


        //menampilkan daftar ruangan
        Route::get('/ruangans', [BEruanganController::class, 'index'])->name('admin.ruangan.index');
        Route::post('/ruangans', [BEruanganController::class, 'store'])->name('admin.ruangan.store');
        Route::put('/ruangans/{id}/edit', [BEruanganController::class, 'edit'])->name('admin.ruangan.edit');
        Route::delete('/ruangans/{id}', [BEruanganController::class, 'destroy'])->name('admin.ruangan.destroy');
        
        //menampilkan daftar ruangan
        Route::get('/peralatans', [BEperalatanController::class, 'index'])->name('admin.peralatan.index');
        Route::get('/peralatans/create', [BEperalatanController::class, 'create'])->name('admin.peralatan.create');
        Route::post('/peralatans', [BEperalatanController::class, 'store'])->name('admin.peralatan.store');
        Route::get('/peralatans/{id}/edit', [BEperalatanController::class, 'edit'])->name('admin.peralatan.edit');
        Route::put('/peralatans/{id}', [BEperalatanController::class, 'update'])->name('admin.peralatan.update');
        Route::delete('/peralatans/{id}', [BEperalatanController::class, 'destroy'])->name('admin.peralatan.destroy');

        // Route::get('/bookingPe', [BEbookingPeController::class, 'index'])->name('admin.bookingPenginapan.index');
        // Route::post('/bookingPe/store', [BEbookingPeController::class, 'store'])->name('admin.bookingPenginapan.store');
        // Route::put('/bookingPe/edit/{id}', [BEbookingPeController::class, 'update'])->name('admin.bookingPenginapan.update');
        // Route::delete('/bookingPe/delete/{id}', [BEbookingPeController::class, 'destroy'])->name('admin.bookingPenginapan.destroy');

        
        // Menampilkan daftar booking Penginapan
        // Route::get('/penginapan', [BEbookpenginapanController::class, 'index'])->name('admin.bookingPenginapan.index');
        // Route::post('/penginapan/store', [BEbookpenginapanController::class, 'store'])->name('admin.bookingPenginapan.store');
        // Route::put('/penginapan/edit/{id}', [BEbookpenginapanController::class, 'edit'])->name('admin.bookingPenginapan.edit');
        // Route::delete('/penginapan/delete/{id}', [BEbookpenginapanController::class, 'destroy'])->name('admin.bookingPenginapan.destroy');
        
        //Feedback Admin
        Route::get('/admin/feedback-admin/get-status/{id}', 'FedbackAdminController@getStatus');
    });

    Route::get('/feedback-admin', [FedbackAdminController::class, 'index'])->name('feedbackadmin.index');

    //Check In di Dashboard
    // Route::get('/soon', [CheckInController::class, 'index'])->name('soon.index');
    // Route::post('/check-in', [CheckInController::class, 'checkIn'])->name('check-in');



    //Contact Admin
    Route::get('/contact', [ContactController::class, 'index'])->name('contactadmin.index');
    // Contoh route
    Route::get('/admin/contact/get-status/{id}', 'ContactController@getStatus');





});

require __DIR__ . '/adminauth.php';

// Welcome
Route::get('/informasi-pembelajaran', 'App\Http\Controllers\IpController@index')->name('ip.index');
Route::get('/about-dashboard', 'App\Http\Controllers\AboutDashboardController@index')->name('about.index');
Route::get('/contact-dashboard', 'App\Http\Controllers\ContactDashboardController@index')->name('contact.index');
Route::post('/contact', [ContactDashboardController::class, 'store'])->name('contact.store');

// Tambahkan ini di routes/web.php
Route::post('/admin/contact/mark-as-read/{id}', [ContactController::class, 'markAsRead'])->name('admin.contact.mark-as-read');

Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact.index');
Route::post('/admin/contact/mark-as-read/{id}', [ContactController::class, 'markAsRead'])->name('admin.contact.mark-as-read');

// Feedback
// Route::get('/admin/fedback', [ContactController::class, 'index'])->name('admin.feedback.index');
// Route::post('/admin/fedback/mark-as-read/{id}', [FedbackAdminController::class, 'markAsRead'])->name('admin.feedback.mark-as-read');


// Untuk Dashboard ya gesya
Route::get('/informasi-dashboard', 'App\Http\Controllers\InformasiDashboardController@index')->name('informasi.index');
// Route::get('/informasidetails-dashboard', 'App\Http\Controllers\InformasiDetailsDashboardController@index')->name('informasi-details.index');
Route::get('/informasidetails-dashboard/{id}', [InformasiDetailsDashboardController::class, 'show'])->name('informasi-details.show');


Route::get('/komunitas-dashboard', 'App\Http\Controllers\KomunitasDashboardController@index')->name('komunitas.index');
Route::get('/sarana-dashboard', 'App\Http\Controllers\SaranaDashboardController@index')->name('sarana.index');
Route::get('/jasa_layanan-dashboard', 'App\Http\Controllers\JasadanLayananDashboardController@index')->name('jasa_layanan.index');
Route::get('/penginapan-dashboard', 'App\Http\Controllers\PenginapanDashboardController@index')->name('penginapan.index');
Route::get('/ruangan-dashboard', 'App\Http\Controllers\RuanganDashboardController@index')->name('ruangan.index');
Route::get('/peralatan-dashboard', 'App\Http\Controllers\PeralatanDashboardController@index')->name('peralatan.index');
Route::get('/pembelajaran-dashboard', 'App\Http\Controllers\PembelajaranDashboardController@index')->name('pembelajaran.index');

// kuliner
Route::get('/kulinerwisatadantransportasi/index-kuliner', [KulinerController::class, 'index'])->name('kuliner');

// Kwt
Route::get('/kulinerwisatadantransportasi', [KwtController::class, 'index'])->name('dashboardkuliner.index');

// penginapan
Route::get('/penginapan/padang', [PenginapanController::class, 'padang'])->name('penginapan.padang');
Route::get('/penginapan/suralaya', [PenginapanController::class, 'suralaya'])->name('penginapan.suralaya');
Route::get('/penginapan/jakarta', [PenginapanController::class, 'jakarta'])->name('penginapan.jakarta');
Route::get('/penginapan/semarang', [PenginapanController::class, 'semarang'])->name('penginapan.semarang');
Route::get('/penginapan/pandaan', [PenginapanController::class, 'pandaan'])->name('penginapan.pandaan');
Route::get('/penginapan/bogor', [PenginapanController::class, 'bogor'])->name('penginapan.bogor');

// booking
Route::get('/booking/booking', [PeBookingController::class, 'booking'])->name('booking.penginapan');
Route::get('/booking/create', [PeBookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [PeBookingController::class, 'store'])->name('booking.store');
Route::get('/booking/success', [PeBookingController::class, 'success'])->name('booking.success');

// wisata
Route::get('/kulinerwisatadantransportasi/wisata', [WisataController::class, 'index'])->name('wisata');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-lubukBonta', [WisataController::class, 'lubukBonta'])->name('lubuk-bonta');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-maninjau', [WisataController::class, 'maninjau'])->name('maninjau');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-airManis', [WisataController::class, 'airManis'])->name('airManis');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-gondariah', [WisataController::class, 'gondariah'])->name('gondariah');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-harau', [WisataController::class, 'harau'])->name('harau');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-jamgadang', [WisataController::class, 'jamgadang'])->name('jamgadang');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-lawang', [WisataController::class, 'lawang'])->name('lawang');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-lembahAnai', [WisataController::class, 'lembahAnai'])->name('lembahAnai');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-mesjidRayaSumateraBarat', [WisataController::class, 'mesjidRaya'])->name('mesjidRaya');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-istanapagaruyuang', [WisataController::class, 'pagaruyuang'])->name('pagaruyuang');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-pasirjambak', [WisataController::class, 'pasirJambak'])->name('pasirJambak');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-singkarak', [WisataController::class, 'singkarak'])->name('singkarak');
Route::get('/kulinerwisatadantransportasi/wisata/detail-wisata-tirtaAlami', [WisataController::class, 'tirtaAlami'])->name('tirtaAlami');

// kafe
Route::get('/kulinerwisatadantransportasi/kafe', [KafeController::class, 'index'])->name('kafe');

// hotel
Route::get('/kulinerwisatadantransportasi/hotel', [HotelController::class, 'index'])->name('hotel');

// transportasi
Route::get('/kulinerwisatadantransportasi/transportasi', [TransportasiController::class, 'index'])->name('transportasi');

// poleh
Route::get('/kulinerwisatadantransportasi/poleh', [PolehController::class, 'index'])->name('poleh');

//booking penginapan
Route::post('/submit-booking', [DashboardBookingController::class, 'store'])->name('booking.store');


// Contoh route
Route::get('/admin/feedback/get-status/{id}', 'ContactController@getStatus');


