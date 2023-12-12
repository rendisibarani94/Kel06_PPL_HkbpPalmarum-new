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
      //expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin");
    } catch (error) {
      console.error("Test failed:", error.message);
      throw error;
    }

    const heading = await $('h1.m-0');
    expect(heading).toHaveText('Dashboard');
  });

  it("should display Daftar Jemaat Gereja", async () => {
    await $('.small-box-footer').click();

//expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin/jemaat");

    const heading = await $('h3.card-title');
    expect(heading).toHaveText('Daftar Jemaat Gereja');
  })

  it("should display Pendaftaran Jemaat", async () => {
    const tambahJemaatButton  = $("#buttonHeader")
    await tambahJemaatButton.click();

   // expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin/daftarJemaat");

    const tambahJemaatHeading = await $("#textHeader");
    expect(tambahJemaatHeading).toHaveText('Pendaftaraan Jemaat');

  })


  it('should fill form data and show success message', async () => {
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
      'Nama Depan': 'Sarah',
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
    dropdownIdReg.waitForExist();
    await dropdownIdReg.selectByVisibleText('Jahuari Sianturi'); // Ganti dengan opsi yang diinginkan
    
    // Tambahkan delay 5 detik (5000 milidetik) untuk melihat inputan
    await browser.pause(1000);
    
    dropdownIdReg.waitForValue('2', { timeout: 5000 }); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih
    
    // Assertion
    const selectedIdRegValue = await dropdownIdReg.getValue();
    assert.strictEqual(selectedIdRegValue, '2'); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih

    const idHubKeluargaDropdown = 'id_hub_keluarga';
    const dropdownIdHubKeluarga = $(`select[name="${idHubKeluargaDropdown}"]`);
    await dropdownIdHubKeluarga.click();
    dropdownIdHubKeluarga.waitForExist();
    await dropdownIdHubKeluarga.selectByVisibleText('Istri'); // Ganti dengan opsi yang diinginkan

    // Tambahkan delay 5 detik (5000 milidetik) untuk melihat inputan
    await browser.pause(1000);

    dropdownIdHubKeluarga.waitForValue('2', { timeout: 3000 }); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih

    // Assertion
    const selectedIdHubKeluargaValue = await dropdownIdHubKeluarga.getValue();
    assert.strictEqual(selectedIdHubKeluargaValue, '2'); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih

    
    const idPekerjaanDropdown = 'id_pekerjaan';
    const dropdownIdPekerjaan = $(`select[name="${idPekerjaanDropdown}"]`);
    await dropdownIdPekerjaan.click();
    dropdownIdPekerjaan.waitForExist();
    await dropdownIdPekerjaan.selectByVisibleText('Programmer'); // Ganti dengan opsi yang diinginkan

    // Tambahkan delay 5 detik (5000 milidetik) untuk melihat inputan
    await browser.pause(1000);

    dropdownIdPekerjaan.waitForValue('8', { timeout: 3000 }); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih

    // Assertion
    const selectedIdPekerjaanValue = await dropdownIdPekerjaan.getValue();
    assert.strictEqual(selectedIdPekerjaanValue, '8'); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih


    const idBidangPendidikanDropdown = 'id_bidang_pendidikan';
    const dropdownIdBidangPendidikan = $(`select[name="${idBidangPendidikanDropdown}"]`);
    await dropdownIdBidangPendidikan.click();
    dropdownIdBidangPendidikan.waitForExist();
    await dropdownIdBidangPendidikan.selectByVisibleText('Pendidikan Vokasional'); // Ganti dengan opsi yang diinginkan

    // Tambahkan delay 5 detik (5000 milidetik) untuk melihat inputan
    await browser.pause(1000);

    dropdownIdBidangPendidikan.waitForValue('4', { timeout: 3000 }); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih

    // Assertion
    const selectedIdBidangPendidikanValue = await dropdownIdBidangPendidikan.getValue();
    assert.strictEqual(selectedIdBidangPendidikanValue, '4'); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih

    
    const idPendidikanDropdown = 'id_pendidikan';
    const dropdownIdPendidikan = $(`select[name="${idPendidikanDropdown}"]`);
    await dropdownIdPendidikan.click();
    dropdownIdPendidikan.waitForExist();
    await dropdownIdPendidikan.selectByVisibleText('SMA'); // Ganti dengan opsi yang diinginkan

    // Tambahkan delay 5 detik (5000 milidetik) untuk melihat inputan
    await browser.pause(1000);

    dropdownIdPendidikan.waitForValue('4', { timeout: 3000 }); // Ganti dengan nilai yang sesuai dengan opsi yang dipilih

    // Assertion
    const selectedIdPendidikanValue = await dropdownIdPendidikan.getValue();
    assert.strictEqual(selectedIdPendidikanValue, '4'); // Ganti dengan nilai yang sesuai dengan opsi yang dipilihxa


    const createButton = $('button.btn.btn-success.btn-lg.float-right');

    await createButton.click();

    await browser.pause(5000);
    
    
  });

});