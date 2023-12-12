const { expect } = require("@wdio/globals");
const LoginPage = require("../../../pageobjects/login.page");
const { assert } = require("chai");
// const SecurePage = require("../../../pageobjects/secure.page");

describe("My Login application", () => {
  before(async () => { 
    await browser.url("http://localhost:8000/login");
  });

  it("should login with valid credentials", async () => {
    try {
      await LoginPage.open();
      await LoginPage.login("Admin@gmail.com", "12345678");
     // expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin");
    } catch (error) {
      console.error("Test failed:", error.message);
      throw error;
    }

    const heading = await $('h1.m-0');
    expect(heading).toHaveText('Dashboard');
  });

it("should display baptis page", async () => {
  // Wait for the "Detail" link to be clickable
  const detailLinkSelector = '.nav-pills > .nav-item:nth-child(1) > .nav-link'; // Updated selector to match the "Detail" link
  const detailLink = await $(detailLinkSelector);
  await detailLink.click();

  // Wait for the "Baptis" link to be visible and then click it
  const baptisLinkSelector = '.nav-treeview > .nav-item:nth-child(3) > .nav-link'; // Updated selector to match the "Kegiatan" link
  const baptisLink = await $(baptisLinkSelector);
  await baptisLink.waitForDisplayed();
  await baptisLink.click();

  // Add any necessary pause or additional wait for the page to load completely
  await browser.pause(1000); // Adjust the pause duration if needed
});

// it("should search data in jemaat table and click the edit button", async () => {
//   const searchInput = $('.form-control.form-control-sm');
//   await searchInput.setValue('heri');
//   await searchInput.keys('Enter');

// //   const rowWithHeri = $$('table#example1 tbody tr').find(row =>
// //     row.$('td:first-child').getText() === 'heri'
// // );

//   // assert.isTrue(rowWithHeri.isExisting(), 'Row with "heri" not found');

//   // const editButton = rowWithHeri.$('a.btn.btn-warning');
//   //       editButton.click();

//   const editJemaat = $('.btn.btn-warning');
//   await editJemaat.waitForClickable({ timeout: 5000 });
//   await editJemaat.click();

//   await browser.pause(2000);
// });

// it("should edit the existing data", async () => {
//   const fields = {
//     'Nama Lengkap': $('input[name="nama_lengkap"]'),
//     'Alamat': $('input[name="alamat"]'),
//     'Jenis Kelamin': $('input[name="jenis_kelamin"]'),
//     'Tanggal Baptis': $('input[name="tanggal_baptis"]'),
//     'Nama Ayah': $('input[name="nama_ayah"]'),
//     'Nama Ibu': $('input[name="nama_ibu"]'),
//     'Tempat Lahir': $('input[name="tempat_lahir"]'),
//     'Tanggal Lahir': $('input[name="tanggal_lahir"]'),
//     'Keterangan': $('input[name="keterangan"]'),
//   };

//   const inputValues = {
//     'Nama Lengkap': 'Heri Sipahutar',
//     'Alamat': 'Tarutung',
//     'Jenis Kelamin': 'Perempuan',
//     'Tanggal Baptis': '01/01/2024',
//     'Nama Ayah': 'Jojo',
//     'Nama Ibu': 'Bella',
//     'Tempat Lahir': 'Tarutung',
//     'Tanggal Lahir': '01/01/2022',
//     'Keterangan': 'Baptis',
//   };

//   for (const label in fields) {
//     const input = fields[label];
//     await input.setValue(inputValues[label]);
//   }

//   const idRegDropdown = 'id_pendeta';
//   const dropdownIdReg = $(`select[name="${idRegDropdown}"]`);
//   await dropdownIdReg.selectByVisibleText('Pendeta Christofel Pulutan Nababan');

//   await browser.pause(1000);

//   const selectedIdRegValue = await dropdownIdReg.getValue();
//   assert.strictEqual(selectedIdRegValue, '4', 'Dropdown value should be 4');

//   const editButton = await $('.btn.btn-warning.btn-lg.float-right');
//   await editButton.click();

//   await browser.pause(5000);
// });


// it('should edit the existing data', async () => {
//   const nameToEdit = 'rany'; // The name you want to edit

//   // Find the row containing the specified name
//   const targetRow = await findRowByName(nameToEdit, { timeout: 5000 });

//   if (!targetRow) {
//     throw new Error(`Row with name '${nameToEdit}' not found`);
//   }

//   // Check if the row is still visible
//   const isRowVisible = await targetRow.isDisplayed();
//   if (!isRowVisible) {
//     // Scroll up and try again
//     await browser.scrollIntoView(false);
//     await browser.pause(1000);
//     await findRowByName(nameToEdit, { timeout: 5000 });
//   }

//   // Edit the data in the found row
//   const editButton = await targetRow.$('.btn.btn-warning');
//   await editButton.click();

//   // Your existing code to fill the form with new data goes here
//   const fields = {
//     // ... your field definitions

//   };

//   const inputValues = {
//     // ... your input values
//   };

//   for (const label in fields) {
//     const input = fields[label];
//     await input.setValue(inputValues[label], { timeout: 1000 });
//   }

//   // Your existing code for dropdown selection and button click goes here
//   const idRegDropdown = 'id_pendeta';
//   const dropdownIdReg = $(`select[name="${idRegDropdown}"]`);
//   await dropdownIdReg.selectByVisibleText('Pendeta Christofel Pulutan Nababan', { timeout: 1000 });

//   await browser.pause(1000);

//   const selectedIdRegValue = await dropdownIdReg.getValue();
//   assert.strictEqual(selectedIdRegValue, '4', 'Dropdown value should be 4');

//   const saveButton = await $('.btn.btn-warning.btn-lg.float-right');
//   await saveButton.click();

//   // Add additional assertions or checks if needed
// });

// it('should edit the existing data', async () => {
//   const nameToEdit = 'Dini Sipahutar'; // The name you want to edit

//   // Find the row containing the specified name
//   const targetRow = await findRowByName(nameToEdit, { timeout: 5000 });

//   if (!targetRow) {
//     throw new Error(`Row with name '${nameToEdit}' not found`);
//   }

//   // Check if the row is still visible
//   const isRowVisible = await targetRow.isDisplayed();
//   if (!isRowVisible) {
//     // Scroll into view of the found row
//     await targetRow.scrollIntoView();
//     await browser.pause(1000);
//   }

//   // Edit the data in the found row
//   const editButton = await targetRow.$('.btn.btn-warning');
//   await editButton.click();
// });

it("should search and edit data from baptis table", async() =>{

  const searchInput = $('.form-control.form-control-sm');
  searchInput.setValue('Dini Sipahutar');
  await searchInput.click();

  await searchInput.setValue('Dini Sipahutar');

  await browser.pause(2000);

  searchInput.keys('Enter');

  const editJemaat = $('.btn.btn-warning');
  await editJemaat.click();

  // assert.notExists(deletebsptis, 'Item should be deleted');

  await browser.pause(2000);



})

// // Function to find row based on the name in the scrolling table
// const findRowByName = async (name, options) => {
//   let targetRow;

//   while (true) {
//     // Search for the row with the specified name using XPath
//     targetRow = await $(`//td[text()="${name}"]/parent::tr`, options);

//     // If the row is found, break the loop
//     if (targetRow) {
//       break;
//     }

//     // Scroll down the table
//     const table = await $('#example1');
//     await table.scrollIntoView(false);
//     await browser.pause(1000); // Adjust the pause duration as needed
//   }

//   return targetRow;
// };


// it("should fill the tambah baptis form", async () => {
//   const fields = {
//     'Nama Lengkap': $('input[name="nama_lengkap"]'),
//     'Alamat': $('input[name="alamat"]'),
//     'Jenis Kelamin': $('input[name="jenis_kelamin"]'),
//     'Tanggal Baptis': $('input[name="tanggal_baptis"]'),
//     'Nama Ayah': $('input[name="nama_ayah"]'),
//     'Nama Ibu': $('input[name="nama_ibu"]'),
//     'Tempat Lahir' : $('input[name="tempat_lahir"]'),
//     'Tanggal Lahir': $('input[name="tanggal_lahir"]'),
//     'Keterangan': $('input[name="keterangan"]'),
//   };

//   const inputValues = {
//     'Nama Lengkap': 'Dini Sipahutar',
//     'Alamat': 'Tarutung',
//     'Jenis Kelamin': 'Perempuan',
//     'Tanggal Baptis': '01/01/2024',
//     'Nama Ayah': 'Jojo',
//     'Nama Ibu': 'Bella',
//     'Tempat Lahir': 'Tarutung',
//     'Tanggal Lahir': '01/01/2022',
//     'Keterangan': 'Baptis'

//   }

//   for (const label in fields) {
//     const input = fields[label];
//     await input.setValue(inputValues[label]);
//   }

//   const idRegDropdown = 'id_pendeta';
//   const dropdownIdReg = $(`select[name="${idRegDropdown}"]`);
//   await dropdownIdReg.click();
//   dropdownIdReg.waitForExist();
//   await dropdownIdReg.selectByVisibleText('Pendeta Christofel Pulutan Nababan'); // Ganti dengan opsi yang diinginkan
  
//   // Tambahkan delay 5 detik (5000 milidetik) untuk melihat inputan
//   await browser.pause(1000);
  
//   dropdownIdReg.waitForValue('4', { timeout: 5000 }); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih

//   await browser.pause(5000);
//   const editButton = await $('.btn.btn-warning btn-lg float-right');

//   await editButton.click();

//   await browser.pause(5000);
// })




// after(async () => {
//   // Reset the database to a known state
//   try {
//     await resetDatabase();
//   } catch (error) {
//     console.error("Database reset failed:", error.message);
//   }
// });


it("should fill the edit baptis form", async () => {
  const fields = {
    'Nama Lengkap': $('input[name="nama_lengkap"]'),
    'Alamat': $('input[name="alamat"]'),
    'Jenis Kelamin': $('input[name="jenis_kelamin"]'),
    'Tanggal Baptis': $('input[name="tanggal_baptis"]'),
    'Nama Ayah': $('input[name="nama_ayah"]'),
    'Nama Ibu': $('input[name="nama_ibu"]'),
    'Tempat Lahir' : $('input[name="tempat_lahir"]'),
    'Tanggal Lahir': $('input[name="tanggal_lahir"]'),
    'Keterangan': $('input[name="keterangan"]'),
  };

  const inputValues = {
    'Nama Lengkap': 'Dini Sipahutar',
    'Alamat': 'Tarutung',
    'Jenis Kelamin': 'Perempuan',
    'Tanggal Baptis': '01/01/2024',
    'Nama Ayah': 'Jojo',
    'Nama Ibu': 'Bella',
    'Tempat Lahir': 'Tarutung',
    'Tanggal Lahir': '01/01/2022',
    'Keterangan': 'Baptis'

  }

  for (const label in fields) {
    const input = fields[label];
    await input.setValue(inputValues[label]);
  }

  const idRegDropdown = 'id_pendeta';
  const dropdownIdReg = $(`select[name="${idRegDropdown}"]`);
  await dropdownIdReg.click();
  dropdownIdReg.waitForExist();
  await dropdownIdReg.selectByVisibleText('Pendeta Christofel Pulutan Nababan'); // Ganti dengan opsi yang diinginkan
  
  // Tambahkan delay 5 detik (5000 milidetik) untuk melihat inputan
  await browser.pause(1000);
  
  dropdownIdReg.waitForValue('4', { timeout: 5000 }); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih

  await browser.pause(5000);
  const editButton = await $('.btn.btn-warning.btn-lg.float-right');

  await editButton.click();

  await browser.pause(5000);
})


});