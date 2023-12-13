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
      //expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin");
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

it("should display Daftar Baptis Baptis",async () =>{

  const tambahBaptisButton  = $("#buttonHeader")
    await tambahBaptisButton.click();
  
    // expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin/baptis");

    const tambahBaptisHeading = await $("#textHeader");
    expect(tambahBaptisHeading).toHaveText('Daftar Baptis Baptis');

    browser.pause(2000);


})

  it("should fill the tambah baptis form", async () => {
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
    const createButton = await $('.btn.btn-success.btn-lg.float-right');

    await createButton.click();

    await browser.pause(5000);
  })



});