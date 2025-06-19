# <p align="center" style="margin-bottom: 0px;">MADAMU</p>
## <p align="center" style="margin-top: 0;">MANAJEMEN DATA ORGANISASI UKM MULTIMEDIA</p>

<p align="center">
  <img src="LOGO-UNSULBAR.png" width="300" alt="Deskripsi gambar" />
</p>

### <p align="center">DAUD</p>
### <p align="center">D0223047</p></br>
### <p align="center">Framework Web Based</p>
### <p align="center">2025</p>

---
## Role dan Fitur
### 1. Admin
**Fokus:** Mengelola keseluruhan sistem dan semua data organisasi
| Fitur | Deskripsi |
| ----------- | ----------- |
| Kelola User | CRUD user (admin, ketua, anggota), ubah role |
| Kelola Anggota | CRUD anggota: nama, alamat, no HP, divisi |
| Kelola Divisi | CRUD divisi organisasi |
| Kelola Kegiatan | CRUD kegiatan organisasi |
| Kelola Anggota Kegiatan | CRUD Anggota Kegiatan |
| Lihat Semua Data | Admin dapat melihat seluruh data user, anggota, dan divisi |

### 2. Ketua
**Fokus:** Melihat dan memantau anggota organisasi
| Fitur | Deskripsi |
| ----------- | ----------- |
| Lihat Daftar Anggota | Menampilkan anggota dalam organisasi |
| Lihat Detail Anggota | Lihat biodata lengkap anggota |
| Lihat Daftar Kegiatan | Lihat kegiatan |
| Kelola Daftar Kegiatan | edit kegiatan |

### 3. Anggota
**Fokus:** Melihat dan memperbarui informasi pribadi
| Fitur | Deskripsi |
| ----------- | ----------- |
| Lihat Profil Sendiri | Data pribadi seperti nama, alamat, no HP, divisi |
| Edit Profil Sendiri | Update nama, alamat, no HP (tidak bisa ganti divisi) |

---
## Tabel-tabel database beserta field dan tipe datanya

### 1. Tabel ```{users}```
| Field | Tipe Data | Keterangan |
| ----------- | ------------- | ---------- |
| id | INT (AUTO\_INCREMENT) | Primary key |
| username | STRING(25) | Nama pengguna |
| email | STRING | email pengguna |
| password | STRING | Password |
| role | ENUM('admin', 'ketua', 'anggota') | Jenis peran |
| created\_at | TIMESTAMP | Waktu dibuat |
| updated\_at | TIMESTAMP | Waktu update terakhir |


### 2. Tabel ```{divisi}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT (AUTO\_INCREMENT) | Primary key |
| nama\_divisi | STRING(100) | Nama divisi |
| created\_at | TIMESTAMP |  Waktu dibuat |
| updated\_at | TIMESTAMP | Waktu update terakhir |


### 3. Tabel ```{anggota}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT (PK) | Primary key |
| user\_id | INT (FK) | Foreign key Relasi ke `users.id` (login & role) |
| nama\_lengkap | STRING(100) | Nama anggota |
| alamat | TEXT | Alamat anggota |
| no\_hp | STRING(20)  | Nomor telepon |
| divisi\_id | INT (FK) | Foreign key Relasi ke `divisi.id` (anggota tergabung ke) |
| created\_at | TIMESTAMP | Waktu dibuat |
| updated\_at | TIMESTAMP | Waktu update terakhir |


### 4. Tabel ```{kegiatan}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT (PK) | Primary key |
| divisi\_id | INT (FK) | Foreign key Relasi ke `divisi.id` |
| nama\_kegiatan | STRING(100) | Nama kegiatan |
| deskripsi | TEXT | penjelasan singkat |
| tanggal| DATE | tanggal kegiatan |
| lokasi | STRING(100) | lokasi kegiatan |
| created\_at | TIMESTAMP | Waktu dibuat |
| updated\_at | TIMESTAMP | Waktu update terakhir |


### 5. Tabel ```{anggota_kegiatan}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT (PK) | Primary key |
| anggota\_id | INT (FK) | Foreign key Relasi ke `anggota.id` |
| kegiatan\_id | INT (FK) | Foreign key Relasi ke `kegiatan.id` |
| created\_at | TIMESTAMP | Waktu dibuat |
| updated\_at | TIMESTAMP | Waktu update terakhir |

---
## Jenis relasi dan tabel yang berelasi
| Tabel Asal | Tabel Tujuan | Jenis Relasi | Keterangan |
| ----------- | ----------- | ----------- | ----------- |
| `anggota`  | `users` | One to One | satu anggota hanya memiliki satu users (akun login)
| `divisi` | `anggota` | One to Many | Satu divisi punya banyak anggota 
| `anggota` | `kegiatan` | Many to Many(Melalui tabel pivot `anggota_kegiatan`) | banyak anggota punya banyak kegiatan 
