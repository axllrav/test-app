# Aplikasi Nilai Siswa

## Latest updates of project app from XI-RPL3 (WEB DEVELOPMENT Subject)
### Next katanya mau pake bootstrap, tapi udah pada pekael

Dependency Manager:
PHP Composer https://getcomposer.org/download/


Create new mysql database then create tables:

1. students / siswa
        Strucure:
        nis PK, nama, kode_kelas FK 

2. teachers / guru
        Strucure:
        kode_guru PK, nama_guru

3. classes / kelas
        Strucure:
        kode_kelas PK, nama_kelas

4. subjects / mapel
        Strucure:
        kode_mapel PK, nama_mapel, kode_guru FK

5. scores / nilai
        Strucure:
        kode_nilai PK AUTO_INCREMENT, nis FK, kode_mapel FK, kehadiran, tugas, formatif, uts, uas 
