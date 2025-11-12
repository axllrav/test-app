# Aplikasi Nilai Siswa

Latest updates of project app from XI-RPL3 

**WEB DEVELOPMENT** Subject.

> Next katanya mau pakai **Bootstrap**, tapi udh pada pekael

---

## 🚀 Tech Stack & Dependencies
- **Language:** PHP  
- **Database:** MySQL  
- **Dependency Manager:** [Composer](https://getcomposer.org/download/)

---

## 🗄️ Database Setup

1. **Create a new MySQL database**, then create the following tables:

### 🧍‍♂️ `students`
| Column | Type | Key | Description |
|---------|------|-----|-------------|
| `nis` | CHAR(9) | PK | Nomor Induk Siswa |
| `nama_siswa` | VARCHAR(50) |  | Nama siswa |
| `kode_kelas` | CHAR(5) | FK | Mengacu ke `classes.kode_kelas` |

---

### 🧑‍🏫 `teachers`
| Column | Type | Key | Description |
|---------|------|-----|-------------|
| `kode_guru` | CHAR(5) | PK | Kode unik guru |
| `nama_guru` | VARCHAR(50) |  | Nama guru |

---

### 🏫 `classes`
| Column | Type | Key | Description |
|---------|------|-----|-------------|
| `kode_kelas` | CHAR(5) | PK | Kode kelas |
| `nama_kelas` | VARCHAR(15) |  | Nama kelas |

---

### 📘 `subjects`
| Column | Type | Key | Description |
|---------|------|-----|-------------|
| `kode_mapel` | CHAR(5) | PK | Kode mata pelajaran |
| `nama_mapel` | VARCHAR(25) |  | Nama mata pelajaran |
| `kode_guru` | CHAR(5) | FK | Mengacu ke `teachers.kode_guru` |

---

### 🧾 `scores`
| Column | Type | Key | Description |
|---------|------|-----|-------------|
| `kode_nilai` | INT | PK (AUTO_INCREMENT) | Kode unik nilai |
| `nis` | CHAR(9) | FK | Mengacu ke `students.nis` |
| `kode_mapel` | CHAR(5) | FK | Mengacu ke `subjects.kode_mapel` |
| `kehadiran` | TINYINT(4) |  | Nilai kehadiran |
| `tugas` | TINYINT(4) |  | Nilai tugas |
| `formatif` | TINYINT(4) |  | Nilai formatif |
| `uts` | TINYINT(4) |  | Nilai UTS |
| `uas` | TINYINT(4) |  | Nilai UAS |

---

## 🧩 Relational Diagram (Conceptual)

teachers ──< subjects ──< scores >── students >── classes


---

## 💡 Notes
- Make sure all tables use **InnoDB** as storage engine (for foreign key support).
- Use consistent **VARCHAR length** for foreign key fields.
- You can import initial data manually via **phpMyAdmin** or using **SQL scripts**.

---

## ✨ Future Improvements
- [ ] Integrate Bootstrap for cleaner UI  
- [ ] Add CRUD interface for each table  
- [ ] Implement user login (admin / teacher)  
- [ ] Export grades to PDF  

---
