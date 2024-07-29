@extends('registrasi.layouts-2.app')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                <div class="main_title_1">
                    <h3>REGISTRASI ANGGOTA</h3>
                    <p>
                        Jadilah bagian dari perubahan! Bergabunglah dengan koperasi
                        kami dan nikmati manfaatnya! Sebagai anggota, Anda akan
                        mendapatkan akses ke berbagai layanan dan dukungan yang
                        dirancang untuk meningkatkan kesejahteraan Anda. Mari kita
                        bersama-sama membangun komunitas yang lebih kuat dan ekonomi
                        yang lebih adil.
                    </p>
                    <p><em>- Rumah Kesejahteraan Indonesia</em></p>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>

                    <form id="wrapped" enctype="multipart/form-data">
                        <input id="website" name="website" type="text" value="" />
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">
                            <div class="step">
                                <h3 class="main_question">
                                    <strong>1 of 8</strong>Data Koperasi
                                </h3>
                                <div class="form-group">
                                    <label for="nis">Masukan NIS</label>
                                    <input type="text" name="nis" id="nis" class="form-control"
                                        placeholder="Masukan NIS" required />
                                </div>
                            </div>
                            <div class="step">
                                <h3 class="main_question">
                                    <strong>2 of 8</strong>Data Pribadi
                                </h3>

                                <div class="row">
                                    <input type="hidden" name="koperasi_name" id="koperasi_name" />
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="no_anggota">No Anggota</label>
                                            <input type="text" name="no_anggota" id="no_anggota" class="form-control"
                                                placeholder="masukan no_anggota" required disabled />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="text" name="nik" id="nik" class="form-control"
                                                placeholder="Masukan Nik" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                        placeholder="Masukan Nama Lengkap" required disabled />
                                </div>

                                <div class="row">
                                    <div class="col-6 pe-2">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat</label>
                                            <input type="text" class="form-control w-100" name="tempat_lahir"
                                                id="tempat_lahir" placeholder="Masukan Tempat Lahir" required />
                                        </div>
                                    </div>
                                    <div class="col-6 ps-2">
                                        <div class="form-group">
                                            <input type="date" class="form-control w-100" name="tanggal_lahir"
                                                id="tanggal_lahir" placeholder="Masukan Tanggal Lahir" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="">Jenis Kelamin</label>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                <input type="radio" name="jenis_kelamin" class="form-check"
                                                    value="laki-laki" checked />
                                                Laki Laki
                                            </div>

                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                <input type="radio" name="jenis_kelamin" class="form-check"
                                                    value="perempuan" checked />
                                                Perempuan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step 1-->

                            <div class="step">
                                <h3 class="main_question mb-4">
                                    <strong>3 of 8</strong>Data Pribadi
                                </h3>

                                <div class="row">
                                    <div class="col-6 pe-2">
                                        <div class="form-group">
                                            {{-- <label for="provinsi">Provinsi</label> --}}
                                            <p class="mb-1">Provinsi</p>
                                            <select id="provinsi" class="form-control" required>
                                                <option value="00" hidden selected>Pilih Provinsi</option>
                                            </select>
                                            <div id="provinsi-error" class="text-danger mt-1 hidden"></div>
                                        </div>
                                    </div>
                                    <div class="col-6 ps-2">
                                        <div class="form-group">
                                            {{-- <label for="kota">Kab/Kota</label> --}}
                                            <p class="mb-1">Kabupaten/Kota</p>
                                            <select id="kota" class="form-control" required>
                                                <option value="00" hidden selected>Pilih Kabuptaen/Kota</option>
                                            </select>
                                            <div id="kota-error" class="text-danger mt-1 hidden"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 pe-2">
                                        <div class="form-group">
                                            {{-- <label for="kecamatan">Kecamatan</label> --}}
                                            <p class="mb-1">Kecamatan</p>
                                            <select id="kecamatan" class="form-control" required>
                                                <option value="00" hidden selected>Pilih Kecamatan</option>
                                            </select>
                                            <div id="kecamatan-error" class="text-danger mt-1 hidden"></div>
                                        </div>
                                    </div>
                                    <div class="col-6 ps-2">
                                        <div class="form-group">
                                            {{-- <label for="kelurahan">Kelurahan/Desa</label> --}}
                                            <p class="mb-1">Kelurahan/Desa</p>
                                            <select id="kelurahan" class="form-control" required>
                                                <option value="00" hidden selected>Pilih Kelurahan/Desa</option>
                                            </select>
                                            <div id="kelurahan-error" class="text-danger mt-1 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kode_pos">Kode Pos</label>
                                    <input type="text" name="kode_pos" id="kode_pos" class="form-control"
                                        placeholder="Masukan Kode Pos" required />
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat jika tidak sesuai KTP</label>
                                    <textarea name="alamat" id="alamat" class="form-control" style="height: 8rem" placeholder="Masukan Alamat"></textarea>
                                </div>

                            </div>
                            <!-- /step 2-->

                            <div class="step">
                                <h3 class="main_question">
                                    <strong>4 of 8</strong>Data Pribadi
                                </h3>

                                <div class="row">
                                    <div class="col-6 pe-2">
                                        <div class="form-group">
                                            <label for="nomor_hp">No. HP (WhatsApp)</label>
                                            <input type="text" name="nomor_hp" id="nomor_hp" class="form-control"
                                                placeholder="Masukan No HP" required />
                                        </div>
                                    </div>

                                    <div class="col-6 ps-2">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Masukan Email" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 pe-2">
                                        <div class="form-group">
                                            {{-- <label for="status_pernikahan">Status Perkawinan</label> --}}
                                            <p class="mb-1">Status Perkawinan</p>
                                            <select name="status_pernikahan" id="status_pernikahan" class="form-control">
                                                <option value="00" hidden>Pilih Status Perkawinan</option>
                                                <option value="belum kawin">Belum Kawin</option>
                                                <option value="sudah kawin">Sudah Kawin</option>
                                                <option value="cerai mati">Cerai Mati</option>
                                                <option value="cerai hidup">Cerai Hidup</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6 ps-2">
                                        <div class="form-group">
                                            {{-- <label for="agama">Agama</label> --}}
                                            <p class="mb-1">Agama</p>
                                            <select name="agama" id="agama" class="form-control">
                                                <option value="00" hidden>Pilih Agama</option>
                                                <option value="islam">Islam</option>
                                                <option value="protestan">Protestan</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                                <option value="konghucu">Konghucu</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control"
                                        placeholder="Masukan Pekerjaan" required />
                                </div>
                                <div class="form-group">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan" id="kewarganegaraan"
                                        class="form-control" placeholder="Masukan Kewarganegaraan" required />
                                </div>
                            </div>
                            <!-- /step 3-->
                            <div class="step">
                                <h3 class="main_question">
                                    <strong>4 of 8</strong>Data Pasangan
                                </h3>

                                <div class="row">
                                    <div class="col-6 pe-2">
                                        <div class="form-group">
                                            <label for="nama_pasangan">Nama Suami/Istri</label>
                                            <input type="text" name="nama_pasangan" id="nama_pasangan"
                                                class="form-control" placeholder="Masukan Nama Suami / Istri" required />
                                        </div>
                                    </div>

                                    <div class="col-6 ps-2">
                                        <div class="form-group">
                                            <label for="usia_pasangan">Usia Suami/Istri</label>
                                            <input type="number" name="usia_pasangan" id="usia_pasangan"
                                                class="form-control" placeholder="Masukan Usia" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 pe-2">
                                        <div class="form-group">
                                            <label for="pekerjaan_pasangan">Pekerjaan Suami/Istri</label>
                                            <input type="text" name="pekerjaan_pasangan" id="pekerjaan_pasangan"
                                                class="form-control" placeholder="Masukan Pekerjaan" required />
                                        </div>
                                    </div>

                                    <div class="col-6 ps-2">

                                        <div class="form-group">
                                            <label for="pendidikan_pasangan">Pendidikan Suami/Istri</label>
                                            <input type="text" name="pendidikan_pasangan" id="pendidikan_pasangan"
                                                class="form-control" placeholder="Masukan Kewarganegaraan" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h3 class="main_question">
                                    <strong>5 of 8</strong>Anggota Keluarga
                                </h3>
                                <button onclick="tambahAnggotaKeluarga()" class="btn btn-success mb-3">Tambah
                                    Data</button>
                                <div id="keluargaList">
                                    <!-- Daftar Anggota Keluarga yang Ditambahkan akan muncul di sini -->
                                </div>

                            </div>
                            <div class="step">
                                <h3 class="main_question">
                                    <strong>6 of 8</strong>Riwayat Pendidikan
                                </h3>
                                <button onclick="tambahPendidikan()" class="btn btn-success mb-3">Tambah
                                    Data</button>
                                <div id="pendidikanList">
                                    <!-- Daftar Pendidikan yang Ditambahkan akan muncul di sini -->
                                </div>

                            </div>
                            <div class="step">
                                <h3 class="main_question">
                                    <strong>7 of 8</strong>Riwayat Pekerjaan
                                </h3>
                                <button onclick="tambahPekerjaan()" class="btn btn-success mb-3">Tambah
                                    Data</button>
                                <div id="pekerjaanList">
                                    <!-- Daftar Pekerjaan yang Ditambahkan akan muncul di sini -->
                                </div>

                            </div>
                            <div class="submit step">
                                <h3 class="main_question">
                                    <strong>8 of 8</strong>Foto Pribadi
                                </h3>

                                <div class="form-group">
                                    <label for="ktp">Foto KTP</label>
                                    <input type="file" name="ktp" id="ktp" class="form-control px-4"
                                        style="height: auto !important; padding-top: 15px !important; padding-bottom: 15px !important;"
                                        onchange="convertBase64ktp()" accept="image/jpeg, image/jpg, image/png"
                                        required />
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Foto pribadi</label>
                                    <div class="">
                                        <img src="/assets/images/selfie.JPG" alt="selfie" width="150"
                                            height="150" class="d-block mx-auto mb-3" style="border-radius: 10%" />
                                        <input type="file" name="selfie" id="selfie"
                                            class="form-control form-control px-4" onchange="convertBase64selfie()"
                                            style=" height: auto !important; padding-top: 15px !important; padding-bottom: 15px !important;"
                                            accept="image/jpeg, image/png, image/jpg" required />
                                    </div>
                                </div>
                            </div>
                            <!-- /step 4-->
                        </div>

                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">
                                Kembali
                            </button>
                            <button type="button" name="forward" class="forward" onclick="validateStep()" hidden>
                                Selanjutnya
                            </button>
                            <button type="button" name="process" id="button-submit" class="submit"
                                onclick="saveData()">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/function.js') }}"></script>
    <script>
        let baseStringSelfie;
        let baseStringKtp;
        let anggotaKeluarga = [];
        let pendidikanData = [];
        let pekerjaanData = [];
        let type1;
        let type2;
        let id_koperasi;
        let id_anggota;

        window.addEventListener("load", () => {
            getProvince();
        });

        function renderAnggotaKeluarga() {
            const keluargaList = document.getElementById('keluargaList');
            keluargaList.innerHTML = '';
            anggotaKeluarga.forEach((anggota, index) => {
                const anggotaKeluargaCard = document.createElement('div');
                anggotaKeluargaCard.className = 'card pengawas-card';
                anggotaKeluargaCard.innerHTML = `
                <div class="card">
                    <div class="card-body row">
                        <div class="col-6">
                            <h5 class="card-title">${anggota.nama_keluarga}</h5>
                            <p class="text-dark">${anggota.status}</p>
                            <p class="text-dark">${anggota.pendidikan}</p>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-warning btn-sm" onclick="editAnggotaKeluarga(${index})" >Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteAnggotaKeluarga(${index})">Delete</button>
                        </div>
                    </div>
                </div>
            `;
                keluargaList.appendChild(anggotaKeluargaCard);
            });
        }

        function tambahAnggotaKeluarga() {
            swal({
                title: "Tambah Anggota Keluarga",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: `
                                <input id="swal-input1" class="swal-content__input" placeholder="Masukan Nama Anggota Keluarga">
                                <select id="swal-input2" class="swal-content__input" placeholder="Masukan Status Anggota Keluarga">
                                    <option value="ayah">Ayah</option>
                                    <option value="ibu">Ibu</option>
                                    <option value="anak">Anak</option>
                                </select>
                                <select id="swal-input3" class="swal-content__input" placeholder="Masukan Pendidikan Terakhir">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                                <input id="swal-input4" class="swal-content__input" placeholder="Masukan Tempat lahir">
                                <input id="swal-input5" type="date" class="swal-content__input" placeholder="Masukan tanggal lahir">
                            `
                    },
                },
                buttons: {
                    cancel: true,
                    confirm: {
                        text: "Tambah",
                        closeModal: false,
                    }
                },
            }).then((isConfirm) => {
                if (isConfirm) {
                    const nama_keluarga = document.getElementById('swal-input1').value;
                    const status = document.getElementById('swal-input2').value;
                    const pendidikan = document.getElementById('swal-input3').value;
                    const tempat_lahir = document.getElementById('swal-input4').value;
                    const tanggal_lahir = document.getElementById('swal-input5').value;

                    if (!nama_keluarga || !status || !pendidikan || !tempat_lahir || !tanggal_lahir ) {
                        swal.showValidationError('Semua bidang harus diisi');
                        return false;
                    }

                    anggotaKeluarga.push({
                        nama_keluarga,
                        status,
                        pendidikan,
                        tempat_lahir,
                        tanggal_lahir,
                    });
                    renderAnggotaKeluarga();
                    console.log(anggotaKeluarga)

                    swal.close();
                }
            });
        }

        function editAnggotaKeluarga(index) {
            const anggota = anggotaKelurga[index];
            swal({
                title: "Edit Anggot Keluarga",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: `
                        <input id="swal-input1" class="swal-content__input" value="${anggota.nama_keluarga}" placeholder="Masukan nama anggota keluarga">
                        <select id="swal-input2" class="swal-content__input" placeholder="Masukan Status Anggota Keluarga">
                            <option value="ayah">Ayah</option>
                            <option value="ibu">Ibu</option>
                            <option value="anak">Anak</option>
                        </select>
                        <select id="swal-input3" class="swal-content__input" placeholder="Masukan Pendidikan Terakhir">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="Diploma">Diploma</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                        <input id="swal-input4" class="swal-content__input" value="${anggota.tempat_lahir}" placeholder="masukan tempat lahir">
                        <input id="swal-input5" type="date" class="swal-content__input" value="${anggota.tanggal_lahir}" placeholder="Masukan tanggal lahir">
                    `
                    },
                },
                buttons: {
                    cancel: true,
                    confirm: {
                        text: "Update",
                        closeModal: false,
                    }
                },
            }).then((isConfirm) => {
                if (isConfirm) {
                    const nama_keluarga = document.getElementById('swal-input1').value;
                    const status = document.getElementById('swal-input2').value;
                    const pendidikan = document.getElementById('swal-input3').value;
                    const tempat_lahir = document.getElementById('swal-input4').value;
                    const tanggal_lahir = document.getElementById('swal-input5').value;

                    if (!nama_keluarga || !status || !pendidikan || !tempat_lahir || !tanggal_lahir) {
                        swal.showValidationError('Semua bidang harus diisi');
                        return false;
                    }

                    anggotaKelurga[index] = {
                        nama_keluarga,
                        status,
                        pendidikan,
                        tempat_lahir,
                        tanggal_lahir,
                    };
                    renderAnggotaKeluarga();
                    swal.close();
                }
            });
        }

        function deleteAnggotaKeluarga(index) {
            anggotaKeluarga.splice(index, 1);
            renderAnggotaKeluarga();
        }

        function renderPendidikan() {
            const pendidikanList = document.getElementById('pendidikanList');
            pendidikanList.innerHTML = '';
            pendidikanData.forEach((pendidikan, index) => {
                const pendidikanCard = document.createElement('div');
                pendidikanCard.className = 'card pengawas-card';
                pendidikanCard.innerHTML = `
                <div class="card">
                    <div class="card-body row">
                        <div class="col-6">
                            <h5 class="card-title">${pendidikan.nama_institusi}</h5>
                            <p class="text-dark">${pendidikan.jurusan}</p>
                            <p class="text-dark">${pendidikan.tahun_lulus}</p>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-warning btn-sm" onclick="editPendidikan(${index})" >Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deletePendidikan(${index})">Delete</button>
                        </div>
                    </div>
                </div>
            `;
                pendidikanList.appendChild(pendidikanCard);
            });
        }

        function tambahPendidikan() {
            swal({
                title: "Tambah Pendidikan",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: `
                                <input id="swal-input1" class="swal-content__input" placeholder="Masukan Nama Institusi">
                                <input id="swal-input2" class="swal-content__input" placeholder="Masukan Jurusan">
                                <input id="swal-input3" type="number" class="swal-content__input" placeholder="Masukan Tahun Lulus">
                            `
                    },
                },
                buttons: {
                    cancel: true,
                    confirm: {
                        text: "Tambah",
                        closeModal: false,
                    }
                },
            }).then((isConfirm) => {
                if (isConfirm) {
                    const nama_institusi = document.getElementById('swal-input1').value;
                    const jurusan = document.getElementById('swal-input2').value;
                    const tahun_lulus = document.getElementById('swal-input3').value;

                    if (!nama_institusi || !jurusan || !tahun_lulus ) {
                        swal.showValidationError('Semua bidang harus diisi');
                        return false;
                    }

                    pendidikanData.push({
                        nama_institusi,
                        jurusan,
                        tahun_lulus,
                    });
                    renderPendidikan();
                    console.log(pendidikanData)

                    swal.close();
                }
            });
        }

        function editPendidikan(index) {
            const pendidikan = pendidikanData[index];
            swal({
                title: "Edit Pendidikan",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: `
                        <input id="swal-input1" class="swal-content__input" value="${pendidikan.nama_institusi}" placeholder="Masukan Nama Institusi">
                        <input id="swal-input2" class="swal-content__input value="${pendidikan.jurusan}" placeholder="Masukan Jurusan">
                        <input id="swal-input2" class="swal-content__input" value="${pendidikan.tahun_lulus}" placeholder="Masukan Tahun Lulus">
                    `
                    },
                },
                buttons: {
                    cancel: true,
                    confirm: {
                        text: "Update",
                        closeModal: false,
                    }
                },
            }).then((isConfirm) => {
                if (isConfirm) {
                    const nama_institusi = document.getElementById('swal-input1').value;
                    const jurusan = document.getElementById('swal-input2').value;
                    const tahun_lulus = document.getElementById('swal-input3').value;

                    if (!nama_institusi || !jurusan || !tahun_lulus ) {
                        swal.showValidationError('Semua bidang harus diisi');
                        return false;
                    }

                    pendidikanData[index] = {
                        nama_institusi,
                        jurusan,
                        pendidikan,
                        tahun_lulus,
                    };
                    renderPendidikan();
                    swal.close();
                }
            });
        }

        function deletePendidikan(index) {
            pendidikanData.splice(index, 1);
            renderPendidikan();
        }

        function renderPekerjaan() {
            const pekerjaanList = document.getElementById('pekerjaanList');
            pekerjaanList.innerHTML = '';
            pekerjaanData.forEach((pekerjaan, index) => {
                const pekerjaanCard = document.createElement('div');
                pekerjaanCard.className = 'card pengawas-card';
                pekerjaanCard.innerHTML = `
                <div class="card">
                    <div class="card-body row">
                        <div class="col-6">
                            <h5 class="card-title">${pekerjaan.nama_perusahaan}</h5>
                            <p class="text-dark">${pekerjaan.alamat_perusahaan}</p>
                            <p class="text-dark">${pekerjaan.periode_kerja_awal}</p>
                            <p class="text-dark">${pekerjaan.periode_kerja_akhir}</p>
                            <p class="text-dark">${pekerjaan.gaji_terakhir}</p>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-warning btn-sm" onclick="editPekerjaan(${index})" >Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deletePekerjaan(${index})">Delete</button>
                        </div>
                    </div>
                </div>
            `;
                pekerjaanList.appendChild(pekerjaanCard);
            });
        }

        function tambahPekerjaan() {
            swal({
                title: "Tambah Pekerjaan",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: `
                                <input id="swal-input1" class="swal-content__input" placeholder="Masukan Nama Perusahaan">
                                <input id="swal-input2" class="swal-content__input" placeholder="Masukan alamat_perusahaan">
                                <input id="swal-input3" type="date" class="swal-content__input" placeholder="Masukan Periode Kerja Awal">
                                <input id="swal-input4" type="date" class="swal-content__input" placeholder="Masukan Periode Kerja Akhir">
                                <input id="swal-input5" class="swal-content__input" placeholder="Masukan Gaji Terakhir">
                            `
                    },
                },
                buttons: {
                    cancel: true,
                    confirm: {
                        text: "Tambah",
                        closeModal: false,
                    }
                },
            }).then((isConfirm) => {
                if (isConfirm) {
                    const nama_perusahaan = document.getElementById('swal-input1').value;
                    const alamat_perusahaan = document.getElementById('swal-input2').value;
                    const periode_kerja_awal = document.getElementById('swal-input3').value;
                    const periode_kerja_akhir = document.getElementById('swal-input4').value;
                    const gaji_terakhir = document.getElementById('swal-input5').value;

                    if (!nama_perusahaan || !alamat_perusahaan || !periode_kerja_awal || !periode_kerja_akhir || !gaji_terakhir ) {
                        swal.showValidationError('Semua bidang harus diisi');
                        return false;
                    }

                    pekerjaanData.push({
                        nama_perusahaan,
                        alamat_perusahaan,
                        periode_kerja_awal,
                        periode_kerja_akhir,
                        gaji_terakhir
                    });
                    renderPekerjaan();
                    console.log(pekerjaanData)
                    swal.close();
                }
            });
        }

        function editPekerjaan(index) {
            const pekerjaan = PekerjaanData[index];
            swal({
                title: "Edit Pekerjaan",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: `
                        <input id="swal-input1" class="swal-content__input" value="${pekerjaan.nama_perusahaan}" placeholder="Masukan Nama Perusahaan">
                        <input id="swal-input2" class="swal-content__input value="${pekerjaan.alamat_perusahaan}" placeholder="Masukan Alamat Perusahaan">
                        <input id="swal-input3" type="date" class="swal-content__input" value="${pekerjaan.periode_kerja_awal}" placeholder="Masukan Periode Awal">
                        <input id="swal-input4" type="date" class="swal-content__input" value="${pekerjaan.periode_kerja_akhir}" placeholder="Masukan Periode Akhir">
                        <input id="swal-input5" type="date" class="swal-content__input" value="${pekerjaan.gaji_terakhir}" placeholder="Masukan Gaji Terakhir">
                    `
                    },
                },
                buttons: {
                    cancel: true,
                    confirm: {
                        text: "Update",
                        closeModal: false,
                    }
                },
            }).then((isConfirm) => {
                if (isConfirm) {
                    const nama_perusahaan = document.getElementById('swal-input1').value;
                    const alamat_perusahaan = document.getElementById('swal-input2').value;
                    const periode_kerja_awal = document.getElementById('swal-input3').value;
                    const periode_kerja_akhir = document.getElementById('swal-input4').value;
                    const gaji_terakhir = document.getElementById('swal-input5').value;

                    if (!nama_perusahaan || !alamat_perusahaan || !periode_kerja_awal || !periode_kerja_akhir || !gaji_terakhir ) {
                        swal.showValidationError('Semua bidang harus diisi');
                        return false;
                    }

                    pekerjaanData[index] = {
                        nama_perusahaan,
                        alamat_perusahaan,
                        periode_kerja_awal,
                        periode_kerja_akhir,
                        gaji_terakhir,
                    };
                    renderPekerjaan();
                    swal.close();
                }
            });
        }

        function deletePekerjaan(index) {
            pekerjaanData.splice(index, 1);
            renderPekerjaan();
        }

        document.getElementById('nis').addEventListener('change', function() {
            const nis = this.value;
            if (nis) {
                fetch(`/api/anggota/verifikasi-nis/${nis}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data)
                        if (data.response_code !== '00') {
                            alert(data.response_message);
                        } else {
                            document.getElementById('nama_lengkap').value = data.response_message.nama_lengkap;
                            document.getElementById("no_anggota").value = data.response_message.no_anggota;
                            document.getElementById("nomor_hp").value = data.response_message.nomor_hp;
                            // Enable next step
                            document.querySelector('button[name="forward"]').hidden = false;
                            document.getElementById('nis').disabled = true;
                            id_koperasi = data.response_message.id_koperasi
                            id_anggota = data.response_message.id
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        });

        function convertBase64selfie() {
            var fl = document.getElementById("selfie").files[0];
            type1 = fl.type.split("/")[1];
            var reader = new FileReader();
            reader.onloadend = function() {
                baseStringSelfie = reader.result;
            };
            reader.readAsDataURL(fl);
        }

        function convertBase64ktp() {
            var flt = document.getElementById("ktp").files[0];
            type2 = flt.type.split("/")[1];
            var reader = new FileReader();
            reader.onloadend = function() {
                baseStringKtp = reader.result;
            };
            reader.readAsDataURL(flt);
        }

        function saveData() {
            var no_anggota = document.getElementById("no_anggota").value;
            var nis = document.getElementById("nis").value;
            var nik = document.getElementById("nik").value;
            var nama_pasangan = document.getElementById('nama_pasangan').value;
            var usia_pasangan = document.getElementById('usia_pasangan').value;
            var pekerjaan_pasangan = document.getElementById('pekerjaan_pasangan').value;
            var pendidikan_pasangan = document.getElementById('pendidikan_pasangan').value;
            var nama_lengkap = document.getElementById("nama_lengkap").value;
            var tempat_lahir = document.getElementById("tempat_lahir").value;
            var tanggal_lahir = document.getElementById("tanggal_lahir").value;
            var jenis_kelamin = document.querySelector('input[name="jenis_kelamin"]:checked').value;
            var kelurahan = document.getElementById("kelurahan").value;
            var kecamatan = document.getElementById("kecamatan").value;
            var kota = document.getElementById("kota").value;
            var provinsi = document.getElementById("provinsi").value;
            var kode_pos = document.getElementById("kode_pos").value;
            var agama = document.getElementById("agama").value;
            var status_pernikahan = document.getElementById("status_pernikahan").value;
            var pekerjaan = document.getElementById("pekerjaan").value;
            var kewarganegaraan = document.getElementById("kewarganegaraan").value;
            var alamat = document.getElementById("alamat").value;
            var nomor_hp = document.getElementById("nomor_hp").value;
            var email = document.getElementById("email").value;
            var image_selfie = baseStringSelfie;
            var image_ktp = baseStringKtp;
            var validselfie = document.getElementById("selfie").files[0];
            var validktp = document.getElementById("ktp").files[0];
            if (validselfie == "" || validktp == "" || provinsi == '00' || kota == '00' || kecamatan == '00' || kelurahan ==
                '00') {
                swal({
                    title: "Perhatian!",
                    text: "Pastikan semua data terisi!",
                    icon: "info",
                    buttons: true,
                });
                return false;
            }
            swal({
                title: "Please wait",
                text: "Submitting data...",
                // icon: "/assets/images/loading.gif",
                button: false,
                closeOnClickOutside: false,
                closeOnEsc: false,
                className: "swal-loading",
            });
            var jsondata = {
                no_anggota,
                nis,
                nik: nik,
                nama_lengkap: nama_lengkap,
                tempat_lahir: tempat_lahir,
                tanggal_lahir: tanggal_lahir,
                jenis_kelamin: jenis_kelamin,
                kelurahan: kelurahan,
                kecamatan: kecamatan,
                kota: kota,
                provinsi: provinsi,
                kode_pos: kode_pos,
                agama: agama,
                status_pernikahan: status_pernikahan,
                pekerjaan: pekerjaan,
                kewarganegaraan: kewarganegaraan,
                alamat: alamat,
                nomor_hp: nomor_hp,
                email: email,
                nama_pasangan,
                usia_pasangan,
                pekerjaan_pasangan,
                pendidikan_pasangan,
                anggotaKeluarga,
                pendidikanData,
                pekerjaanData,
                selfie: image_selfie?.split(",")[1],
                ktp: image_ktp?.split(",")[1],
                type1: type1,
                type2: type2,
                id_koperasi: id_koperasi,
            };

            fetch(`/api/register/anggota/update-insert-anggota/${id_anggota}`, {
                    headers: {
                        "Access-Control-Allow-Origin": "*",
                        "Content-Type": "application/json",
                    },
                    method: "POST",
                    body: JSON.stringify(jsondata),
                })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data)
                    swal.close();
                    if (data.response_code == "00") {
                        swal({
                            title: "Status Registrasi",
                            text: data?.response_message,
                            icon: "success",
                            buttons: true,
                        }).then((willOut) => {
                            if (willOut) {
                                window.location.href = "/";
                            } else {
                                console.log("error");
                            }
                        });
                    } else {
                        swal({
                            title: "Status Registrasi",
                            text: data?.response_message,
                            icon: "error",
                            buttons: true,
                        }).then((willOut) => {
                            if (willOut) {} else {
                                console.log("error");
                            }
                        });
                    }
                })
                .catch((error) => {
                    swal.close();
                    console.log(error)
                    swal({
                        title: "Status Registrasi",
                        text: err,
                        icon: "info",
                        buttons: true,
                    }).then((willOut) => {
                        if (willOut) {
                            //window.location.href = "/registrasi/rki/" + tingkatan_koperasi;
                        } else {
                            console.log("error");
                        }
                    });
                });
        }
    </script>
@endpush
