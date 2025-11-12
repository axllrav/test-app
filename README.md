# Aplikasi Nilai Siswa

Latest updates of project app from XI-RPL3 
**WEB DEVELOPMENT** Subject.

> 💬 Next katanya mau pakai **Bootstrap**, tapi udh pada pekael

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
| `nis` | INT | PK | Nomor Induk Siswa |
| `nama` | VARCHAR(100) |  | Nama siswa |
| `kode_kelas` | VARCHAR(10) | FK | Mengacu ke `classes.kode_kelas` |

---

### 🧑‍🏫 `teachers`
| Column | Type | Key | Description |
|---------|------|-----|-------------|
| `kode_guru` | VARCHAR(10) | PK | Kode unik guru |
| `nama_guru` | VARCHAR(100) |  | Nama guru |

---

### 🏫 `classes`
| Column | Type | Key | Description |
|---------|------|-----|-------------|
| `kode_kelas` | VARCHAR(10) | PK | Kode kelas |
| `nama_kelas` | VARCHAR(100) |  | Nama kelas |

---

### 📘 `subjects`
| Column | Type | Key | Description |
|---------|------|-----|-------------|
| `kode_mapel` | VARCHAR(10) | PK | Kode mata pelajaran |
| `nama_mapel` | VARCHAR(100) |  | Nama mata pelajaran |
| `kode_guru` | VARCHAR(10) | FK | Mengacu ke `teachers.kode_guru` |

---

### 🧾 `scores`
| Column | Type | Key | Description |
|---------|------|-----|-------------|
| `kode_nilai` | INT | PK (AUTO_INCREMENT) | Kode unik nilai |
| `nis` | INT | FK | Mengacu ke `students.nis` |
| `kode_mapel` | VARCHAR(10) | FK | Mengacu ke `subjects.kode_mapel` |
| `kehadiran` | INT |  | Nilai kehadiran |
| `tugas` | INT |  | Nilai tugas |
| `formatif` | INT |  | Nilai formatif |
| `uts` | INT |  | Nilai UTS |
| `uas` | INT |  | Nilai UAS |

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
