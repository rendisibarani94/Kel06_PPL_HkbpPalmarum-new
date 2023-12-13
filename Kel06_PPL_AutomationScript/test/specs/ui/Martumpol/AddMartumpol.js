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
  
  it("should display martumpol page", async () => {
    // Wait for the "Detail" link to be clickable
    const detailLinkSelector = '.nav-pills > .nav-item:nth-child(1) > .nav-link'; // Updated selector to match the "Detail" link
    const detailLink = await $(detailLinkSelector);
    await detailLink.click();
  
    // Wait for the "Kegiatan" link to be visible and then click it
    const martupolLinkSelector = '.nav-treeview > .nav-item:nth-child(5) > .nav-link'; // Updated selector to match the "Kegiatan" link
    const martupolLink = await $(martupolLinkSelector);
    await martupolLink.waitForDisplayed();
    await martupolLink.waitForClickable({ timeout: 5000 }); // Ensure it's clickable
    await martupolLink.click();
  
    // Add any necessary pause or additional wait for the page to load completely
    await browser.pause(1000); // Adjust the pause duration if needed
  });
  
  });