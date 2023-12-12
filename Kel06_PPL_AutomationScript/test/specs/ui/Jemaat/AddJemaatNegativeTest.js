// // test-script.js
// const { expect } = require("@wdio/globals");
// const LoginPage = require("../../../pageobjects/login.page");
// const SecurePage = require("../../../pageobjects/secure.page");
// const { assert } = require("chai");

// describe("My Login application", () => {
//   before(async () => {
//     await browser.url("http://localhost:8000/login");
//   });

//   it("should login with valid credentials", async () => {
//     try {
//       await LoginPage.open();
//       await LoginPage.login("Admin@gmail.com", "12345678");
//     } catch (error) {
//       console.error("Test failed:", error.message);
//       throw error;
//     }

//     const heading = await $('h1.m-0');
//     expect(heading).toHaveText('Dashboard');
//   });

//   it("should display Daftar Jemaat Gereja", async () => {
//     await $('.small-box-footer').click();

//     const heading = await $('h3.card-title');
//     expect(heading).toHaveText('Daftar Jemaat Gereja');
//   })

//   it("should display Pendaftaran Jemaat", async () => {
//     const tambahJemaatButton  = $("#buttonHeader")
//     await tambahJemaatButton.click();

//     const tambahJemaatHeading = await $("#textHeader");
//     expect(tambahJemaatHeading).toHaveText('Pendaftaraan Jemaat');
//   })

//   it('should fill form data and show success message', async () => {
//     const fields = {
//       'Nama Belakang': $('input[name="nama_belakang"]'),
//       'Gelar Depan': $('input[name="gelar_depan"]'),
//       'Gelar Belakang': $('input[name="gelar_belakang"]'),
//       'Tempat Lahir': $('input[name="tempat_lahir"]'),
//       'Tanggal Lahir': $('input[name="tanggal_lahir"]'),
//       'No. Telepon': $('input[name="no_telepon"]'),
//       'Alamat': $('input[name="alamat"]'),
//       'Jenis Kelamin': $('input[name="jenis_kelamin"]'),
//       'Pekerjaan Lainnya': $('input[name="nama_pekerjaan_lain"]'),
//       'Keterangan': $('input[name="keterangan"]'),
//     };

//     const inputValues = {
//       'Nama Belakang': 'Marpaung',
//       'Gelar Depan': '',
//       'Gelar Belakang': 'S.Pd',
//       'Tempat Lahir': 'Medan',
//       'Tanggal Lahir': '01/01/1990',
//       'No. Telepon': '1234567890',
//       'Alamat': 'Tarutung',
//       'Jenis Kelamin': 'Laki-Laki',
//       'Pekerjaan Lainnya': '',
//       'Keterangan': 'Terdaftar',
//     };

//     await fillForm(fields, inputValues);

//     const idRegDropdown = 'id_registrasi';
//     await selectDropdownValue(idRegDropdown, 'Jahuari Sianturi');

//     const idHubKeluargaDropdown = 'id_hub_keluarga';
//     await selectDropdownValue(idHubKeluargaDropdown, 'Istri');

//     const idPekerjaanDropdown = 'id_pekerjaan';
//     await selectDropdownValue(idPekerjaanDropdown, 'Programmer');

//     const idBidangPendidikanDropdown = 'id_bidang_pendidikan';
//     await selectDropdownValue(idBidangPendidikanDropdown, 'Pendidikan Vokasional');

//     const idPendidikanDropdown = 'id_pendidikan';
//     await selectDropdownValue(idPendidikanDropdown, 'SMA');

//     const createButton = $('button.btn.btn-success.btn-lg.float-right');
//     await createButton.click();
//   });

//   async function fillForm(fields, inputValues) {
//     for (const label in fields) {
//       const input = fields[label];
//       await input.setValue(inputValues[label]);
//     }
//   }
  

//   async function fillForm(inputValues) {
//     const fields = {
//       'Gelar Depan': $('input[name="gelar_depan"]'),
//       'Gelar Belakang': $('input[name="gelar_belakang"]'),
//       'Tempat Lahir': $('input[name="tempat_lahir"]'),
//       'Tanggal Lahir': $('input[name="tanggal_lahir"]'),
//       'No. Telepon': $('input[name="no_telepon"]'),
//       'Alamat': $('input[name="alamat"]'),
//       'Jenis Kelamin': $('input[name="jenis_kelamin"]'),
//       'Pekerjaan Lainnya': $('input[name="nama_pekerjaan_lain"]'),
//       'Keterangan': $('input[name="keterangan"]'),
//     };
  
//     for (const label in fields) {
//       const input = fields[label];
//       await input.setValue(inputValues[label]);
//     }
//   }


// });


// test-script.js
const { expect } = require("@wdio/globals");
const LoginPage = require("../../../pageobjects/login.page2");
const SecurePage = require("../../../pageobjects/secure.page");
const { assert } = require("chai");

describe("My Login application", () => {
  before(async () => {
    await browser.url("http://localhost:8000/login");
  });

  it("should login with valid credentials", async () => {
    try {
      await LoginPage.open();
      await LoginPage.login("Admin@gmail.com", "12345678");
    } catch (error) {
      console.error("Test failed:", error.message);
      throw error;
    }

    const heading = await $('h1.m-0');
    expect(heading).toHaveText('Dashboard');
  });

  it("should display Daftar Jemaat Gereja", async () => {
    await $('.small-box-footer').click();

    const heading = await $('h3.card-title');
    expect(heading).toHaveText('Daftar Jemaat Gereja');
  });

  it("should display Pendaftaran Jemaat", async () => {
    const tambahJemaatButton  = $("#buttonHeader");
    await tambahJemaatButton.click();

    const tambahJemaatHeading = await $("#textHeader");
    expect(tambahJemaatHeading).toHaveText('Pendaftaraan Jemaat');
  });

  it('should fill form data and show alert message for empty "Nama Belakang"', async () => {
    const fields = {
      'Nama Belakang': $('input[name="nama_belakang"]'),
      'Gelar Depan': $('input[name="gelar_depan"]'),
      'Gelar Belakang': $('input[name="gelar_belakang"]'),
      'Tempat Lahir': $('input[name="tempat_lahir"]'),
      'Tanggal Lahir': $('input[name="tanggal_lahir"]'),
      'No. Telepon': $('input[name="no_telepon"]'),
      'Alamat': $('input[name="alamat"]'),
      'Jenis Kelamin': $('input[name="jenis_kelamin"]'),
      'Pekerjaan Lainnya': $('input[name="nama_pekerjaan_lain"]'),
      'Keterangan': $('input[name="keterangan"]'),
    };
  
    const inputValues = {
      'Nama Belakang': '', // Empty to trigger the alert
      'Gelar Depan': '',
      'Gelar Belakang': 'S.Pd',
      'Tempat Lahir': 'Medan',
      'Tanggal Lahir': '01/01/1990',
      'No. Telepon': '1234567890',
      'Alamat': 'Tarutung',
      'Jenis Kelamin': 'Laki-Laki',
      'Pekerjaan Lainnya': '',
      'Keterangan': 'Terdaftar',
    };
  
    await fillForm(fields, inputValues);
  
    const idRegDropdown = 'id_registrasi';
    await selectDropdownValue(idRegDropdown, 'Jahuari Sianturi');
  
    const idHubKeluargaDropdown = 'id_hub_keluarga';
    await selectDropdownValue(idHubKeluargaDropdown, 'Istri');
  
    const idPekerjaanDropdown = 'id_pekerjaan';
    await selectDropdownValue(idPekerjaanDropdown, 'Programmer');
  
    const idBidangPendidikanDropdown = 'id_bidang_pendidikan';
    await selectDropdownValue(idBidangPendidikanDropdown, 'Pendidikan Vokasional');
  
    const idPendidikanDropdown = 'id_pendidikan';
    await selectDropdownValue(idPendidikanDropdown, 'SMA');
  
    const createButton = $('button.btn.btn-success.btn-lg.float-right');
    await createButton.click();
  
    // Check for the alert message
    const alertText = await browser.getAlertText();
    expect(alertText).toContain('Please fill out this field');
  
    // Accept the alert
    await browser.acceptAlert();
  });
  
  async function fillForm(fields, inputValues) {
    for (const label in fields) {
      const input = fields[label];
      await input.setValue(inputValues[label]);
    }
  }

  async function selectDropdownValue(dropdownId, optionText) {
    const dropdown = $(`select[name="${dropdownId}"]`);
    await dropdown.click();
    dropdown.waitForExist();
    await dropdown.selectByVisibleText(optionText);
    await browser.pause(1000);
    dropdown.waitForValue(optionText, { timeout: 3000 });
  
    // Add a log to check the selected value
    const selectedValue = await dropdown.getValue();
    console.log('Selected Value:', selectedValue);
  
    // Update the assertion based on the actual selected value
    assert.strictEqual(selectedValue, optionText);
  }
  
});
