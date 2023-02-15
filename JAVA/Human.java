
// package latmo2;
class Human {
    protected String NIK;
    protected String nama;
    protected String jenis_kelamin;

    public String getNIK() {
        return NIK;
    }

    public String getNama() {
        return nama;
    }

    public String getJenisKelamin() {
        return jenis_kelamin;
    }
}

class SivitasAkademik extends Human {
    protected String asal_universitas;
    protected String email_edu;

    public String getAsalUniversitas() {
        return asal_universitas;
    }

    public String getEmailEdu() {
        return email_edu;
    }
}

class Mahasiswa extends SivitasAkademik {
    protected String NIM;
    protected String fakultas;
    protected String prodi;
    // constructor untuk kelas Mahasiswa

    Mahasiswa(String NIM, String nama, String jenis_kelamin, String fakultas, String prodi,
    String asal_universitas, String email_edu, String NIK) 
    {
        this.NIM = NIM;
        this.nama = nama;
        this.jenis_kelamin = jenis_kelamin;
        this.fakultas = fakultas;
        this.prodi = prodi;
        this.asal_universitas = asal_universitas;
        this.email_edu = email_edu;
        this.NIK = NIK;
    }

    public String getNIM() {
        return NIM;
    }

    public String getFakultas() {
        return fakultas;
    }

    public String getProdi() {
        return prodi;
    } 
}

