const axios = require('axios');
const { expect } = require('chai');

describe('Jemaat API', () => {
    it('should return a list of jemaat that have been registered records', async () => {
        try {
            const response = await axios.get('http://127.0.0.1:8070/api/RegistrasiJemaat');
            console.log('Response Data:', response.data);

            expect(response.status).to.equal(200);
            expect(response.data).to.be.an('object');
            expect(response.data.code).to.equal('200');
            expect(response.data.message).to.equal('Success');
            expect(response.data.data).to.be.an('array');
            // Add more assertions based on your API response structure

        } catch (error) {
            throw new Error(`Failed to fetch jemaat that have been registered records: ${error.message}`);
        }
    });

});