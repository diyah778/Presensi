CREATE DATABASE abc_daycare;

USE abc_daycare;

CREATE TABLE presensi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_anak VARCHAR(100) NOT NULL,
    suhu_badan DECIMAL(4, 2) NOT NULL,
    jam_kedatangan TIME NOT NULL
);