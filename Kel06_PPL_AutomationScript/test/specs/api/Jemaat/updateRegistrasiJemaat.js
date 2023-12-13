const axios = require("axios");
const { expect } = require("chai");

describe("Update Registrasi Jemaat Gereja API", () => {
  it("should Update Registrasi Jemaat Gereja successfully", async () => {
    const requestData = {
      id_jemaat: 21,
      id_registrasi: 7,
      nama_depan: "Ray Agian",
      nama_belakang: "Sialahi",
      gelar_depan: "",
      gelar_belakang: "",
      tempat_lahir: "Pandan, Tapanuli Tengah",
      tanggal_lahir: "2003-09-07",
      jenis_kelamin: "Laki-laki",
      id_hub_keluarga: 3,
      id_pendidikan: 5,
      id_bidang_pendidikan: 4,
      id_pekerjaan: 8,
      nama_pekerjaan_lain: "Mahasiswa",
      gol_darah: "O",
      alamat: "Jl. bau Pandan, Tapanuli Tengah",
      no_telepon: "082176742983",
      keterangan: "Tidak ada",
    };
    const response = await axios.post(
      "http://127.0.0.1:8070/api/updateRegistrasiJemaat",
      requestData
    );
    expect(response.status).to.equal(200); // Assuming a successful response has status 200
    expect(response.data).to.have.property("code"); // Check if 'code' property exists
    expect(response.data.code).to.equal("200"); // Assuming the API response structure has a 'code' property with value '200'
    expect(response.data).to.have.property("message"); // Check if 'message' property exists
    expect(response.data.message).to.equal("Success"); // Assuming the API response structure has a 'message' property with value 'Success'
  });
});
