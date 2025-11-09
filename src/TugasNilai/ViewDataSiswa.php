<?php

namespace TugasNilai;

use TugasNilai\Siswa;

class ViewDataSiswa extends Siswa {

    public function showData(): string{
        $nis = $this->getNis();
        $nama = $this->getNama();
        $kelas = $this->getKelas();
        return "<table rules='all' border='' cellpadding='4'>
		<caption>Data nilai siswa</caption>
				<tr>
					<td>NIS</td>
					<td colspan='6'>$nis</td>
					<td bgcolor=#1AED35>Nilai Akhir</td>
					<td width='75' bgcolor='green' align='center'>Grade</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td colspan='6'>$nama</td>
					<td rowspan='2' align='center'>".$this->nilaiAkhir()."</td>
					<td align='center' rowspan='5'>".$this->grade()."</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td colspan='6'>$kelas</td>
				</tr>
				<tr>
					<td colspan='8' bgcolor='green'></td>
				</tr>
				<tr>
					<td width='100' bgcolor=#E8DB00 align='center'>Mapel</td>
					<td width='100' bgcolor=#E8DB00 align='center'>Guru</td>
					<td width='100' bgcolor=#E8DB00 align='center'>Kehadiran</td>
					<td width='100' bgcolor=#E8DB00 align='center'>Tugas</td>
					<td width='100' bgcolor=#E8DB00 align='center'>Formatif</td>
					<td width='100' bgcolor=#E8DB00 align='center'>UTS</td>
					<td width='100' bgcolor=#E8DB00 align='center'>UAS</td>
					<td rowspan='2' align='center'>".$this->ket()."</td>
				</tr>
				<tr>
					<td align='center'>".$this->getMapel()."</td>
					<td align='center'>".$this->getGuru()."</td>
					<td align='center'>".$this->getAbsen()."</td>
					<td align='center'>".$this->getTugas()."</td>
					<td align='center'>".$this->getFormatif()."</td>
					<td align='center'>".$this->getUts()."</td>
					<td align='center'>".$this->getUas()."</td>
				</tr>
	</table>";
    }

}