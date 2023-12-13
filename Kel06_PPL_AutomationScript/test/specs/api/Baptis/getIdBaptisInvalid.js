const axios = require('axios');
const { expect } = require('chai');

describe('Get By ID Baptis Invalid', () => {
  const invalidId = 999; // Invalid ID
  const invalidUrl = `http://127.0.0.1:8070/api/baptis/${invalidId}`;

  it('should return a 400 status code for an invalid ID', async () => {
    try {
      const response = await axios.get(invalidUrl);
      throw new Error(`Failed to fetch data: ${error.message}`);
    } catch (error) {
      expect(error.response.status).to.equal(400);
    }
  });

  it('should return response in json content-type for an invalid ID', async () => {
    try {
      const response = await axios.get(invalidUrl);
      const contentType = response.headers['content-type'];
      throw new Error(`Failed to fetch data: ${error.message}`);
    } catch (error) {
      expect(error.response.headers['content-type'].toLowerCase()).to.include('application/json');
    }
  });

  it('should return the response property "code" with not 200 value for an invalid ID', async () => {
    try {
      const response = await axios.get(invalidUrl);
      throw new Error(`Failed to fetch data: ${error.message}`);
    } catch (error) {
        expect(error.response.data).to.have.property('code').to.equal('400');
    }
  });

  it('should return the response property "message" without "Success" value for an invalid ID', async () => {
    try {
      const response = await axios.get(invalidUrl);
      throw new Error(`Failed to fetch data: ${error.message}`);
      
    } catch (error) {
      expect(error.response.data).to.have.property('message').to.equal('Failed');
    }
  });

  it('should return the response property "data" as null for an invalid ID', async () => {
    try {
      const response = await axios.get(invalidUrl);
      throw new Error(`Failed to fetch data: ${error.message}`);
    } catch (error) {
        expect(error.response.data).to.have.property('data').to.equal(null);
    }
  });
});
