const axios = require('axios');
const { expect } = require('chai');

    describe('Get All Registrasi Pernikahan API Test', () => {
        it('should return 200 response status', async () => {
          try {
            const response = await axios.get('http://127.0.0.1:8070/api/rpp');
            expect(response.status).to.equal(200); // cek status
          } catch (error) {
            throw new Error(`Failed to fetch todos: ${error.message}`);
          }
        });
        it('should return response in json content-type', async () => {
          try {
            const response = await axios.get('http://127.0.0.1:8070/api/rpp');
            const contentType = response.headers['content-type'];
            expect(contentType.toLowerCase()).to.include('application/json'); // check json ato engga
          } catch (error) {
            throw new Error(`Failed to fetch todos: ${error.message}`);
          }
        });
        it('should return the response property "code" with "200" value', async () => {
          try {
            const response = await axios.get('http://127.0.0.1:8070/api/rpp');
            expect(response.data).to.have.property('code').to.equal('200');
          } catch (error) {
            throw new Error(`Failed to fetch todos: ${error.message}`);
          }
        });
        it('should return the response property "message" with "Success" value', async () => {
          try {
            const response = await axios.get('http://127.0.0.1:8070/api/rpp');
            expect(response.data).to.have.property('message').to.equal('Success');
          } catch (error) {
            throw new Error(`Failed to fetch todos: ${error.message}`);
          }
        });
        it('should return the response property "data" in array ', async () => {
          try {
            const response = await axios.get('http://127.0.0.1:8070/api/rpp');
            expect(response.data).to.have.property('data').that.is.an('array'); // check si properti data nya dalam array ato engga 
          } catch (error) {
            throw new Error(`Failed to fetch todos: ${error.message}`);
          }
        });
      });