const axios = require('axios');
const { expect } = require('chai');

describe('Delete By ID rpp API Test', () => {
  const idToDelete = 44;
  const deleteUrl = `http://127.0.0.1:8070/api/deleteKegiatan/${idToDelete}`;

  it('should return a 200 status code after successful deletion', async () => {
    try {
      const response = await axios.delete(deleteUrl);
      expect(response.status).to.equal(200); // Check for a 200 status after successful deletion
    } catch (error) {
    //   expect(error.response.status).to.equal(400);
    throw new Error(`Failed to delete data: ${error.message}`)

    }
  });

  it('should not be able to fetch the deleted resource', async () => {
    try {
      // Add a delay or use a different mechanism to wait for the asynchronous operation to complete
      await new Promise(resolve => setTimeout(resolve, 2000));

      // Attempt to fetch the resource that should have been deleted
      await axios.get(deleteUrl);
      // If the request above is successful, it means the resource still exists, which is not expected
      throw new Error('Resource should have been deleted');
    } catch (error) {
      // Expecting an error since the resource should not be found (404 or 405)
      expect(error.response.status).to.be.oneOf([404, 405]);
    }
  });
});
