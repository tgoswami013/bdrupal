@login
Feature: Verify Login functionality

  Background:
    Given I am on the homepage
    When I follow "Log in"

  @OptionalCapture
  Scenario: Verify Login Functionality
    #Positive
    Then I see "test" link
    #negative
    Then I do not see "Test me" link

  @OptionalNonCapture
  Scenario: Verify Login Functionality
    Then I do not see "Test me" link
    When I follow "test" link
    When He follows "test" link
    When User follow "test" link
    When She follows "test" link
    When I select 2 item
    When I select 11th item
    When I select 21st item

#    And this is my custom step definition
#    Then this is my "value1" and "value2"


#    When I follow "Log in"
#    When I fill in "Username" with "admin"
#    Then I fill in "Password" with "admin"

  @CreateUser
  Scenario: Create New User
    When I follow "Create new account"
    And I fill in "Email address" with "goswami.tarun77@gmail.com"

  @ForgotPassword
  Scenario: Verify forgot password functionality messages
    And I follow "Reset your password"
    And I fill in "Username or email address" with "wrongusername"
    And I press "Submit"
    Then I should see the following error message:
      | Error messages                                            |
      | wrongusername is not recognized as a username or an email address. |
    And I fill in "Username or email address" with "goswami.tarun77@gmail.com"
    And I press "Submit"
    Then I should see the following success messages:
    |Success Messages|
 |Further instructions have been sent to your email address.|

  @UserLogin
  Scenario: Verify user Login
    And I fill in "email" with "goswami.tarun77+1@gmail.com"
    And I fill in "passwd" with "Test1234"
    And I press "SubmitLogin"
    And I wait 10 seconds

  @ScenarioOutline
  Scenario Outline: Verify Login Functionality
    And I fill in "email" with "<email>"
    And I fill in "passwd" with "<password>"
    And I press "SubmitLogin"
    Then I should see "<heading>" heading

    Examples:
      | email                     | password  | heading        |
      | goswami.tarun77@gmail.com | Test@1234 | MY ACCOUNT     |
      | wrongusername             | test      | AUTHENTICATION |
