const { expect } = require("@wdio/globals");
const LoginPage = require("../../../pageobjects/login.page");
const { assert } = require("chai");

describe("My Login application", () => {
  before(async () => {
    await browser.url("http://127.0.0.1:8000/admin");
  });

  it("should login with valid credentials", async () => {
    try {
      await LoginPage.open();
      await LoginPage.login("Admin@gmail.com", "12345678");
      //expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin");
    } catch (error) {
      console.error("Test failed:", error.message);
      throw error;
    }

    const heading = await $('h1.m-0');
    expect(heading).toHaveText('Dashboard');
  });

it("should display pelayan gereja page", async () => {
  // Wait for the "Detail" link to be clickable
  const detailLinkSelector = '.nav-pills > .nav-item:nth-child(1) > .nav-link'; // Updated selector to match the "Detail" link
  const detailLink = await $(detailLinkSelector);
  await detailLink.click();

  // Wait for the "Kegiatan" link to be visible and then click it
  const pelayanLinkSelector = '.nav-treeview > .nav-item:nth-child(6) > .nav-link'; // Updated selector to match the "Kegiatan" link
  const pelayanLink = await $(pelayanLinkSelector);
  await pelayanLink.waitForDisplayed();
  await pelayanLink.click();

  // Add any necessary pause or additional wait for the page to load completely
  await browser.pause(1000); // Adjust the pause duration if needed
});
    
  it("should search and edit data from pelayan table", async() =>{

    const searchInput = $('.form-control.form-control-sm');
    searchInput.setValue('Lidya Simamora');
    await searchInput.click();

    await searchInput.setValue('Lidya Simamora');

    await browser.pause(2000);

    searchInput.keys('Enter');

    const deleteJemaat = $('.btn.btn-warning');
    await deleteJemaat.click();

    // assert.notExists(deleteJemaat, 'Item should be deleted');

    await browser.pause(2000);


  });

  it('should fill form data and show success message', async () => {
    const idJemaatDropdown = 'id_jemaat';
    const dropdownIdJemaat = $(`select[name="${idJemaatDropdown}"]`);
  
    // Click on the ID Jemaat dropdown
    await dropdownIdJemaat.click();
  
    // Wait for the dropdown options to exist with a timeout
    await dropdownIdJemaat.waitForExist({ timeout: 5000 });
  
    // Select the option by attribute (value)
    await dropdownIdJemaat.selectByAttribute('value', '1'); // Replace with the desired option value
  
    // Wait until the value of the dropdown is '1'
    await dropdownIdJemaat.waitUntil(
      async () => {
        const selectedValue = await dropdownIdJemaat.getValue();
        return selectedValue === '1';
      },
      { timeout: 5000, timeoutMsg: 'Dropdown value did not become "1" within 5 seconds' }
    );
  
    // Get the selected value from the dropdown
    const selectedIdJemaatValue = await dropdownIdJemaat.getValue();
  
    // Assert that the selected value is '1'
    assert.strictEqual(selectedIdJemaatValue, '1');
  
    const fields = {
      'Tanggal Tahbisan': $('input[name="tanggal_tahbisan"]'),
      'Tanggal Akhir Jawatan': $('input[name="tanggal_akhir_jawatan"]'),
      'Keterangan': $('textarea[name="keterangan"]'),
    };
  
    const inputValues = {
      'Tanggal Tahbisan': '01/19/1994',
      'Tanggal Akhir Jawatan': '06/06/2023',
      'Keterangan': 'Gereja HKBP Palmarum',
    };
  
    // Fill in the form fields
    for (const label in fields) {
      const input = fields[label];
  
      // Wait for the input element to exist
      await input.waitForExist({ timeout: 5000 });
  
      await input.setValue(inputValues[label]);
    }
  
    const jabatanDropdown = 'jabatan';
    const dropdownjabatan = $(`select[name="${jabatanDropdown}"]`);
  
    // Click on the Jabatan dropdown
    await dropdownjabatan.click();
  
    // Wait for the dropdown options to exist with a timeout
    await dropdownjabatan.waitForExist({ timeout: 3000 });
  
    // Select the option by attribute (value)
    await dropdownjabatan.selectByAttribute('value', 'pendeta'); // Replace with the desired option value
  
    // Add a delay of 2 seconds (2000 milliseconds) to see the input
    await browser.pause(2000);
  
    // Wait until the value of the Jabatan dropdown is 'pendeta'
    await dropdownjabatan.waitUntil(
      async () => {
        const selectedValue = await dropdownjabatan.getValue();
        return selectedValue === 'Pendeta';
      },
      { timeout: 3000, timeoutMsg: 'Jabatan dropdown value did not become "Pendeta" within 5 seconds' }
    );
  
    // Get the selected value from the Jabatan dropdown
    const selectedjabatanValue = await dropdownjabatan.getValue();
  
    // Assert that the selected value is 'pendeta'
    assert.strictEqual(selectedjabatanValue, 'Pendeta');
  
    browser.pause(3000);
  
    // Click on the Edit button
    const editButton = $('.btn.btn-warning.btn-lg.float-right');
  
    await editButton.click();
  
    await browser.pause(3000);

    });
  


});