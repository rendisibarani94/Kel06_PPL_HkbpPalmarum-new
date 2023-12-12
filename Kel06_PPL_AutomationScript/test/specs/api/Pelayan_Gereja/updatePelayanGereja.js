const axios = require('axios');
const { expect } = require('chai');

describe('Update Pelayan Gereja API', () => {
    it('should update Pelayan Gereja successfully', async () => {
      // Set the parameters for the request
      const requestData = {
        id_pelayan : 10,
        id_jemaat: 10,
        tanggal_tahbisan: "2010-06-22",
        jabatan: "pendeta",
        tanggal_akhir_jawatan: "2025-06-22",
        keterangan: "Pendeta Baik Saja lah"
      }
                // Make the API request using fetch
                const response = await axios.put('http://127.0.0.1:8070/api/updatePelayanGereja', requestData);
  
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