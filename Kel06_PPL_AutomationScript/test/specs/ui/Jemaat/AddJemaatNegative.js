const { expect } = require("chai");
const LoginPage = require("../../../pageobjects/login.page2");

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
    expect(await heading.getText()).to.equal('Dashboard');
  });
  
  it("should display Daftar Jemaat Gereja", async () => {
    await $('.small-box-footer').click();
  
    const heading = await $('h3#textHeader'); // Adjust the selector based on your application structure
    const headingText = await heading.getText();
    expect(headingText).to.equal('Daftar Jemaat Gereja');
  });

  
it("should display Pendaftaran Jemaat", async () => {
  const tambahJemaatButton = $("#buttonHeader");
  await tambahJemaatButton.click();

  const tambahJemaatHeading = await $('div.col-sm-6 h1'); // Adjust the selector based on your application structure
  const headingText = await tambahJemaatHeading.getText();
  expect(headingText).to.equal('Pendaftaran Jemaat');
});

it('should fill form data and show alert message for empty "Nama Depan"', async () => {
  const fields = {
    'Nama Depan': $('input[name="nama_depan"]'),
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
    'Nama Depan': '',
    'Nama Belakang': 'Marpaung',
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

  for (const label in fields) {
    const input = fields[label];
    await input.setValue(inputValues[label]);
  }

  const idRegDropdown = 'id_registrasi';
  const dropdownIdReg = $(`select[name="${idRegDropdown}"]`);
  await dropdownIdReg.click();
  await dropdownIdReg.selectByVisibleText('Jahuari Sianturi');

  dropdownIdReg.waitForValue('2', { timeout: 5000 });
  const selectedIdRegValue = await dropdownIdReg.getValue();
  expect(selectedIdRegValue).to.equal('2');

  // Penyesuaian pada pengecekan dan delay
  const idHubKeluargaDropdown = 'id_hub_keluarga';
  const dropdownIdHubKeluarga = $(`select[name="${idHubKeluargaDropdown}"]`);
  await dropdownIdHubKeluarga.click();
  await dropdownIdHubKeluarga.selectByVisibleText('Istri');
  dropdownIdHubKeluarga.waitForValue('2', { timeout: 5000 });
  const selectedIdHubKeluargaValue = await dropdownIdHubKeluarga.getValue();
  expect(selectedIdHubKeluargaValue).to.equal('2');

  // (Penyesuaian pada bagian dropdown lainnya)

  const createButton = $('button.btn.btn-success.btn-lg.float-right');
  await createButton.click();

  const tambahJemaatHeading = await $('div.col-sm-6 h1'); // Adjust the selector based on your application structure
  const headingText = await tambahJemaatHeading.getText();
  expect(headingText).to.equal('Pendaftaran Jemaat');


  await browser.pause(5000);
});



});
