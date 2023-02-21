#include <iostream>
#include <string>
#include "Human.cpp"
using namespace std;

int main() {
    Mahasiswa mhs1("2106413", "Nadhief", "Laki-laki", "FPMIPA", "Ilmu Komputer",
        "Universitas Pendidikan Mahasiswa", "nadhief@upi.edu", "00000000");
    
    cout << "NIM: " << mhs1.getNIM() << endl;
    cout << "Nama: " << mhs1.getNama() << endl;
    cout << "Jenis Kelamin: " << mhs1.getJenisKelamin() << endl;
    cout << "Fakultas: " << mhs1.getFakultas() << endl;
    cout << "Program Studi: " << mhs1.getProdi() << endl;
    cout << "Asal Universitas: " << mhs1.getAsalUniversitas() << endl;
    cout << "Email Edu: " << mhs1.getEmailEdu() << endl;
    cout << "NIK: " << mhs1.getNIK() << endl;

    Mahasiswa mhs2("2106413", "Nadhief", "Laki-laki", "FPMIPA", "Ilmu Komputer",
        "Universitas Pendidikan Mahasiswa", "nadhief@upi.edu", "111111111");
    
    cout << "NIM: " << mhs2.getNIM() << endl;
    cout << "Nama: " << mhs2.getNama() << endl;
    cout << "Jenis Kelamin: " << mhs2.getJenisKelamin() << endl;
    cout << "Fakultas: " << mhs2.getFakultas() << endl;
    cout << "Program Studi: " << mhs2.getProdi() << endl;
    cout << "Asal Universitas: " << mhs2.getAsalUniversitas() << endl;
    cout << "Email Edu: " << mhs2.getEmailEdu() << endl;
    cout << "NIK: " << mhs2.getNIK() << endl;

    return 0;
}