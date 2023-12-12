const axios = require('axios');
const { expect } = require('chai');

describe('Get By ID rpp API Test', () => {
  const validId = 36;
  const invalidId = 999; // ID yang tidak valid
  const validUrl = `http://127.0.0.1:8070/api/baptis/${validId}`;
  const invalidUrl = `http://127.0.0.1:8070/api/baptis/${invalidId}`;

  it('should return a 200 status code for a valid ID', async () => {
    try {
      const response = await axios.get(validUrl);
      expect(response.status).to.equal(200);
    } catch (error) {
      throw new Error(`Failed to fetch data: ${error.message}`);
    }
  });

  it('should return response in json content-type for a valid ID', async () => {
    try {
      const response = await axios.get(validUrl);
      const contentType = response.headers['content-type'];
      expect(contentType.toLowerCase()).to.include('application/json');
    } catch (error) {
      throw new Error(`Failed to fetch data: ${error.message}`);
    }
  });

  it('should return the response property "code" with 200 value for a valid ID', async () => {
    try {
      const response = await axios.get(validUrl);
      expect(response.data).to.have.property('code').to.equal('200');
    } catch (error) {
      throw new Error(`Failed to fetch data: ${error.message}`);
    }
  });
  
  

  it('should return the response property "message" with "Success" value for a valid ID', async () => {
    try {
      const response = await axios.get(validUrl);
      expect(response.data).to.have.property('message').to.equal('Success');
    } catch (error) {
      throw new Error(`Failed to fetch data: ${error.message}`);
    }
  });

  it('should return the response property "data" as an array for a valid ID', async () => {
    try {
      const response = await axios.get(validUrl);
      expect(response.data).to.have.property('data').that.is.an('array');
    } catch (error) {
      throw new Error(`Failed to fetch data: ${error.message}`);
    }
  });

  it('should return a 400 status code for an invalid ID', async () => {
    try {
      const response = await axios.get(invalidUrl);
      throw new Error('Expected a 400 status code, but request was successful');
    } catch (error) {
      expect(error.response.status).to.equal(400);
    }
  });
});
