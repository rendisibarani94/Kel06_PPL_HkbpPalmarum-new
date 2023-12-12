const axios = require("axios");
const { expect } = require("chai");

describe("Update Registrasi Pernikahan API", () => {
  //bug reporting
  it("should update Registrasi Pernikahan successfully", async () => {
    // Set the parameters for the request
    const requestData = {
      id_registrasi_nikah: 6,
      id_gereja_martumpol: 1,
      tgl_martumpol: "2023-09-07",
      tgl_warta_martumpol: "2023-08-09",
      nama_gereja_martumpol: "HKBP Laguboti",
      nomor_surat_martumpol: "823-542",
      nama_pendeta_martumpol: "Pendeta Baluhap",
      id_gereja_pemberkatan: 1,
      tgl_pemberkatan: "2023-11-17",
      tgl_warta_pemberkatan: "2023-11-17",
      nama_gereja_pemberkatan: "HKBP Balige",
      nomor_surat_pemberkatan: "824-332",
      nama_pendeta_pemberkatan: "Pendeta Martugarang",
      keterangan: "Tidak ada",
      nama_lengkap_laki: "Yansen Januar",
      id_jemaat_laki: 10,
      id_gereja_laki: 1,
      nama_gereja_laki: "HKBP Laguboti",
      nama_ayah_laki: "Myke Tyson",
      nama_ibu_laki: "Jennifer Lawrence",
      nama_lengkap_perempuan: "Theresia Megawati",
      id_jemaat_perempuan: 13,
      id_gereja_perempuan: 1,
      nama_gereja_perempuan: "HKBP Balige",
      nama_ayah_perempuan: "Evande Holyfield",
      nama_ibu_perempuan: "Angeline Jolie",
    };
    // Make the API request using fetch
    const response = await axios.post(
      "http://127.0.0.1:8070/api/updateRegistrasiPernikahan",
      requestData
    );

    // Check the response status
    expect(response.status).to.equal(200); // Assuming a successful response has status 200

    // Check the structure and content of the response data
    // Replace these with your actual response structure and expected values
    expect(response.data).to.have.property("code"); // Check if 'code' property exists
    expect(response.data.code).to.equal("200"); // Assuming the API response structure has a 'code' property with value '200'

    expect(response.data).to.have.property("message"); // Check if 'message' property exists
    expect(response.data.message).to.equal("Success"); // Assuming the API response structure has a 'message' property with value 'Success'
  });
});
