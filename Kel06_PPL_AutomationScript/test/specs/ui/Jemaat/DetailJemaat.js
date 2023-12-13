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
    
    it("should search data from table", async () => {

        await browser.url("http://127.0.0.1:8000/admin/jemaat")
        
        const searchInput = $('.form-control.form-control-sm');
        searchInput.setValue('Nova Berta Sianturi');
        await searchInput.click();
    
        await searchInput.setValue('Nova Berta Sianturi');
    
        await browser.pause(2000);
    
        searchInput.keys('Enter');

        const detailJemaat = $('.btn.btn-primary');
        await detailJemaat.click();
    
        // assert.notExists(deleteJemaat, 'Item should be deleted');
    
        await browser.pause(2000);
    
      });

  
  });