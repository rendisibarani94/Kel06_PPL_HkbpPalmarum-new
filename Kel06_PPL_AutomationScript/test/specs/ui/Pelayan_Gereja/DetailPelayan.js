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
    
  it("should search and detail data from pelayan table", async() =>{

    const searchInput = $('.form-control.form-control-sm');
    searchInput.setValue('Lidya Simamora');
    await searchInput.click();

    await searchInput.setValue('Lidya Simamora');

    await browser.pause(2000);

    searchInput.keys('Enter');

    const deleteJemaat = $('.btn.btn-primary');
    await deleteJemaat.click();

    // assert.notExists(deleteJemaat, 'Item should be deleted');

    await browser.pause(2000);


  });


});