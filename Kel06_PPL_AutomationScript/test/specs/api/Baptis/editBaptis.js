const axios = require('axios');
const { expect } = require('chai');

describe('Add Baptis API', () => {
    it('should add Registrasi Baptis successfully', async () => {
      // Set the parameters for the request
      const requestData = {
        id_registrasi_baptis: 43,
        nama_ayah: "J. Sibarani",
        nama_ibu: "A. Silaen",
        nama_lengkap: "Rany",
        tempat_lahir: "Laguboti",
        tanggal_lahir: "2023-06-23",
        alamat: "Laguboti",
        tanggal_baptis: "2023-06-17",
        jenis_kelamin: "Laki-Laki",
        id_pendeta: 4,
        keterangan: "testing12"
      }
                // Make the API request using fetch
                const response = await axios.post('http://127.0.0.1:8070/api/updateBaptis', requestData);
  
      // Check the response status
    expect(response.status).to.equal(200); // Assuming a successful response has status 200

    // Check the structure and content of the response data
    // Replace these with your actual response structure and expected values
    expect(response.data).to.have.property('code'); // Check if 'code' property exists
    expect(response.data.code).to.equal('200'); // Assuming the API response structure has a 'code' property with value '200'

    expect(response.data).to.have.property('message'); // Check if 'message' property exists
    expect(response.data.message).to.equal('Success'); // Assuming the API response structure has a 'message' property with value 'Success'
    });
  });