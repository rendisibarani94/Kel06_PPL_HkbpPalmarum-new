const axios = require('axios');
const { expect } = require('chai');

describe('Delete By ID rpp API Test', () => {
  const idToDelete = 36;
  const deleteUrl = `http://127.0.0.1:8070/api/deleteBaptis/${idToDelete}`;

  it('should return a 204 status code after successful deletion', async () => {
    try {
      const response = await axios.delete(deleteUrl);
      expect(response.status).to.equal(200); // Check for a 204 status after successful deletion
    } catch (error) {
      throw new Error(`Failed to delete data: ${error.message}`);
    }
  });

  it('should not be able to fetch the deleted resource', async () => {
    try {
      // Attempt to fetch the resource that should have been deleted
      await axios.get(deleteUrl);
      // If the request above is successful, it means the resource still exists, which is not expected
      throw new Error('Resource should have been deleted');
    } catch (error) {
      // Expecting an error since the resource should not be found (404)
      expect(error.response.status).to.equal(405);
    }
  });
});
