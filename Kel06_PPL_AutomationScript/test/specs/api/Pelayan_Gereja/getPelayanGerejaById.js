const axios = require('axios');
const { expect } = require('chai');

describe('Get By ID Pelayan Gereja API Test', () => {
  const id = 4;
  const url = `http://127.0.0.1:8070/api/pelayanGereja/${id}`;
  it('should return a 200 status code', async () => {
    try {
      const response = await axios.get(url);
      expect(response.status).to.equal(200); // Check for a 400 status
    } catch (error) {
      throw new Error(`Failed to fetch data: ${error.message}`);
    }
  });
  it('should return response in json content-type', async () => {
    try {
      const response = await axios.get(url);
      const contentType = response.headers['content-type'];
      expect(contentType.toLowerCase()).to.include('application/json'); // check json ato engga
    } catch (error) {
      throw new Error(`Failed to fetch todos: ${error.message}`);
    }
  });
  it('should return the response property "code" with "200" value', async () => {
    try {
      const response = await axios.get(url);
      expect(response.data).to.have.property('code').to.equal('200');
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

  it('should return the response property "data" in array ', async () => {
    try {
      const response = await axios.get(url);
      expect(response.data).to.have.property('data').that.is.an('array'); // check si properti data nya dalam array ato engga 
    } catch (error) {
      throw new Error(`Failed to fetch todos: ${error.message}`);
    }
  });

});