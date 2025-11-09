<?php

namespace TugasNilai;

class Siswa{

    private $nis;
    private $nama;
    private $kelas;

    private $mapel;
    private $guru;

    private $absensi;
    private $tugas;
    private $formatif;
    private $uts;
    private $uas;

    public function __construct($nis, $nama, $kelas){
        $this->nis = $nis;
        $this->nama = $nama;
        $this->kelas = $kelas;

        

        $this->absensi = 0;
        $this->tugas = 0;
        $this->formatif = 0;
        $this->uts = 0;
        $this->uas = 0;
    }

    // Data siswa
    public function setNis($nis){
        $this->nis = $nis;
    }

    public function getNis(): String{
        return $this->nis;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(): String{
        return $this->nama;
    }

    public function setKelas($kelas){
        $this->kelas = $kelas;
    }

    public function getKelas(): String{
        return $this->kelas;
    }

    public function setMapel($mapel){
        $this->mapel = $mapel;
    }

    public function getMapel(): String{
        return $this->mapel;
    }

    public function setGuru($guru){
        $this->guru = $guru;
    }

    public function getGuru(): String{
        return $this->guru;
    }

    // Nilai
    public function setAbsen($hadir, $pertemuan){
        $this->absensi = ($hadir / $pertemuan) * 5;
    }

    public function getAbsen(): float|int{
        if($this->absensi > 5){
            return 0;
        }else{
            return round($this->absensi, 2);
        }
    }

    public function setTugas($value){
        $this->tugas = $value;
    }

    public function getTugas() : float|int{
        return $this->tugas;
    }

    public function setFormatif($value){
        $this->formatif = $value;
    }

    public function getFormatif() : int{
        return $this->formatif;
    }

    public function setUts($value){
        $this->uts = $value;
    }

    public function getUts() : int{
        return $this->uts;
    }

    public function setUas($value){
        $this->uas = $value;
    }

    public function getUas() : int{
        return $this->uas;
    }

    public function nilaiAkhir(){
        $hasil = $this->getAbsen() + ($this->getTugas() * 0.1) + ($this->getFormatif() * 0.15) + ($this->getUts() * 0.3) + ($this->getUas() * 0.4);
        return $hasil;
    }

    public function ket(){
        if($this->nilaiAkhir() >= 75){
            $ktr = "LULUS";
        } else {
            $ktr = "GAGAL";
        }
        return $ktr;
    }

    public function grade(): string{
        $nak = $this->nilaiAkhir();
        if($nak >= 91){
            return $gd = "A";
        } elseif($nak >= 81) {
            return $gd = "B";
        } elseif($nak >= 75) {
            return $gd = "C";
        } elseif($nak >= 50) {
            return $gd ="D";
        } else {
            return "E";
        }
    }
}