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
      expect(browser.getUrl()).toContain("http://127.0.0.1:8000/admin");
    } catch (error) {
      console.error("Test failed:", error.message);
      throw error;
    }

    const heading = await $('h1.m-0');
    expect(heading).toHaveText('Dashboard');
  });

  // after(async () => {
  //   // Reset the database to a known state
  //   try {
  //     await resetDatabase();
  //   } catch (error) {
  //     console.error("Database reset failed:", error.message);
  //   }
  // });


});
