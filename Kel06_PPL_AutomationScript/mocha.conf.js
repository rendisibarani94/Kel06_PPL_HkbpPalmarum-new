module.exports = {
    // Your existing Mocha configuration goes here
  
    // Add the following reporter options
    reporters: ['mochawesome'],
    reporterOptions: {
      mochawesome: {
        stdout: './output/console.log',
        options: {
          reportDir: './output',
          reportFilename: 'report',
          reportTitle: 'My Test Report',
          reportPageTitle: 'My Test Report Page',
          inlineAssets: true,
        },
      },
    },
  };
  