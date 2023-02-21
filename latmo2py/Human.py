class Human:
    def __init__(self, NIK, nama, jenis_kelamin):
        self.NIK = NIK
        self.nama = nama
        self.jenis_kelamin = jenis_kelamin
        
    # get NIK
    def get_NIK(self):
        return self.__NIK
    # set NIK
    def set_NIK(self, NIK):
        self.__NIK = NIK
    # get nama
    def get_nama(self):
        return self.__nama
    # set nama
    def set_nama(self, nama):
        self.__nama = nama
    # get jenis_kelamin
    def get_jenis_kelamin(self):
        return self.__jenis_kelamin
    # set jenis_kelamin
    def set_jenis_kelamin(self, jenis_kelamin):
        self.__jenis_kelamin = jenis_kelamin

class SivitasAkademik(Human):
    def __init__(self, NIK, nama, jenis_kelamin, asal_universitas, email_edu):
        super().__init__(NIK, nama, jenis_kelamin)
        self.asal_universitas = asal_universitas
        self.email_edu = email_edu
    
    # get asal_univ   
    def get_asal_univ(self):
        return self.__asal_univ
    # set asal_univ
    def set_asal_univ(self, asal_univ):
        self.__asal_univ = asal_univ
    # get email_edu
    def get_email_edu(self):
        return self.__email_edu
    # set email_edu
    def set_email_edu(self, email_edu):
        self.__email_edu = email_edu

class Mahasiswa(SivitasAkademik):
    def __init__(self, NIK, nama, jenis_kelamin, asal_universitas, email_edu, NIM, fakultas, prodi):
        super().__init__(NIK, nama, jenis_kelamin, asal_universitas, email_edu)
        self.NIM = NIM
        self.fakultas = fakultas
        self.prodi = prodi
        
    # get NIM
    def get_NIM(self):
        return self.__NIM
    # set NIM
    def set_NIM(self, NIM):
        self.__NIM = NIM
    # get fakultas
    def get_fakultas(self):
        return self.__fakultas
    # set fakultas
    def set_fakultas(self, fakultas):
        self.__fakultas = fakultas
    # get jenis_kelamin
    def get_prodi(self):
        return self.__prodi
    # set prodi
    def set_prodi(self, prodi):
        self.__prodi = prodi

    # ini ada method tampil but nampilin data. iseng nyobain eh bisa hehe
    def tampil(self):
        print("Data Mahasiswa")
        print("NIK: ", self.NIK)
        print("Nama: ", self.nama)
        print("Jenis Kelamin: ", self.jenis_kelamin)
        print("Asal Universitas: ", self.asal_universitas)
        print("Email Edu: ", self.email_edu)
        print("NIM: ", self.NIM)
        print("Fakultas: ", self.fakultas)
        print("Program Studi: ", self.prodi)

# contoh penggunaan

