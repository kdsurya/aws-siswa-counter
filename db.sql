CREATE DATABASE sekolah;

USE sekolah;

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nis VARCHAR(20),
    nama VARCHAR(100),
    kelas VARCHAR(10)
);

INSERT INTO siswa (nis, nama, kelas) VALUES
('10101', 'Andi Pratama', 'X-TKJ'),
('10102', 'Budi Santoso', 'X-TKJ'),
('10103', 'Citra Lestari', 'X-TKJ');
