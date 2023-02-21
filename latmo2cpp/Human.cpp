#include <iostream>
#include <string>
using namespace std;

class Human {
protected:
    string NIK;
    string nama;
    string jenis_kelamin;

public:
    string getNIK() {
        return NIK;
    }

    void setNIK(string NIK)
    {
        this->NIK = NIK;
    }

    string getNama() {
        return nama;
    }

    void setNama(string nama)
    {
        this->nama = nama;
    }

    string getJenisKelamin() {
        return jenis_kelamin;
    }

    void setJenisKelamin(string jenis_kelamin)
    {
        this->jenis_kelamin = jenis_kelamin;
    }
};

class SivitasAkademik : public Human {
protected:
    string asal_universitas;
    string email_edu;

public:
    string getAsalUniversitas() {
        return asal_universitas;
    }

    void setAsalUniversitas(string asal_universitas)
    {
        this->asal_universitas = asal_universitas;
    }

    string getEmailEdu() {
        return email_edu;
    }

    void setEmailEdu(string email_edu)
    {
        this->email_edu = email_edu;
    }
};

class Mahasiswa : public SivitasAkademik {
protected:
    string NIM;
    string fakultas;
    string prodi;

public:
    // constructor untuk kelas Mahasiswa
    Mahasiswa(string NIM, string nama, string jenis_kelamin, string fakultas, string prodi, string asal_universitas, string email_edu, string NIK) {
        this->NIM = NIM;
        this->nama = nama;
        this->jenis_kelamin = jenis_kelamin;
        this->fakultas = fakultas;
        this->prodi = prodi;
        this->asal_universitas = asal_universitas;
        this->email_edu = email_edu;
        this->NIK = NIK;
    }

    string getNIM() {
        return NIM;
    }

    void setNIM(string NIM)
    {
        this->NIM = NIM;
    }

    string getFakultas() {
        return fakultas;
    }

    void setFakultas(string fakultas)
    {
        this->fakultas = fakultas;
    }

    string getProdi() {
        return prodi;
    } 

    void setProdi(string prodi)
    {
        this->prodi = prodi;
    }
};
