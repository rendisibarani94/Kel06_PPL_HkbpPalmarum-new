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

  it("should search data in jadwal ibadah table and click the detail button", async()=> {

    const searchInput = $('.form-control.form-control-sm');
    searchInput.setValue('Minggu Trinitatis / 2023-06-17 / 08:00:00');
    await searchInput.click();

    await searchInput.setValue('Minggu Trinitatis / 2023-06-17 / 08:00:00');

    await browser.pause(2000);

    searchInput.keys('Enter');

    const editJemaat = $('.btn.btn-primary');
    await editJemaat.click();

    await browser.pause(3000);

  })

  


});