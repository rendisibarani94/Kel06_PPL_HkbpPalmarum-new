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
      expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin");
    } catch (error) {
      console.error("Test failed:", error.message);
      throw error;
    }

    const heading = await $('h1.m-0');
    expect(heading).toHaveText('Dashboard');
  });

/* 
  Menampilkan semua link text
*/
//   it('should find all the link text', async () => {
//     const linkText = await $('.small-box-footer a').getText();
//     if (linkText !== '') {
//       console.log('Link Text :::', linkText);
//     }
//   });
  


/* 
  menampilkan semua atribut
*/

//   it("should display atribut on dashboard", async () => {
//     const jemaatElement = await $(".small-box.bg-info");
//     const innerText = await jemaatElement.$(".inner").getText();
//     const href = await jemaatElement.$(".small-box-footer a").getAttribute("href");
//     const iconClass = await jemaatElement.$(".icon i").getAttribute("class");

//     const expected = `
//       <div class="small-box bg-info">
//         <div class="inner">
//           <h3>${innerText}</h3>
//           <p>Total Jemaat</p>
//         </div>
//         <div class="icon">
//           <i class="${iconClass}"></i>
//         </div>
//         <a href="${href}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
//       </div>
//     `;
//     expect(jemaatElement.getHTML()).toEqual(expected);
//   });

  it("should display Daftar Jemaat Gereja", async () => {
    await $('.small-box-footer').click();

    expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin/jemaat");

    const heading = await $('h3.card-title');
    expect(heading).toHaveText('Daftar Jemaat Gereja');
  })

  it("should display Pendaftaran Jemaat", async () => {
    const tambahJemaatButton  = $("#buttonHeader")
    await tambahJemaatButton.click();

    expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin/daftarJemaat");

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
      'Nama Depan': 'Windi',
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
    
    
  });

  const assert = require('chai').assert;

  it("should search data from table", async () => {

    await browser.url("http://127.0.0.1:8000/admin/jemaat")
    
    const searchInput = $('.form-control.form-control-sm');
    searchInput.setValue('Nova Berta Sianturi');
    await searchInput.click();

    await searchInput.setValue('Nova Berta Sianturi');

    await browser.pause(2000);

    searchInput.keys('Enter');

  });
  
  it("should search and delete data from jemaat table", async() =>{

    const searchInput = $('.form-control.form-control-sm');
    searchInput.setValue('Talenta Pardede');
    await searchInput.click();

    await searchInput.setValue('Talenta Pardede');

    await browser.pause(2000);

    searchInput.keys('Enter');

    const deleteJemaat = $('.btn.btn-danger');
    await deleteJemaat.click();

    // assert.notExists(deleteJemaat, 'Item should be deleted');

    await browser.pause(2000);


  })

  it('should delete an item by name', async() => {

    // Locate the delete button based on the provided HTML structure and name
    const deleteButton = $('td*=Ester Pardede').$('..').$('.btn-danger');

    // Click the delete button
    deleteButton.click();

    // Wait for the confirmation modal or any necessary UI changes
    browser.pause(2000);

    // Add assertions to verify the result after deletion
    // For example, you can check if the deleted item is no longer present in the UI
    // const deletedItem = $('td*=Ester Pardede').$('..');
    // assert.notExists(deletedItem, 'Item should be deleted');
  });

  it("should open detail data Jemaat", async () => {
    const nameToOpenDetail = 'Juaja br. Lumbantobing';
  
    // Navigasi ke halaman Jemaat
    // Temukan elemen data berdasarkan nama
    const dataElement = getDataElementByName(nameToOpenDetail);
  
    // Lakukan pengecekan apakah elemen data ditemukan
    assert.exists(dataElement, 'Data should exist before opening detail');
  
    // Temukan tombol detail pada elemen data yang dicari
    const detailButton = dataElement.$('.btn.btn-primary');
  
    // Lakukan pengecekan apakah tombol detail ditemukan
    assert.exists(detailButton, 'Detail button should exist before opening detail');
  
    // Klik tombol detail untuk membuka halaman detail data
    await detailButton.click();
  
    // Tunggu konfirmasi modal atau perubahan UI lainnya jika diperlukan
    await browser.pause(2000);
  
    // Lakukan pengecekan apakah URL saat ini mencakup path ke halaman detail
    assert.isTrue(browser.getUrl().includes("/admin/detailJemaat/"), 'Detail page should be displayed');
  
    // Tambahkan delay untuk tujuan demonstrasi (bisa dihilangkan pada implementasi sebenarnya)
    await browser.pause(2000);


  });

  it("should make the page back to jemaat", async () => {
    const kembaliButton = $('#buttonKembali');
    
    // Lakukan pengecekan apakah tombol Kembali ada sebelum diklik
    assert.exists(kembaliButton, 'Button Kembali should exist before click');
  
    // Simulasikan klik pada tombol Kembali
    await kembaliButton.click();
    
    // Tunggu sampai URL berubah setelah klik tombol Kembali
    await browser.waitUntil(() => browser.getUrl().includes("/admin/jemaat"), {
      timeout: 5000,
      timeoutMsg: 'Expected URL to include "/admin/jemaat" after clicking Kembali button'
    });
  
    // Tambahkan delay untuk tujuan demonstrasi (bisa dihilangkan pada implementasi sebenarnya)
    await browser.pause(5000);
  });
  
  // Fungsi untuk mendapatkan elemen data berdasarkan nama
  function getDataElementByName(name) {
    // Ganti selector dan logika sesuai dengan struktur HTML dan cara Anda mendapatkan elemen data
    return $(`td*=${name}`).$('..');
  }

  it("should search data in jemaat table and click the edit button", async()=> {

    const searchInput = $('.form-control.form-control-sm');
    searchInput.setValue('J sama Phyto S.Tr');
    await searchInput.click();

    await searchInput.setValue('J sama Phyto S.Tr');

    await browser.pause(2000);

    searchInput.keys('Enter');

    const editJemaat = $('.btn.btn-warning');
    await editJemaat.click();

    // assert.notExists(deleteJemaat, 'Item should be deleted');

    await browser.pause(3000);


  })

  it("should edit the existed data", async () =>{
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
      'Nama Depan': 'RendiJ',
      'Nama Belakang': 'Phyton',
      'Gelar Depan': 'Ir',
      'Gelar Belakang': 'S.Tr',
      'Tempat Lahir': 'Parsoburan',
      'Tanggal Lahir': '01/01/1990',
      'No. Telepon': '1234567890',
      'Alamat': 'Negara Pintupohan',
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
    await browser.pause(3000);
    
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


    const editButton = $('.btn.btn-warning.btn-lg.float-right');

    await editButton.click();

    await browser.pause(5000);
  })

  after(async () => {
    // Reset the database to a known state
    try {
      await resetDatabase();
    } catch (error) {
      console.error("Database reset failed:", error.message);
    }
  });


});
