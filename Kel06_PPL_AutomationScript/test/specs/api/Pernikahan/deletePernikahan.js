const axios = require('axios');
const { expect } = require('chai');

    describe('Delete Registrasi Pernikahan API Test', async () => {
    const id = 1
      const url = `http://127.0.0.1:8070/api/deleteRegistrasiPernikahan/${id}`;

        it('should return 200 response status', async () => {
          try {
            const response = await axios.delete(url);
            expect(response.status).to.equal(200); // cek status
            const contentType = response.headers['content-type'];
            expect(contentType.toLowerCase()).to.include('application/json'); // check json ato engga
          } catch (error) {
            throw new Error(`Failed to fetch todos: ${error.message}`);
          }
        });
        it('should return json content type', async () => {
            try {
              const response = await axios.delete(url);
              const contentType = response.headers['content-type'];
              expect(contentType.toLowerCase()).to.include('application/json'); // check json ato engga
            } catch (error) {
              throw new Error(`Failed to fetch todos: ${error.message}`);
            }
          });
          it('should return response "code" property equals "200"', async () => {
            try {
              const response = await axios.delete(url);
              expect(response.data).to.have.property('code').to.equal('200');
            } catch (error) {
              throw new Error(`Failed to fetch todos: ${error.message}`);
            }
          });
          it('should return response "message" property equals "Success"', async () => {
            try {
              const response = await axios.delete(url);
              expect(response.data).to.have.property('message').to.equal('Success');
            } catch (error) {
              throw new Error(`Failed to fetch todos: ${error.message}`);
            }
          });
          it('should return response "data" property equal to null', async () => {
            try {
              const response = await axios.delete(url);
              expect(response.data).to.have.property('data').to.equal(null); // check si properti data nya dalam array ato engga 
            } catch (error) {
              throw new Error(`Failed to fetch todos: ${error.message}`);
            }
          });
        


      });