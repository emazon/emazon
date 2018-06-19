<?php

  namespace Facebook\WebDriver;
  use Facebook\WebDriver\Remote\DesiredCapabilities;
  use Facebook\WebDriver\Remote\RemoteWebDriver;
  require_once('vendor/autoload.php');

	class HomePageAutomatedTest extends \PHPUnit_Framework_Testcase
	{

      protected $host, $capabilities , $driver, $url;

      public function setUp()
      {
        // start Chrome with 5 second timeout
        $this -> host = 'http://localhost:4444/wd/hub'; // this is the default
        $this -> capabilities = DesiredCapabilities::chrome();
        $this -> driver = RemoteWebDriver::create($this -> host, $this -> capabilities, 5000);
        $this -> url = "http://localhost:8888/emazon";
      }

      /** @test */
      public function testEmazonWebsiteTitle()
      {
          // To Check the Website Title
          $this -> driver -> get($this -> url);
          $this->assertContains('eMazon', $this -> driver -> getTitle());
      }

      /** @test */
      public function testHomePageURL()
      {
          // To Check Whether the Routing [ Current ] is not null , meaning each route must have a route name
          $this -> driver -> get($this -> url);
          $this -> assertNotNULL($this -> driver -> getCurrentURL());
      }

      /** @test */
      public function testAutoCompleteSearchForm()
      {
          // Check if the autocomplete search box gives the list of appended search results
          $this -> driver -> get($this -> url);
          $this -> driver->findElement(WebDriverBy::id('search_query'))
              ->sendKeys('Ethio Fashion');
          $this -> driver ->wait(20)->until(
              WebDriverExpectedCondition::presenceOfAllElementsLocatedBy(
                  WebDriverBy::className('ui-menu-item')
              )
          );
      }

      /** @test */
      public function testHeaderCatagoryItemAreClickable()
      {
          //Check if the catagory items are clickable by Checking each listed category item (Image View ) Buttons [ Either Clickable or Disabled Status]
          $this -> driver -> get($this -> url);
          $WebDriverElement = array();
          $WebDriverElement =  $this -> driver -> findElement(WebDriverBy::className('header_catagory'));
          foreach($WebDriverElement as $WebElement)
          {
            $this -> driver -> assertTrue($WebElement->isEnabled());
          }
      }


      public function tearDown()
      {
        $this -> driver -> close();
      }
  }

?>
