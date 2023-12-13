const axios = require('axios');
const { expect } = require('chai');

describe('Get All Baptis API Test', () => {
  const url = 'http://127.0.0.1:8070/api/baptis';

  it('should return 200 response status', async () => {
    try {
      const response = await axios.get(url);
      expect(response.status).to.equal(200); // Check status
    } catch (error) {
      throw new Error(`Failed to fetch todos: ${error.message}`);
    }
  });

  it('should return response in json content-type', async () => {
    try {
      const response = await axios.get(url);
      const contentType = response.headers['content-type'];
      expect(contentType.toLowerCase()).to.include('application/json'); // Check JSON or not
    } catch (error) {
      throw new Error(`Failed to fetch todos: ${error.message}`);
    }
  });

  it('should return the response property "code" with 200 value', async () => {
    try {
      const response = await axios.get(url);
      expect(response.data).to.have.property('code').to.equal('200'); // Check the value of the "code" property
    } catch (error) {
      throw new Error(`Failed to fetch todos: ${error.message}`);
    }
  });

  it('should return the response property "message" with "Success" value', async () => {
    try {
      const response = await axios.get(url);
      expect(response.data).to.have.property('message').to.equal('Success');
    } catch (error) {
      throw new Error(`Failed to fetch todos: ${error.message}`);
    }
  });

  it('should return the response property "data" as an array', async () => {
    try {
      const response = await axios.get(url);
      expect(response.data).to.have.property('data').that.is.an('array'); // Check if the "data" property is an array
    } catch (error) {
      throw new Error(`Failed to fetch todos: ${error.message}`);
    }
  });
});
