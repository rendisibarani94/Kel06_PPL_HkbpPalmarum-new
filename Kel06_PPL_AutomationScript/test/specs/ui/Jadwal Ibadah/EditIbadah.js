const { expect } = require("@wdio/globals");
const LoginPage = require("../../../pageobjects/login.page");
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

  it("should display Jadwal Ibadah page", async () => {
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
    const rppLinkSelector = '.nav-treeview > .nav-item:nth-child(1) > .nav-link';
    const rppLink = await $(rppLinkSelector);
    await rppLink.waitForClickable({ timeout: 5000 });
    await rppLink.click();
  
    // Add any necessary pause or additional wait for the page to load completely
    await browser.pause(1000); // Adjust the pause duration if needed
  });

  it("should search data in jadwal ibadah table and click the edit button", async () => {
    const searchInput = $('.form-control.form-control-sm');
    searchInput.setValue('Minggu Trinitatis / 2023-06-04 / 12:01:32');
    await searchInput.click();
  
    await searchInput.setValue('Minggu Trinitatis / 2023-06-04 / 12:01:32');
  
    await browser.pause(2000);
  
    searchInput.keys('Enter');
  
    // Corrected selector for the edit button
    const editJemaat = $('.btn.btn-warning');
    await editJemaat.click();
  
    await browser.pause(3000);
  });
  

  it("should edit form data and show success message", async()=>{
    const fields = {
      'Tanggal Ibadah': $('input[name="tgl_ibadah"]'),
      'Waktu ibadah': $('input[name="waktu_mulai"]'),
      'Jumlah Pelayan': $('input[name="jumlah_pelayan"]'),
      'Keterangan': $('input[name="keterangan"]'),
      'Nyanyian 1': $('input[name="nyanyian_1"]'),
      'Nyanyian 2': $('input[name="nyanyian_2"]'),
      'Nyanyian 3': $('input[name="nyanyian_3"]'),
      'Nyanyian 4': $('input[name="nyanyian_4"]'),
      'Nyanyian 5': $('input[name="nyanyian_5"]'),
      'Nyanyian 6': $('input[name="nyanyian_6"]'),
      'Nyanyian 7': $('input[name="nyanyian_7"]'),
      'Votum': $('input[name="votum"]'),
      'Hukum Taurat': $('input[name="hukum_taurat"]'),
      'Pengakuan Dosa':$('input[name="pengakuan_dosa"]'),
      'Epistel': $('input[name="epistel"]'),
      'Pengakuan Iman': $('input[name="pengakuan_iman"]'),
      'Khotbah': $('input[name="khotbah"]'),
      'Doa Penutup': $('input[name="doa_penutup"]'),

    }

    const inputValues = {
        'Tanggal Ibadah': '01/01/2024',
        'Waktu ibadah': '17/20/00 PM',
        'Jumlah Pelayan': '2',
        'Keterangan': 'Ibadah',
        'Nyanyian 1': 'Buku Ende 201',
        'Nyanyian 2': 'Buku Ende 201',
        'Nyanyian 3': 'Buku Ende 201',
        'Nyanyian 4': 'Buku Ende 201',
        'Nyanyian 5': 'Buku Ende 201',
        'Nyanyian 6': 'Buku Ende 201',
        'Nyanyian 7': 'Buku Ende 201',
        'Votum': 'Abc',
        'Hukum Taurat': 'Titah 1',
        'Pengakuan Dosa':'Pengakuan Dosa',
        'Epistel':'Epistel',
        'Pengakuan Iman':'Pengakuan Iman',
        'Khotbah':'Khotbah',
        'Doa Penutup':'Doa Penutup',
    }

    for (const label in fields) {
        const input = fields[label];
        await input.setValue(inputValues[label]);
    }


    const idJenisMingguDropdown = 'id_jenis_minggu';
    const dropdownidJenisMinggu = $(`select[name="${idJenisMingguDropdown}"]`);
    await dropdownidJenisMinggu.click();
    dropdownidJenisMinggu.waitForExist();
    await dropdownidJenisMinggu.selectByVisibleText('Minggu Trinitatis');

    await browser.pause(1000);
    dropdownidJenisMinggu.waitForValue('1');

    const selectedidJenisMingguValue = await dropdownidJenisMinggu.getValue();
    assert.strictEqual(selectedidJenisMingguValue, '1');

    // const idPelayanIbadahDropdown = 'id_melayani';
    // const dropdownidPelayanIbadah = $(`select[name="${idPelayanIbadahDropdown}"]`);
    // await dropdownidPelayanIbadah.click();
    // dropdownidPelayanIbadah.waitForExist();
    // await dropdownidJenisMinggu.selectByVisibleText('Pendeta Ritual Delima Sianturi ');

    // await browser.pause(1000);
    // dropdownidPelayanIbadah.waitForValue('1');

    // const selectedidPelayanIbadahValue = await dropdownidPelayanIbadah.getValue();
    // assert.strictEqual(selectedidPelayanIbadahValue, '1');

    const idPelayanIbadahDropdown = 'id_melayani';
    const dropdownidPelayanIbadah = $(`select[name="${idPelayanIbadahDropdown}"]`);

    // Click on the dropdown to open the options
    await dropdownidPelayanIbadah.click();

    // Wait for the dropdown options to exist
    await dropdownidPelayanIbadah.waitForExist();

    // Select the option by visible text ("Pendeta Ritual Delima Sianturi")
    await dropdownidPelayanIbadah.selectByVisibleText('Pendeta Christofel Pulutan Nababan ');

    // Pause for a moment to allow the selection to take effect
    await browser.pause(1000);

    // Wait for the selected value ('8') to be reflected in the dropdown
    dropdownidPelayanIbadah.waitForValue('4');

    // Get the selected value from the dropdown
    const selectedidPelayanIbadahValue = await dropdownidPelayanIbadah.getValue();

    // Assert that the selected value matches the expected value ('8')
    assert.strictEqual(selectedidPelayanIbadahValue, '4');


    const editButton = $('.btn.btn-warning.btn-lg.float-right');

    await editButton.click();

    await browser.pause(5000);

  })
  
  


});