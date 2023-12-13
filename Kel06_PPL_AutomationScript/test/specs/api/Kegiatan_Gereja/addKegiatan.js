const axios = require('axios');
const { expect } = require('chai');

describe('Add Baptis API', () => {
  it('should add Registrasi Baptis successfully', async () => {
    // Set the parameters for the request
    const requestData = {
      //id_registrasi_baptis: 11,
        nama_jenis_kegiatan: "Ibadah Tahun Baru",
        lokasi_kegiatan: "Auditorium",
        keterangan: "Diikuti semua jemaat",
        tanggal_kegiatan: "2023-06-23",
        waktu_kegiatan: "15/00",
    };

    try {
      // Make the API request using fetch
      const response = await axios.post('http://127.0.0.1:8070/api/storeKegiatan', requestData);

      // Log the request payload and response
      console.log('Request Payload:', requestData);
      console.log('API Response:', response.data);

      // Check the response status
      expect(response.status).to.equal(200); // Assuming a successful response has status 200

      // Check the structure and content of the response data
      // Replace these with your actual response structure and expected values
      expect(response.data).to.have.property('code'); // Check if 'code' property exists
      expect(response.data.code).to.equal('200'); // Assuming the API response structure has a 'code' property with value '200'

      expect(response.data).to.have.property('message'); // Check if 'message' property exists
      expect(response.data.message).to.equal('Success'); // Assuming the API response structure has a 'message' property with value 'Success'
    } catch (error) {
      // Log any errors that occur during the API request
      console.error('API Request Failed:', error.message);

      // Rethrow the error to fail the test
      throw error;
    }
  });
});
