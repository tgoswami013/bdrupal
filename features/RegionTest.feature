@region
Feature: Testing the region
  Background:
    Given I am on the homepage

  @region
  Scenario: test link in region
    Given I am on the homepage
    When I follow "Articles" in the "header" region
    Then I should see "Give it a go and grow your own herbs"
    When I follow "Contact" in the "footer" region
    Then I should see "Website feedback"