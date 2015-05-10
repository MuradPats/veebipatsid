package com.example.tests;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class Kandideerimine {
  private WebDriver driver;
  private String baseUrl;
  private boolean acceptNextAlert = true;
  private StringBuffer verificationErrors = new StringBuffer();

  @Before
  public void setUp() throws Exception {
    driver = new FirefoxDriver();
    baseUrl = "http://patsid.cs.ut.ee/";
    driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
  }

  @Test
  public void testKandideerimine() throws Exception {
    driver.get(baseUrl + "/");
    driver.findElement(By.linkText("Kandidaadid")).click();
    driver.findElement(By.name("Nimi")).clear();
    driver.findElement(By.name("Nimi")).sendKeys("Test33");
    driver.findElement(By.name("Ringkond")).clear();
    driver.findElement(By.name("Ringkond")).sendKeys("3");
    driver.findElement(By.name("Erakond")).clear();
    driver.findElement(By.name("Erakond")).sendKeys("4");
    driver.findElement(By.id("kandideerinupp")).click();
    driver.findElement(By.linkText("Kandidaadid")).click();
    driver.findElement(By.xpath("//div[@id='Table']/table/tbody/tr[33]/td[2]")).click();
  }

  @After
  public void tearDown() throws Exception {
    driver.quit();
    String verificationErrorString = verificationErrors.toString();
    if (!"".equals(verificationErrorString)) {
      fail(verificationErrorString);
    }
  }

  private boolean isElementPresent(By by) {
    try {
      driver.findElement(by);
      return true;
    } catch (NoSuchElementException e) {
      return false;
    }
  }

  private boolean isAlertPresent() {
    try {
      driver.switchTo().alert();
      return true;
    } catch (NoAlertPresentException e) {
      return false;
    }
  }

  private String closeAlertAndGetItsText() {
    try {
      Alert alert = driver.switchTo().alert();
      String alertText = alert.getText();
      if (acceptNextAlert) {
        alert.accept();
      } else {
        alert.dismiss();
      }
      return alertText;
    } finally {
      acceptNextAlert = true;
    }
  }
}
