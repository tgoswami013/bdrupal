<?php

use Behat\Testwork\Hook\Scope\BeforeSuiteScope;
use Behat\Testwork\Hook\Scope\AfterSuiteScope;

use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawDrupalContext {

  /**
   * Initializes context.
   *
   * Every scenario gets its own context instance.
   * You can also pass arbitrary arguments to the
   * context constructor through behat.yml.
   */
  public function __construct() {
  }

//    /**
//     * @BeforeSuite
//     */
//    public static function prepare(BeforeSuiteScope $scope)
//    {
//        echo "Before Suite Executed";
//    }
//
//    /**
//     * @AfterSuite
//     */
//    public static function teardown()
//    {
//        echo "After Suite Executed";
//    }

//    /**
//     * @BeforeFeature @login
//     */
//    public static function setupFeature()
//    {
//        echo "Before Feature Executed";
//    }
//
//    /**
//     * @AfterFeature @login
//     */
//    public static function teardownfeature()
//    {
//        echo "After Feature Executed";
//    }

    /**
     * @BeforeScenario @login&&@smoke
     */
    public static function before()
    {
//        echo "Before Scenario Executed";
    }

    /**
     * @AfterScenario @login&&@smoke
     */
    public static function after()
    {
//        echo "After Scenario Executed";
    }

    /**
     * @Transform /^(\d+)$/
     */
    public function castStringToNumber($string)
    {
        return intval($string);
    }

    /**
     * @Then :arg1 items added to cart1
     */
    public function itemsAddedToCart2($arg1)
    {
        echo gettype($arg1);
//        throw new PendingException();
    }

    /**
     * @Then :count items added to cart
     */
    public function itemsAddedToCart($count)
    {
        echo gettype($count);
//        throw new PendingException();
    }

    /**
     * @Then this is my step definition
     */
    public function xyz()
    {
//        throw new PendingException();
    }

//    /**
//     * @Then I see :arg1 link
//     */
//    public function iSeeLink($arg1)
//    {
//        throw new PendingException();
//    }
//
//    /**
//     * @Then I do not see :arg1 link
//     */
//    public function iDoNotSeeLink($arg1)
//    {
//        throw new PendingException();
//    }

    /**
     * @Then /^I (see|do not see) \"([a-zA-Z\s]*)\" link$/
     */
    public function iSeeLink($option,$expectedValue)
    {
        echo $option;
        echo "\n" .$expectedValue;
    }


//    /**
//     * @When /^I select (?:[0-9]+)(?:st|nd|rd|th)? item$/
//     */
//    public function iSelectStItem()
//    {
//    }

    /**
     * @When /^(?:I|She|He|User) follow(?:s)? \"([a-zA-Z\s]*)\" link$/
     */
    public function iFollowLink($arg1)
    {
        echo "\n" . $arg1;

    }

    /**
     * @When /^I select ([0-9]+)(?:nd|rd|th|st)? item$/
     */
    public function iSelectNdItem($number)
    {
        echo $number;

    }


    /**
     * @Then /^I should see "([^"]*)" heading$/
     */
    public function iShouldSeeHeading($expected)
    {
        $page = $this->getSession()->getPage();
        $title = $page->find('css','h1')->getText();
        assert($title===$expected, sprintf('actual is "%s",but expected is "%s"',$title, $expected));
    }

    /**
     * @When I wait :arg1 seconds
     */
    public function iWaitSeconds($arg1)
    {
        sleep($arg1);

    }

//
//
//    /**
//    * @BeforeStep @login
//    */
//    public static function beforeStep()
//    {
//        echo "Before Step Executed";
//    }
//
//    /**
//     * @AfterStep @login
//     */
//    public static function afterStep()
//    {
//        echo "After Step Executed";
//    }

    /**
     * @When I wait for :arg1 seconds
     */
    public function iWaitForSeconds($seconds)
    {
        sleep($seconds);
    }



}
