const { expect } = require("chai");
const LoginPage = require("../../../pageobjects/login.page2");

describe("My Login application", () => {
  before(async () => {
    await browser.url("http://localhost:8000/login");
  });

  it("should display an error message for invalid email credentials", async () => {
    await LoginPage.open();

    // Attempt to log in with an invalid email
    await LoginPage.login("aaaa@aaaa", "validPassword");

    // Expect the email input to have the 'is-invalid' class, indicating an error
    const emailInput = await $('#email');
    expect(await emailInput.getAttribute('class')).to.include('is-invalid');

    // Expect an error message to be displayed
    const errorMessage = await $('.invalid-feedback');
    expect(await errorMessage.isDisplayed()).to.be.true;
    expect(await errorMessage.getText()).to.equal('These credentials do not match our records.');

    
    await browser.pause(5000);
    
  });

  // Add more negative test cases as needed
});
