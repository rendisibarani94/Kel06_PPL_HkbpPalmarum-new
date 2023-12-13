const axios = require('axios');
const { expect } = require('chai');

    describe('Delete Jadwal Ibadah API Test', async () => {
    const id = 14
      const url = `http://127.0.0.1:8070/api/deleteIbadah/${id}`;

      let response;

      before(async () => {
        try {
          response = await axios.delete(url);
        } catch (error) {
          throw new Error(`Failed to fetch data: ${error.message}`);
        }
      });
    
      it('should return 200 response status', async () => {
        expect(response.status).to.equal(200);
      });
    
      it('should return json content type', async () => {
        expect(response.headers['content-type'].toLowerCase()).to.include('application/json');
      });
    
      it('should return response "code" property equals "200"', async () => {
        expect(response.data.code).to.equal('200');
      });
    
      it('should return response "message" property equals "Success"', async () => {
        expect(response.data.message).to.equal('Success');
      });
    
      it('should return response "data" property equal to null', async () => {
        expect(response.data.data).to.equal(null);
      });
    


      });