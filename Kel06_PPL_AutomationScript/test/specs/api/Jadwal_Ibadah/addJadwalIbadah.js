const axios = require('axios');
const { expect } = require('chai');

describe('Add Jadwal Ibadah API', () => {
    it('should Add Jadwal Ibadah successfully', async () => {
      // Set the parameters for the request
      const requestData = {
        tgl_ibadah: "2023-06-04",
        nama_jenis_minggu: "Minggu Ke-6 Trinitatis",
        id_melayani: 4,
        jumlah_pelayan: 2,
        waktu_mulai: "12:01:32",
        keterangan: "Minggu Pagi",
        nyanyian_1: "559 : 1 - 3",
        votum: "A. XIV/A - D. XII/35",
        nyanyian_2: "113 : 1",
        hukum_taurat: "1 + Artinya",
        nyanyian_3: '688 : 1 - 2',
        pengakuan_dosa: "B.5 - C.6",
        nyanyian_4: "128 : 1",
        epistel: "MATIUS 11 : 25 - 27",
        nyanyian_5: "116 : 1 + 4",
        pengakuan_iman: "Oleh Pendeta",
        nyanyian_6: "112 : 1 .......... Persembahan 1A, 1B",
        khotbah: "KEJADIAN 1 : 1 -2, 26 - 28",
        nyanyian_7: "679 : 1 ......... Pelean 2",
        doa_penutup: "Amen, Amen, Amen"
      }
                // Make the API request using fetch
                const response = await axios.post('http://127.0.0.1:8070/api/storeIbadah', requestData);
  
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