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

  it("should display RPP page", async () => {
    // Wait for the "Detail" link to be clickable
    const detailLinkSelector = '.nav-pills > .nav-item:nth-child(1) > .nav-link';
    const detailLink = await $(detailLinkSelector);
    await detailLink.waitForClickable({ timeout: 5000 });
    await detailLink.click();
  
    // Wait for the submenu to be visible
    const submenuSelector = '.nav-treeview';
    const submenu = await $(submenuSelector);
    await submenu.waitForDisplayed();
  
    // Wait for the "Kegiatan" link to be clickable
    const rppLinkSelector = '.nav-treeview > .nav-item:nth-child(8) > .nav-link';
    const rppLink = await $(rppLinkSelector);
    await rppLink.waitForClickable({ timeout: 5000 });
    await rppLink.click();
  
    // Add any necessary pause or additional wait for the page to load completely
    await browser.pause(1000); // Adjust the pause duration if needed
  });
  
  
  it("should display Pendaftaran RPP", async () => {
    const tambahRPPButton  = $("#buttonHeader")
    await tambahRPPButton.click();

   // expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin/daftarRpp");

    const tambahRPPHeading = await $("#textHeader");
    expect(tambahRPPHeading).toHaveText('Pendaftaraan RPP');

    await browser.pause(2000);

  })

  it("should fill form data and show success message", async ()=>{

    const idJemaatDropdown = 'id_jemaat';
    const dropdownidJemaat = $(`select[name="${idJemaatDropdown}"]`);
    await dropdownidJemaat.click();
    dropdownidJemaat.waitForExist();
    await dropdownidJemaat.selectByVisibleText('Jahuari Sianturi');

    await browser.pause(1000);
    dropdownidJemaat.waitForValue('2', { timeout: 5000 });

    const selectedidJemaatValue = await dropdownidJemaat.getValue();
    assert.strictEqual(selectedidJemaatValue, '2');

    const idJenisRPPDropdown = 'id_jenis_rpp';
    const dropdownidJenisRPP = $(`select[name="${idJenisRPPDropdown}"]`);
    await dropdownidJenisRPP.click();
    dropdownidJenisRPP.waitForExist();
    await dropdownidJenisRPP.selectByVisibleText('Membunuh');

    await browser.pause(1000);
    dropdownidJemaat.waitForValue('1', { timeout: 5000 });

    const selectedidJenisRPPValue = await dropdownidJenisRPP.getValue();
    assert.strictEqual(selectedidJenisRPPValue, '1');


    const fields = {
        'Tanggal Warta RPP': $('input[name="tgl_warta_rpp"]'),
        'Keterangan': $('input[name="keterangan"]'),
    }

    const inputValues = {
        'Tanggal Warta RPP': '12/12/2023',
        'Keterangan': 'Terdaftar',
    }

    for (const label in fields) {
        const input = fields[label];
        await input.setValue(inputValues[label]);
    }

    const createButton = $('button.btn.btn-success.btn-lg.float-right');

    await createButton.click();

    await browser.pause(5000);
  })


});