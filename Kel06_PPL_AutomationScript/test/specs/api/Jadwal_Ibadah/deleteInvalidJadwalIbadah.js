const axios = require('axios');
const { expect } = require('chai');

    describe('Delete Invalid Jadwal Ibadah API Test', () => { //(Bug Reporting)
    const id = 99219
      const url = `http://127.0.0.1:8070/api/deleteIbadah/${id}`;

        it('should return 400 response status', async () => {
          try {
            const response = await axios.delete(url);
            throw new Error(`Failed to fetch data: ${error.message}`);
          } catch (error) {
            expect(error.response.status).to.equal(400); // cek status                
          }
        });
        it('should return json content type', async () => {
            try {
              const response = await axios.delete(url);
              throw new Error(`Failed to fetch data: ${error.message}`);
            } catch (error) {
              expect(error.response.headers['content-type'].toLowerCase()).to.include('application/json'); // check json ato engga                  
            }
          });
          it('should return response "code" property equals "400"', async () => {
            try {
              const response = await axios.delete(url);
              throw new Error(`Failed to fetch data: ${error.message}`);
            } catch (error) {
              expect(error.response.data).to.have.property('code').to.equal('400');                  
            }
          });
          it('should return response "message" property equals "Failed"', async () => {
            try {
              const response = await axios.delete(url);
              throw new Error(`Failed to fetch data: ${error.message}`);
            } catch (error) {
              expect(error.response.data).to.have.property('message').to.equal('Failed');                  
            }
          });
          it('should return response "data" property equal to null', async () => {
            try {
              const response = await axios.delete(url);
              throw new Error(`Failed to fetch data: ${error.message}`);
            } catch (error) {
              expect(error.response.data).to.have.property('data').to.equal(null); // check si properti data nya dalam array ato engga                   
            }
          });
    
      });