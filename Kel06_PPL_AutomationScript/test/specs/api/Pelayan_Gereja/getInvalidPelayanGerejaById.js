const axios = require('axios');
const { expect } = require('chai');

describe('Get Invalid Pelayan Gereja By ID  API Test', () => {
  const id = 1234;
  const url = `http://127.0.0.1:8070/api/pelayanGereja/${id}`;
  it('should return a 400 status code', async () => {
    try {
      const response = await axios.get(url);
      throw new Error(`Failed to fetch data: ${error.message}`);
    } catch (error) {
      expect(error.response.status).to.equal(400); // Check for a 400 status
      
    }
  });
  it('should return response in json content-type', async () => {
    try {
      const response = await axios.get(url);
      const contentType = response.headers['content-type'];
      throw new Error(`Failed to fetch data: ${error.message}`);
    } catch (error) {
      expect(error.response.headers['content-type'].toLowerCase()).to.include('application/json');
    }
  });
  it('should return the response property "code" with "400" value', async () => {
    try {
      const response = await axios.get(url);
      throw new Error(`Failed to fetch data: ${error.message}`);
    } catch (error) {
      expect(error.response.data).to.have.property('code').to.equal('400');
      
    }
  });

  it('should return the response property "message" with "Failed" value', async () => {
    try {
      const response = await axios.get(url);
      throw new Error(`Failed to fetch data: ${error.message}`);
    } catch (error) {
      expect(error.response.data).to.have.property('message').to.equal('Failed');
      
    }
  });

  it('should return the response property "data" with value null ', async () => {
    try {
      const response = await axios.get(url);
      throw new Error(`Failed to fetch data: ${error.message}`);
    } catch (error) {
      expect(error.response.data).to.have.property('data').to.equal(null); // check si properti data nya dalam array ato engga 
      
    }
  });

});