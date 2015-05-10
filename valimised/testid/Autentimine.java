package com.example.tests;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class Autentimine {
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
  public void testAutentimine() throws Exception {
    // ERROR: Caught exception [ERROR: Unsupported command [openWindow | https://www.facebook.com/login.php?skip_api_login=1&api_key=1626023837631574&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.3%2Fdialog%2Foauth%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.facebook.com%252Fdialog%252Freturn%252Farbiter%253Frelation%253Dopener%2526close%253Dtrue%2523origin%253Dhttp%25253A%25252F%25252Fpatsid.cs.ut.ee%25252Ff2b3631eb27bf66%26display%3Dpopup%26state%3Dfc67726aed6468%26scope%26response_type%3Dnone%26default_audience%26auth_type%26ref%3DLoginButton%26client_id%3D1626023837631574%26seen_revocable_perms_nux%3Dfalse%26ret%3Dlogin&cancel_uri=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Freturn%2Farbiter%3Frelation%3Dopener%26close%3Dtrue%26protocol%3Dhttps%26response%3D%257B%2522error%2522%253A%2522access_denied%2522%252C%2522error_code%2522%253A200%252C%2522error_description%2522%253A%2522Permissions%2Berror%2522%252C%2522error_reason%2522%253A%2522user_denied%2522%252C%2522state%2522%253A%2522fc67726aed6468%2522%257D%23origin%3Dhttp%253A%252F%252Fpatsid.cs.ut.ee%252Ff2b3631eb27bf66&display=popup | ]]
    driver.findElement(By.id("email")).clear();
    driver.findElement(By.id("email")).sendKeys("email@email.email");
    driver.findElement(By.id("pass")).clear();
    driver.findElement(By.id("pass")).sendKeys("Parool007");
    driver.findElement(By.id("u_0_2")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | null | ]]
    driver.get("http://patsid.cs.ut.ee/");
    driver.findElement(By.linkText("Kandidaadid")).click();
    driver.findElement(By.id("aeg")).click();
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
