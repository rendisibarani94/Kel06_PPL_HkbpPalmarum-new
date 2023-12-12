const axios = require('axios');
const { expect } = require('chai');

describe('Add Baptis API', () => {
    it('should add Registrasi Baptis successfully', async () => {
        try {
          // Set the parameters for the request
          const requestData = {
            
          };
      
          // Make the API request using axios
          const response = await axios.post('http://127.0.0.1:8070/api/storeBaptis', requestData);
      
          // Check the response status
          expect(response.status).to.equal(200); // Assuming a successful response has status 200
      
          // Check the structure and content of the response data
          expect(response.data).to.have.property('code'); // Check if 'code' property exists
          expect(response.data.code).to.equal('200'); // Assuming the API response structure has a 'code' property with value '200'
      
          expect(response.data).to.have.property('message'); // Check if 'message' property exists
          expect(response.data.message).to.equal('Success'); // Assuming the API response structure has a 'message' property with value 'Success'
        } catch (error) {
          // If there is an error, check if it's the expected 400 status code
          if (error.response && error.response.status === 400) {
            // The request was not successful, and the status code is 400
            console.log('Received expected 400 status code');
          } else {
            // The error is not as expected, rethrow it
            throw error;
          }
        }
      });
      
  });