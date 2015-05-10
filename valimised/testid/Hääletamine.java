package com.example.tests;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class HLetamine {
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
  public void testHLetamine() throws Exception {
    driver.get(baseUrl + "/");
    driver.findElement(By.linkText("Kandidaadid")).click();
    driver.findElement(By.cssSelector("#haaleta > input[name=\"Nimi\"]")).clear();
    driver.findElement(By.cssSelector("#haaleta > input[name=\"Nimi\"]")).sendKeys("Test12345678");
    driver.findElement(By.linkText("Kandidaadid")).click();
    driver.findElement(By.name("Kandidaat")).clear();
    driver.findElement(By.name("Kandidaat")).sendKeys("60");
    driver.findElement(By.id("haaletanupp")).click();
    driver.findElement(By.linkText("Tulemused")).click();
    driver.findElement(By.xpath("//div[@id='Table']/table/tbody/tr[16]/td[2]")).click();
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
