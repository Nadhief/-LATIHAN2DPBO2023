// package latmo2;

import java.util.Scanner;
import java.util.ArrayList;

// main class
class Main {
    public static void main(String[] args) {
		ArrayList<Mahasiswa> list = new ArrayList<>();
        // membuat objek mahasiswa
        // Mahasiswa mhs = new Mahasiswa("2106413","Nadhief Athallah Isya", "Laki-Laki", "FPMIPA", "Ilmu Komputer", "Nadhiefathllahi@upi.edu", "0007290903");
        Mahasiswa mhs1 = new Mahasiswa("2106413", "Nadhief", "Laki-laki", "FPMIPA", "Ilmu Komputer",
        "Universitas Pendidikan Mahasiswa", "nadhief@upi.edu", "00000000");
        list.add(mhs1);

        Mahasiswa mhs2 = new Mahasiswa("2106413", "Athallah", "Laki-laki", "FPMIPA", "Ilmu Komputer",
        "Universitas Pendidikan Mahasiswa", "nadhief@upi.edu", "111111111");
        list.add(mhs2);

        Mahasiswa mhs3 = new Mahasiswa("2106413", "Isya", "Laki-laki", "FPMIPA", "Ilmu Komputer",
        "Universitas Pendidikan Mahasiswa", "nadhief@upi.edu", "222222222");
        list.add(mhs3);
        for (int i = 0; i < list.size(); i++)
        {
            System.out.println("NIK : " + list.get(1).getNIK());
            System.out.println("Nama : " + list.get(1).getNama());
            System.out.println("Jenis Kelamin : " + list.get(1).getJenisKelamin());
            System.out.println("Fakultas : " + list.get(1).getFakultas());
            System.out.println("Program Studi : " + list.get(1).getProdi());
            System.out.println("Asal Universitas : " + list.get(1).getAsalUniversitas());
            System.out.println("Email Edu : " + list.get(1).getEmailEdu());
            System.out.println("NIM : " + list.get(1).getNIM());
            System.out.println("=====================================");
        }
    }
}